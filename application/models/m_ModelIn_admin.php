<?php 
/**
* 
*/
class m_ModelIn_admin extends CI_Model{
	
	public function m_Admin_LihatUser(){
		$query = $this->db->select('*');
		$query = $this->db->from('anggota');
		$query = $this->db->get();
		return $query->result();
	}

	public function m_Admin_insertLevel($Level){
		//$query = $this->db->insert('Level',$Level);
		$query = $this->db->query("INSERT INTO anggota (Level) VALUES (\"$Level\")");
	}

	public function m_LihatBuku(){
		$query = $this->db->select('*');
		$query = $this->db->from('databuku');
		$query = $this->db->get();
		return $query->result();
	}

	public function m_LihatGaleri(){
		$query = $this->db->get('galeri');
		return $query->result();
	}

	public function m_LihatUser(){
		$query = $this->db->get('anggota');
		return $query->result();
	}
}
?>