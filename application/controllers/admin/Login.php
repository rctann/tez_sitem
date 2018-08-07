<?php
class Login extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
	
				$this->load->library("session");
				$this->load->helper(array('form', 'url'));
				$this->load->model('Admin_Model');
        }

	public function index()
	{
		$this->load->view('admin/login_form');
		
	}

	public function login_ol()
	{
		$email=$this->input->post('useremail');
		$sifre=$this->input->post('userpassword');
		
		$result = $this->Admin_Model->login($email,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				  'id' => $row->Id,
				  'TC' => $row->TC,
				  'userpassword' => $row->userpassword,
				  'username' => $row->username,
				  'usersurname' => $row->usersurname,
				  'useremail' => $row->useremail,
				  'useradressid' => $row->useradressid,
				  'usertelid' => $row->usertelid,
				  'usertel' => $row->usertel,
				  'attribute' => $row->attribute
				 );
				 
				 
                 // Dizi verileri Codeigniter Session kütüphanesi değişkenlerine aktarılıoyor
                 $this->session->set_userdata('logged_in', $sess_array);
				 
				 redirect(base_url()."admin/home");
				 
						
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
            $this->session->set_flashdata("login_hata","Geçersiz Email yada Şifre");   
          		
			$this->load->view('admin/login_form');
			redirect(base_url()."admin/Login");
            return FALSE;
          }
		
	}
	public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         redirect(base_url()."admin/login");
	}

	
	} // Ana class
?>