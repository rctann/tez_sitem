<?php
class Uyeler_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  
	public function insert_data($tablo,$data)
		{
			if ($this->db->insert($tablo,$data)) //  dataları ekle
			{
			return true;
			}
		}	
    public function update_data($tablo,$data,$id)  // İd si ve datası gönderileb verileri günceller
	{
		$this->db->where('id', $id);
		$this->db->update($tablo ,$data);
		return true;
	}  		
	public function login($email,$sifre)
		{
		$this->db->select('*');
        $this->db->from('users');
        $this->db->where('useremail', $email);
        $this->db->where('userpassword', $sifre);
		$this->db->where('attribute','Üye');
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
		}
}
?>	  