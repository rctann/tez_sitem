<?php
class Kitaplar_Model extends CI_Model {

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
	public function toplam()  
	{
		$query = $this->db->query("SELECT COUNT(id) AS toplam FROM books");
		$result = $query->result();
		
		return $result[0]->toplam;
		
	
	}  		
	public function kitaplar($per_page,$segment)  
	{
		
		$this->db->from("books");
		$this->db->limit($per_page,$segment);
		
		$query = $this->db->get();
		
		return $query->result();
	}
}
?>	  