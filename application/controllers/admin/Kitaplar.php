<?php
class Kitaplar extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
				$this->load->helper(array('form', 'url'));
				$this->load->model('Kitaplar_Model'); // model tanımlaması
				$this->load->library("session");
        }

	public function index()
	{
		
		$query=$this->db->get("books"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result(); // Sorgu verilerini "veri" değişkenine yükle
		
		$data["title"]="Ürün listeleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kitap_listele',$data);
		$this->load->view('admin/footer');
	}
   public function ekle()
   
	{	
	
		$data["title"]="Ürün Ekleme Sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kitap_ekle');
		$this->load->view('admin/footer');
	}
	
  public function kaydet()
	{
		// Form verilerini alacaz
		$data=array(
		'isbnno' => $this->input->post('isbnno'),
		'bookname' => $this->input->post('bookname'),
		'publishdate' => $this->input->post('publishdate'),
		'amount' => $this->input->post('amount'),
		'authorid' => $this->input->post('authorid'),
		'publishername' => $this->input->post('publishername'),
		'authorname' => $this->input->post('authorname'),
		'categoryid' => $this->input->post('categoryid'),
		'categoryname' => $this->input->post('categoryname'),
		'pagenumber' => $this->input->post('pagenumber'),
		
		);
		$this->Kitaplar_Model->insert_data("books",$data); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/kitaplar");
	}

  public function sil($id)
	{
		$this->db->query('DELETE FROM books WHERE id='.$id);
		redirect(base_url()."admin/kitaplar");
	}
  public function duzenle($id)
	{
		$query = $this->db->get_where("books",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
        $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		$data["title"]="Ürün Düzenleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kitap_duzenle',$data);
		$this->load->view('admin/footer');
	}
	
  public function guncelle($id)
	{
		// Form verilerini alacaz
		$data=array(
		'isbnno' => $this->input->post('isbnno'),
		'bookname' => $this->input->post('bookname'),
		'publishdate' => $this->input->post('publishdate'),
		'amount' => $this->input->post('amount'),
		'authorid' => $this->input->post('authorid'),
		'publishername' => $this->input->post('publishername'),
		'authorname' => $this->input->post('authorname'),
		'categoryid' => $this->input->post('categoryid'),
		'categoryname' => $this->input->post('categoryname'),
		'pagenumber' => $this->input->post('pagenumber'),
		
		);
		$this->Kitaplar_Model->update_data("books",$data,$id); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/kitaplar");
		
	}
  public function resimekle($id)
	{
		$data["title"]="Ürün Düzenleme Sayfası";
		$data["id"]=$id;
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kitap_resim',$data);
		$this->load->view('admin/footer');
	}
	
    public function resim_upload($id)
	{
		// Resim uplad ayarları
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';        
        $config['max_width']            = 2000;
        $config['max_height']           = 2000;
		$config['file_name']			= date("dmYHis");
		
		$this->load->library('upload', $config); // upload kütüphanesini çağır
		
		if ( !$this->upload->do_upload('dosyaadi'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('admin/kitap_resim', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
											
						$this->resize($data['upload_data']['full_path'],$data['upload_data']['image_width'],$data['upload_data']['image_height'],$data['upload_data']['file_name'],$id);
						
						
						
                }						
		
	}
	public function resize($path,$width,$height,$file,$id)
	{
						$config  = array();
						$config['image_library'] = 'gd2';
						$config['source_image'] = $path;
						$config['create_thumb'] = FALSE;
						$config['maintain_ratio'] = FALSE;
						$config['width'] = 250;
						$config['height'] = 250;
						$config['quality'] = '100%';
						$config['new_image'] = './uploads/thumb/'.$file;						
						$this->load->library('image_lib',$config);
						$this->image_lib->resize();
		
		
						$data = array('upload_data' => $this->upload->data());
		
						$data=array(
							'book_img' => $file
						);
		
						$this->Kitaplar_Model->update_data("books",$data,$id); //  fonksiypnua dataları id ile  gönder
						
						// <------ VERİ TABANINA KAYDETME--------------
						
						redirect(base_url()."admin/kitaplar");
		
		}
	
} // Main
?>