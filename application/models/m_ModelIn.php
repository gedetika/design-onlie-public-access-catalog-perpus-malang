<?php 
	/**
	* 
	*/
	class m_ModelIn extends CI_Model{
		public function search($keyword, $sampai, $dari){
			$query = $this->db->select('*');
			$query = $this->db->from('databuku');
			$query = $this->db->where('Judul like', "%".$keyword."%");
			$query = $this->db->limit($sampai, $dari);
			$query = $this->db->get();
			return $query->result();
		}

		public function dataKoleksiBaru($sampai, $dari){
			$query = $this->db->select('*');
			$query = $this->db->from('databuku');
			$query = $this->db->where("YEAR(tanggal) = YEAR(CURDATE())");
			$query = $this->db->limit($sampai, $dari);
			$query = $this->db->get();
			return $query->result();
		}		

		public function getJumlah($keyword) {
			$query = $this->db->select('*');
			$query = $this->db->from('databuku');
			$query = $this->db->where('Judul like', "%".$keyword."%");
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function getJumlahKoleksiBaru(){
			$query = $this->db->select('*');
			$query = $this->db->from("databuku");
			$query = $this->db->where("YEAR(tanggal) = YEAR(CURDATE())");
			$query = $this->db->get();
			return $query->num_rows();
		}

		public function selectIdByJudulBuku($namaBuku) {
			$query = $this->db->select("NoRegis");
			$query = $this->db->from("databuku");
			$query = $this->db->where("Judul", $namaBuku);
			$query = $this->db->get();
			$hasil = $query->result();
			return $hasil[0]->NoRegis;
		}

		public function selectBuku($NoRegis){
			$query = $this->db->select("*");
			$query = $this->db->from("databuku");
			$query = $this->db->where("NoRegis", $NoRegis);
			$query = $this->db->get();
			return $query->result();
		}	

		public function PencarianByPengarang(){
			$sql = $this->db->select("DISTINCT(Pengarang)"); //distinct buat menampilkan 1 dari banyak data yg ganda dalam 1 kolom
            $sql = $this->db->from("databuku");
            $sql = $this->db->order_by("Pengarang","asc");
            $sql = $this->db->get();
            return $sql->result();
		}

		public function PencarianByPenerbit(){
			$sql = $this->db->select("DISTINCT(Penerbit)"); //distinct buat menampilkan 1 dari banyak data yg ganda dalam 1 kolom
            $sql = $this->db->from("databuku");
            $sql = $this->db->order_by("Penerbit","asc");
            $sql = $this->db->get();
            return $sql->result();
		}

		public function SortByPengarang($pengarang) {
			$query = $this->db->select("*");
			$query = $this->db->from("databuku");
			$query = $this->db->where('Pengarang', $pengarang);
			$query = $this->db->get();
			return $query->result();
		}

		public function SortByPenerbit($penerbit){
			$query = $this->db->select("*");
			$query = $this->db->from("databuku");
			$query = $this->db->where('Penerbit', $penerbit);
			$query = $this->db->get();
			return $query->result();
		}

		public function dropdrop($tes){
			$query = $this->db->select("*");
			$query = $this->db->from("databuku");
			$query = $this->db->where('JenisKoleksi', $tes);
			$query = $this->db->get();
			return $query->result();
		}

		public function daftar($Nama, $NIK,$Kecamatan, $Kelurahan,$JenisKelamin, $Tanggal,$Bulan, $Tahun, $Username, $Password, $Alamat, $JenisAnggota, $NoTlp, $NoAnggota){

			$this->db->query("INSERT INTO anggota (Nama, NIK, Kecamatan, Kelurahan, JenisKelamin, Tanggal, Bulan, Tahun, Username, Password, Alamat, JenisAnggota, NoTelp, NoAnggota) VALUES (\"$Nama\",\"$NIK\",\"$Kecamatan\",\"$Kelurahan\",\"$JenisKelamin\",\"$Tanggal\",\"$Bulan\",\"$Tahun\",\"$Username\",\"$Password\",\"$Alamat\",\"$JenisAnggota\",\"$NoTlp\",\"$NoAnggota\")");

		}

		public function cek($Username_User, $Password_User){
			$query = $this->db->where('Username',$Username_User);
			$query = $this->db->where('Password',$Password_User);
			return $this->db->get('anggota')->row();
		}

		public function m_koleksiTerbaru(){
			$query = $this->db->select('*');
			$query = $this->db->from('databuku');
			//$query = $this->db->query("SELECT * FROM `databuku` WHERE YEAR(tanggal) = YEAR(CURDATE());");
			$query = $this->db->where("YEAR(tanggal) = YEAR(CURDATE())");
			//$query = $this->db->order_by('tanggal', 'desc');
			//$query = $this->db->where('tanggal like','2018-_%_%-_%_%');
			$query = $this->db->get();
			return $query->result();
		}

	}
?>