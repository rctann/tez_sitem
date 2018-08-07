<?php
class Uyeler extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
				$this->load->helper(array('form', 'url'));
				$this->load->model('Uyeler_Model'); // model tanımlaması
				$this->load->library("session");
        }

	public function index()
	{
		
		$query=$this->db->get("users"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result(); // Sorgu verilerini "veri" değişkenine yükle
		
		$data["title"]="Ürün listeleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/uye_listele',$data);
		$this->load->view('admin/footer');
	}
   public function ekle()
   
	{	
	
		$data["title"]="Ürün Ekleme Sayfası";
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/uye_ekle');
		$this->load->view('admin/footer');
	}
  public function kaydet()
	{
		// Form verilerini alacaz
		$data=array(
		'TC' => $this->input->post('TC'),
		'userpassword' => $this->input->post('userpassword'),
		'username' => $this->input->post('username'),
		'usersurname' => $this->input->post('usersurname'),
		'useremail' => $this->input->post('useremail'),
		'useradressid' => $this->input->post('useradressid'),
		'usertelid' => $this->input->post('usertelid'),
		'usertel' => $this->input->post('usertel'),
		'attribute' => $this->input->post('attribute')
		);
		$this->Uyeler_Model->insert_data("users",$data); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/uyeler");
	}

  public function sil($id)
	{
		$this->db->query('DELETE FROM users WHERE id='.$id);
		redirect(base_url()."admin/uyeler");
	}
  public function duzenle($id)
	{
		$query = $this->db->get_where("users",array("id"=>$id)); // Veritabanından ilgili kaydı sorgula getir
        $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
		$data["title"]="Ürün Düzenleme Sayfası";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/uye_duzenle',$data);
		$this->load->view('admin/footer');
	}
	
  public function guncelle($id)
	{
		// Form verilerini alacaz
		$data=array(
		'TC' => $this->input->post('TC'),
		'username' => $this->input->post('username'),
		'usersurname' => $this->input->post('usersurname'),
		'userpassword' => $this->input->post('userpassword'),
		'useremail' => $this->input->post('useremail'),
		'useradressid' => $this->input->post('useradressid'),
		'usertelid' => $this->input->post('usertelid'),
		'usertel' => $this->input->post('usertel'),
		'attribute' => $this->input->post('attribute')		
		);
		$this->Uyeler_Model->update_data("users",$data,$id); // ekleme fonk. dataları gönder
		
		redirect(base_url()."admin/uyeler");
		
	}
	
}
?>