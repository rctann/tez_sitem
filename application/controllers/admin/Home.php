<?php
class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
				$this->load->helper(array('form', 'url'));
				$this->load->library("session");
				$this->load->model('Admin_Model');
        }

	public function index()
	{	
	if($this->session->logged_in['attribute']=="Admin"){
			
		
		
	
		$query=$this->db->get("users"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/content');
		$this->load->view('admin/footer');
		
		}
	else
	{
		redirect(base_url()."admin/login");
	}
	
	
	}
	public function mesajlar()
	{
		
		if($this->session->logged_in['attribute']=="Admin"){
			
		
		
		
		$query=$this->db->get("mesajlar"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result(); // Sorgu verilerini "veri" değişkenine yükle
		
		$data["title"]="Müşteri Mesajları";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mesajliste',$data);
		$this->load->view('admin/footer');
		
		}
	else
	{
		redirect(base_url());
	}
		
		
	}
	public function hakkimizda()
	{
		
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		
		$query=$this->db->get("settings"); // settings tablosunu db den çek
		$data["veri"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
		//$query2=$this->db->query("SELECT count(id) FROM comment where onay='1' "); // settings tablosunu db den çek
		//$data["say"]=$query2->result();
		
		$data["title"]="Hakkımızda";
		
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/hakkimizda_ekle',$data);
		$this->load->view('admin/footer');
		
		}
	else
	{
		redirect(base_url());
	}
		
	}
	
	public function guncelle($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$data=array(
		'id' => $this->input->post('id'),
		'aboutus'	  => $this->input->post('aboutus')
		);
		$this->Admin_Model->update_data("settings",$data,$id);
		redirect(base_url()."admin/home/hakkimizda");
		}
	else
	{
		redirect(base_url());
	}
		
	}
	
	  public function mesaj_sil($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$this->db->query('DELETE FROM mesajlar WHERE id='.$id);
		redirect(base_url()."admin/home/mesajlar");
		
		
		}
	else
	{
		redirect(base_url());
	}
		
		
	}
   public function odunc()
   {
	   if($this->session->logged_in['attribute']=="Admin"){
		
	   
   	   $query=$this->db->query( "SELECT  * FROM borrowtamam AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id GROUP BY cm.bookid"); 
           $data["veri"]=$query->result();
        

        $this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/odunclistele',$data);
		$this->load->view('admin/footer');
		
		
		}
	else
	{
		redirect(base_url());
	}

   }
   public function odunc_sil($id)
   {
	   if($this->session->logged_in['attribute']=="Admin"){
		
	   
   	$this->db->query('DELETE FROM borrowtamam WHERE id='.$id);
   	redirect(base_url()."admin/home/odunc");
	
	}
	else
	{
		redirect(base_url());
	}
	
   }





	public function yorum()
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$query=$this->db->query( "SELECT cm.onay,cm.bookid,cm.username,cm.comm,cm.tarih,cm.id,bk.bookname FROM comment AS cm JOIN books AS bk ON cm.bookid=bk.id "); 
									               
									
        $data["veri"]=$query->result();
		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/yorumlar',$data);
		$this->load->view('admin/footer');
		
		}
	else
	{
		redirect(base_url());
	}
	}
	public function yorum_sil($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
     $this->db->query('DELETE FROM comment WHERE id='.$id);
     redirect(base_url()."admin/home/yorum");
	 
	 }
	else
	{
		redirect(base_url());
	}
	}
	public function yorum_onay($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$query=$this->db->query("UPDATE comment
									SET onay='1'
									WHERE id=".$id);

			redirect(base_url()."admin/home/yorum");
			
			}
	else
	{
		redirect(base_url());
	}

	}
	public function rezervasyon()
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$query=$this->db->query( "SELECT  * FROM borrow AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id"); 
	   ;			             							
        $data["veri"]=$query->result();

		$this->load->view('admin/header',$data);
		$this->load->view('admin/sidebar');
		$this->load->view('admin/borrow',$data);
		$this->load->view('admin/footer');
		
		}
	else
	{
		redirect(base_url());
	}
	}
	public function rezervasyon_sil($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
     $this->db->query('DELETE FROM borrow WHERE borrowid='.$id);
     redirect(base_url()."admin/home/rezervasyon");
	 
	 }
	else
	{
		redirect(base_url());
	}
	 
	 
	}
	public function rezervasyon_onay($id)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		
		
		$query=$this->db->query("UPDATE borrow
									SET onay='1'
									WHERE borrowid=".$id);

			redirect(base_url()."admin/home/rezervasyon");
			
			
			}
	else
	{
		redirect(base_url());
	}

	}
	public function rezervasyon_iptal($id,$m)
	{
		if($this->session->logged_in['attribute']=="Admin"){
		


		$sql="SELECT * FROM borrow as bw JOIN books as bo  WHERE bw.bookid=bo.id";
		$query=$this->db->query($sql);
		$kitapbilgi=$query->result();
		

		$this->db->query("UPDATE books SET amount=amount+'1' WHERE id=$id");
		$this->db->query('DELETE FROM borrow WHERE borrowid='.$m);
		
        

		 redirect(base_url()."admin/home/rezervasyon");
		 
		 }
	else
	{
		redirect(base_url());
	}

	}

	
	
	} // ana class
?>