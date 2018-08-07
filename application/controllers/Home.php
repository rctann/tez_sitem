<?php

class Home extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                // Your own constructor code
				$this->load->database(); // Sayfada veritabanına erişmemizi saglar
				$this->load->helper(array('form', 'url'));
				$this->load->library("session");
				$this->load->model('Home_Model');
				$this->load->model('Uyeler_Model');
				$this->load->model('Admin_Model');
				$this->load->helper('date');
				$this->ceza_ekle();
				
                
				

			}



       
	
	public function index()
	{	
		
		$query=$this->db->get("books");
		$data["veri"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
		
		//veritabanındaki veri adedini bulan kısım
		$this->load->model('Kitaplar_Model');
		$toplam = $this->Kitaplar_Model->toplam();
		//echo $toplam;
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		//sayfalama işlemleri
		
		$this->load->library("pagination");
		
		$config = array (
					"base_url" 	 => site_url('home/index'),
					"per_page"	 => 12,
					"total_rows" => $toplam
		);
		$this->pagination->initialize($config);
		$data["linkler"] = $this->pagination->create_links();
		
		
		
		//kayıt işlemleri
		$data['books'] = $this->Kitaplar_Model->kitaplar($config["per_page"],$this->uri->segment(3,0));
		
		
		
		
	
		$this->load->view('_header',$data);
		$this->load->view('_content',$data);
		$this->load->view('_footer');

	}

  public function tekrar()
  {
  	            $this->odunc();
  	            $this-> hergun();
				$this-> odunc_email();
				

  }


	public function kayit()
	{
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		$this->load->view('kayitform');
		$this->load->view('_footer');
		
		
	}
	public function kategori_list($id)
	{
	
        $query=$this->db->get("books");
		$data["veri"]=$query->result();
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
      
		$query=$this->db->query("SELECT  * FROM books WHERE categoryid=".$id);
		$data["veriler"]=$query->result();
		$this->load->view('_header',$data);
		$this->load->view('kategori',$data);
		$this->load->view('_footer');
		
        
        
	}
	public function kitap_ara()
	{
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		$deger=$_GET["ara"];		
        $query=$this->db->get("books");
		$data["veri"]=$query->result();
		$query=$this->db->query("SELECT  * FROM books WHERE bookname='$deger'");
		$data["veriler"]=$query->result();
		if($data["veriler"]){	
		 $this->load->view('_header',$data);
		 $this->load->view('kategori',$data);
		 $this->load->view('_footer');
		}
		else{
			 $this->session->set_flashdata("yok","Ürün bulunamadı");
			 $this->load->view('_header',$data);
		     $this->load->view('kategori',$data);
		     $this->load->view('_footer');
		}
		


	}

	public function kitap_detay($id)
	{	
	
		$query=$this->db->get_where("books",array("id"=>$id)); // ASIL ÜRÜNÜN DATASI
		$data["veri"]=$query->result();
		$sorgu=$this->db->query("SELECT * FROM comment as cm where cm.onay='1'  AND  cm.bookid=".$id);
        $data['bilgi']=$sorgu->result();
        $sorgu2=$this->db->query("SELECT categoryname,categoryid FROM books GROUP BY categoryname");
		$data["veriler"]=$sorgu->result();
		
		
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		$this->load->view('_kitap_detay',$data);
		$this->load->view('_footer');
		
	}
	
	public function kitap_yorum($id)
	{	
		$sorgu=$this->db->query("SELECT * FROM comment as cm where cm.onay='1'  AND  cm.bookid=".$id);
        $data['bilgi']=$sorgu->result();
	
		$this->load->view('_kitap_yorum',$data);
		
	}
	
	public function yorumekle($id)
    {

	$data=array(
		'bookid'=>$id,
		'comm' => $this->input->post('comm'),
		"userid"=>$this->session->logged_in['id'],
		"username"=>$this->session->logged_in['username']
		);
	
		$this->Home_Model->insert_data("comment",$data);
		$this->session->set_flashdata("sonuc","Ürün sepete eklendi");

		redirect(base_url().'Home/kitap_detay/'.$id);




    }
	
	
	public function login_ol()
	{
		$email=$this->input->post('useremail');
		$sifre=$this->input->post('userpassword');
		
		$result = $this->Uyeler_Model->login($email,$sifre);
		if($result) {
				// Kullanıcı var ise bilgileri diziye aktarılıyor
				$sess_array = array();
				foreach($result as $row) {
                 $sess_array = array(
				  'id' => $row->id,
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
				 
				 redirect(base_url()."home");
			
				 
                 }
          		return TRUE;
          } 
		  else 
		  {
             
          		
			redirect(base_url()."home");
			
            return FALSE;
          }
		
	}
	
	public function logout()
	{	
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		redirect(base_url()."home");
	
	
	}
	
	public function hakkimizda()
	{
		$query=$this->db->get("settings");
		$data["veri"]=$query->result(); // sorgu verilerini "veri" değişkenine yükle
				
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		$this->load->view('_hakkimizda',$data);
		$this->load->view('_footer');
		
		
	}
	
	public function iletisim()

	{
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		
	$this->load->view('_header',$data);
    $this->load->view('iletisim');
	$this->load->view('_footer');

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
		'usertel' => $this->input->post('usertel'),
		'attribute' => $this->input->post('attribute')
	);
		  
		  $useremail=$this->input->post("useremail");
		  $varmi = $this->db->query("SELECT * FROM users WHERE useremail= '$useremail'  LIMIT 1");
          $varmi=$varmi->num_rows();
	  
                if($varmi==1){
					$this->session->set_flashdata("kayit_ol"," Böyle bir kayıt var."); 
					redirect(base_url()."Home/kayit");
				}
				else{
		$this->Uyeler_Model->insert_data("users",$data); // ekleme fonk. dataları gönder
		$this->session->set_flashdata("kayit_ol"," Başarılı bir şekilde kayıt oldunuz."); 
				redirect(base_url()."Home/kayit");}

	

	}
	public function rezkaydet($id)
	{
		$sql="SELECT * FROM books WHERE id=$id";
		$query=$this->db->query($sql);
		$kitapbilgi=$query->result();
		$amount = $kitapbilgi[0]->amount;
		$amount = $amount - 1 ;

		$this->db->query("UPDATE books SET amount=$amount WHERE id=$id");


		$data=array(
            
			
			'userid' => $this->input->post('userid'),
			'bookid' => $this->input->post('bookid'),
			'borrowdate' => $this->input->post('borrowdate'),
		    'returndate' => $this->input->post('returndate'),
		    'adress' => $this->input->post('adress')
	);
		$this->Uyeler_Model->insert_data("borrow",$data); // ekleme fonk. dataları gönder
		
		redirect(base_url()."Home");
	}
	public function rez_ekle($id)

	{
		
		$query=$this->db->get_where("books",array("id"=>$id)); // ASIL ÜRÜNÜN DATASI
		$data["veri"]=$query->result();
	
		$data["bilgi"]=$query->result();
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}

	$this->load->view('_header',$data);
    $this->load->view('rezervasyonkayit',$data);
	$this->load->view('_footer');

	}
	public function rezlist()
   {
   	$id=$this->session->logged_in['id'];
   	$query=$this->db->query( "SELECT  * FROM borrow AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id WHERE cm.userid=$id AND onay='1'"); 
	   ;			
   	$data["veri"]=$query->result();
	
	$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}

    $this->load->view('_header',$data);
    $this->load->view('rez_list',$data);
	
   }
      public function odunc()
      {
      $query=$this->db->query('SELECT * FROM borrow AS bw WHERE bw.onay="1"');
      $query2=$this->db->query('SELECT onay,returndate,DATE_ADD(returndate,INTERVAL 10 DAY) AS returndateadd
FROM borrow AS BW WHERE onay="1"'); 
      $data["veri"]=$query->result();
      $data["veri2"]=$query2->result();
      $sayim=(int)$query->num_rows();
      $sayim2=(int)$query2->num_rows();  
      
    for($i=0;$i<$sayim;$i++){
    	$data2=array(
		'userid' => $data["veri"][$i]->userid,
		'bookid' => $data["veri"][$i]->bookid,
		'borrowdate'=> $data["veri"][$i]->returndate,
		'borrowrdate'=> $data["veri2"][$i]->returndateadd,
	);
		$this->Uyeler_Model->insert_data("borrowtamam",$data2);
		
       }
	   $query=$this->db->query('DELETE FROM borrow  WHERE onay="1"');
      }


      public function odunc_email()
      {

       $query3=$this->db->query( 'SELECT borrowrdate FROM borrowtamam');
	   $gun=$query3->result();
	   $bugun=date("Y-m-d",mktime(0, 0, 0, date("m"), date("d")+1,   date("Y")));
	   $query2=$this->db->query( "SELECT   us.username,us.useremail  FROM borrowtamam AS bw JOIN users AS us  ON bw.userid=us.id 
		and bw.borrowrdate='$bugun'");
		$say=$this->db->query( "SELECT  * FROM borrowtamam AS bw JOIN users AS us  ON bw.userid=us.id  
		and bw.borrowrdate='$bugun'");
		$email1=$query2->result();
		$sayim=(int)$say->num_rows();

			for($i=0;$i<$sayim;$i++){
		
			$query=$this->db->get("settings");
               $data["veri"]=$query->result();
                $this->load->library("email");
                 $config=array(
               
		       'smtp_host' =>$data["veri"][0]->smtpserver,
		       'smtp_port' => $data["veri"][0]->smtpport,
		       'smtp_user' => $data["veri"][0]->smtpmail,
		       'smtp_pass' => $data["veri"][0]->smtppasw,
		       'mailtype' =>'html',
		       'charset' =>'utf-8',
		        'wordwrap' =>TRUE
		        );
                 $this->email->initialize($config);
                 
                 
              $mesaj=($email1[$i]->username. "&nbsp;Kitap sürenizin bitmesine 1 gün kalmıştır yarın saat 5 e kadar kitap iade etmesseniz gereken ceza işlemi uygulanacaktır.SAYGILAR");
          
        
         $this->email->set_newline("\r\n");
         $this->email->from($data["veri"][0]->smtpmail);
         $this->email->to($email1[$i]->useremail); 
         $this->email->subject("Ödünç");
         $this->email->message($mesaj);
         if($this->email->send())
         	$this->session->set_flashdata("email_sent","Email Başarılı bir şekilde gönderildi.");
         else{
         	$this->session->set_flashdata("email_sent","Email Gönderiminde bir hata olustu.");
         	show_error($this->email->print_debugger());
		
		$this->Home_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
	     $this->session->set_flashdata("mesaj_sent","Mesajınınz Başarılı bir şekilde alındı."); 
		redirect(base_url()."");
	
	}





}
		
      }
public function hergun()
{ 
	
	$query3=$this->db->query( 'SELECT returndate FROM borrow  WHERE  onay="1"');
	$gun=$query3->result();
	$bugun=date("Y-m-d",mktime(0, 0, 0, date("m"), date("d")+1,   date("Y")));
	
	
       

	 
		$query2=$this->db->query( "SELECT   us.username,us.useremail  FROM borrow AS bw JOIN users AS us  ON bw.userid=us.id  WHERE  onay=1
		and bw.returndate='$bugun'");
		$say=$this->db->query( "SELECT  * FROM borrow AS bw JOIN users AS us  ON bw.userid=us.id  WHERE  onay=1
		and bw.returndate='$bugun'");
		$email1=$query2->result();
		
		
		$sayim=(int)$say->num_rows();
		


			for($i=0;$i<$sayim;$i++){
		
			$query=$this->db->get("settings");
               $data["veri"]=$query->result();
                $this->load->library("email");
                 $config=array(
                	
		       'smtp_host' =>$data["veri"][0]->smtpserver,
		       'smtp_port' => $data["veri"][0]->smtpport,
		       'smtp_user' => $data["veri"][0]->smtpmail,
		       'smtp_pass' => $data["veri"][0]->smtppasw,
		       'mailtype' =>'html',
		       'charset' =>'utf-8',
		        'wordwrap' =>TRUE
		        );
                 $this->email->initialize($config);
                 
                 
              $mesaj=($email1[$i]->username. "&nbsp;Rezervasyon sürenizin bitmesine 1 gün kalmıştır yarın saat 5 e kadar kitap almassanız 15 gün rezerve hakkınız iptal edilecektir.SAYGILAR");
          
        
         $this->email->set_newline("\r\n");
         $this->email->from($data["veri"][0]->smtpmail);
         $this->email->to($email1[$i]->useremail); 
         $this->email->subject("Rezervasyon");
         $this->email->message($mesaj);
         if($this->email->send())
         	$this->session->set_flashdata("email_sent","Email Başarılı bir şekilde gönderildi.");
         else{
         	$this->session->set_flashdata("email_sent","Email Gönderiminde bir hata olustu.");
         	show_error($this->email->print_debugger());
		
		$this->Home_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
	     $this->session->set_flashdata("mesaj_sent","Mesajınınz Başarılı bir şekilde alındı."); 
		redirect(base_url()."");
	
	}





}
}






   public function iletisim_ekle()
   {


   	$data=array(
		'adsoyad' => $this->input->post('adsoyad'),
		'email' => $this->input->post('email'),
		'tel' => $this->input->post('tel'),
		'aciklama' => $this->input->post('aciklama')
		
		);
   		$this->Home_Model->insert_data("mesajlar",$data);
		     $adsoy=$this->input->post('adsoyad');
		     $email=$this->input->post('email');
           $query=$this->db->get("settings");
               $data["veri"]=$query->result();
                $this->load->library("email");
                 $config=array(
              	
		       'smtp_host' =>$data["veri"][0]->smtpserver,
		       'smtp_port' => $data["veri"][0]->smtpport,
		       'smtp_user' => $data["veri"][0]->smtpmail,
		       'smtp_pass' => $data["veri"][0]->smtppasw,
		       'mailtype' =>'html',
		       'charset' =>'utf-8',
		        'wordwrap' =>TRUE
		        );
                 $this->email->initialize($config);
                 
                 
              $mesaj=($adsoy. "&nbsp;Sitemizi ziyaret ettiğiniz için teşekkür ederiz Farklı bir mesaj bırakmak için yeniden sitemizi ziyaret adiniz");
          
        
         $this->email->set_newline("\r\n");
         $this->email->from($data["veri"][0]->smtpmail);
         $this->email->to($email); 
         $this->email->subject("Mesajınız başarıyla ulaşmıştır bizimle iletişime geçtiğimiz için teşekkür ederiz");
         $this->email->message($mesaj);
         if($this->email->send()){
         	$this->session->set_flashdata("email_sent","Email Başarılı bir şekilde gönderildi.");
			redirect(base_url()."Home/iletisim");
         }
		 else{
         	$this->session->set_flashdata("email_sent","Email Gönderiminde bir hata olustu.");
         	show_error($this->email->print_debugger());
		
		$this->Home_Model->insert_data("mesajlar",$data); // ekleme fonk. dataları gönder
	     $this->session->set_flashdata("mesaj_sent","Mesajınınz Başarılı bir şekilde alındı."); 
		redirect(base_url()."Home/iletisim");
		
   }
}


	public function sifremi_unuttum()
	{
		$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}
		
		$this->load->view('_header',$data);
		 $this->load->view('forgot_password');
		 $this->load->view('_footer');
	}


	public function sifremi_unuttum_ekle()
	{

		        $email=$this->input->post('useremail');
		       //echo $email;
		      $sql=$this->db->query("SELECT count(id) as id,userpassword  FROM users WHERE useremail='$email' and attribute='Üye'");
		        $sql  = $sql->result();
		        if($sql[0]->id==1)
		        {

               $query=$this->db->get("settings");
               $data["veri"]=$query->result();
                
                 $config=array(
		       'smtp_host' =>$data["veri"][0]->smtpserver,
		       'smtp_port' => $data["veri"][0]->smtpport,
		       'smtp_user' => $data["veri"][0]->smtpmail,
		       'smtp_pass' => $data["veri"][0]->smtppasw,
		       'mailtype' =>'html',
		       'charset' =>'utf-8',
		        'wordwrap' =>TRUE
		        );
				$this->load->library("email",$config);
                 $this->email->initialize($config);
                
              $mesaj=("Şifreniz=".$sql[0]->userpassword);
        
         $this->email->set_newline("\r\n");
         $this->email->from($data["veri"][0]->smtpmail);
         $this->email->to($email); 
         $this->email->subject("Şifreniz mailinize başarılı bir şekilde gönderilmiştir");
         $this->email->message($mesaj);
         if($this->email->send())
         	$this->session->set_flashdata("email_sent","Email Başarılı bir şekilde gönderildi.");
         else{
         	$this->session->set_flashdata("email_sent","Böyle bir email adresi yoktur.");
         	show_error($this->email->print_debugger());
         }
 
				redirect(base_url()."Home/sifremi_unuttum");
	}else
		$this->session->set_flashdata("email_sent","Böyle bir e mail adresi kayıtlı değildir.");
		redirect(base_url()."Home/sifremi_unuttum");
	}

   public function odunclist()
   {
   	$id=$this->session->logged_in['id'];
   	$query=$this->db->query( "SELECT  * FROM borrowtamam AS cm JOIN books AS bk ON cm.bookid=bk.id
	JOIN users as us	ON cm.userid=us.id WHERE cm.userid=$id GROUP BY userid,bookid"); 
	   			
   	$data["veri"]=$query->result();
	$query=$this->db->get("settings"); 
		$veriler=$query->result();
		foreach($veriler as $rs)
		{
			$data["title"]=$rs->title;
			$data["description"]=$rs->description;
			$data["keywords"]=$rs->keywords;
		}

    $this->load->view('_header',$data);
    $this->load->view('odunc_list',$data);
   }

   public function ceza_ekle()
   {
   	$bugun=date("Y-m-d",mktime(0, 0, 0, date("m"), date("d"),   date("Y")));
    $query1=$this->db->query("SELECT bookid,userid,id, DATEDIFF(borrowrdate, CURDATE()) AS GUN_SAYISI FROM borrowtamam 
 ");
    $data["veri"]=$query1->result();
    $say=$this->db->query( "SELECT  * FROM borrowtamam AS bw JOIN users AS us  ON bw.userid=us.id   JOIN books as bk ON bw.bookid=bk.id" );
    $sayim=(int)$say->num_rows();
    	
    	//$is->db->query("UPDATE borrowtamam SET borc=10 WHERE bookid=2");
      for($i=0;$i<$sayim;$i++){
      	if($data["veri"][$i]->GUN_SAYISI<0){
      	 $borc=$data["veri"][$i]->GUN_SAYISI*-5;
      	 $id=$data["veri"][$i]->id;
      	$sql=$this->db->query(" UPDATE borrowtamam SET borc=$borc WHERE DATEDIFF(borrowrdate, CURDATE())<0 AND id=$id");
   
       
      }

   

   }

}
   
   

	
	} // ana class
?>