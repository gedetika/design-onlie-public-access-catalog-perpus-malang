<?php 
/**
* 
*/
class c_anggota extends CI_Controller{
	
	public function index(){
		if (!$this->session->userdata('Level','Nama')) {
			redirect('c_index');
		} else {
			// $data["siapaLogin"] = $this->session->userdata('Nama');
			// echo $this->session->userdata('Nama');
			$this->load->view('v_anggota');
		}
	}

	public function c_Anggota_lihat_nama_anggota(){
	
	}
}
 ?>