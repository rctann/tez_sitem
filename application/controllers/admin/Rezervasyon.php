<?php
class Rezervasyon extends CI_Controller {

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
	
		$query=$this->db->get("rezervation"); // urunler tablasonu veritananından çek
        $data["veri"]=$query->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar',$data);
		$this->load->view('admin/rezervasyon_listele',$data);
		$this->load->view('admin/footer');
	}
	public function sil($id)
	{
		$this->db->query('DELETE FROM rezervation WHERE rezid='.$id);
		redirect(base_url()."admin/rezervasyon");
	}
  
	} // ana class
?>