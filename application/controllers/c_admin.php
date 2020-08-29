<?php 
/**
* 
*/
class c_admin extends CI_Controller{
	
	public function index(){
		if (!$this->session->userdata('Level')) {
			redirect('c_index');
		} else {
			$this->load->model('m_ModelIn_admin');
			$data['verifikasiUser'] = $this->m_ModelIn_admin->m_Admin_LihatUser();
			$this->load->view('v_admin', $data);
		}
		
	}

	public function c_adminSebagaiUser(){
		if (!$this->session->userdata('Level')) {
			redirect('c_index');
		} else {
			$this->load->view('v_anggota');
		}
		
	}


	public function c_BerandaAdmin(){
		$this->load->model('m_ModelIn_admin');
		$data['verifikasiUser'] = $this->m_ModelIn_admin->m_Admin_LihatUser();
		$this->load->view('v_admin', $data);
	}
	
	public function c_admin_ubahLevel(){
		//$this->load->model('m_ModelIn_admin');
		$Level = $this->input->post("dataLevel"); //dropdown
		echo $Level;
		//$this->m_ModelIn_admin->m_Admin_insertLevel($Level);
	}

	public function c_LihatBuku(){
		$this->load->model('m_ModelIn_admin');
		$data['databuku'] = $this->m_ModelIn_admin->m_LihatBuku();
		$this->load->view('v_buku', $data);
	}

	public function c_LihatGaleri(){
		$this->load->model('m_ModelIn_admin');
		$data['datagaleri'] = $this->m_ModelIn_admin->m_LihatGaleri();
		$this->load->view('v_admin_Galeri', $data);
	}

	public function c_LihatUser(){
		$this->load->model('m_ModelIn_admin');
		$data['datauser'] = $this->m_ModelIn_admin->m_LihatUser();
		$this->load->view('v_admin_User', $data);
	}
}
?>