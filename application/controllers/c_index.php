<?php 
	/**
	* 
	*/
	class c_index extends CI_Controller{
		public function __construct() {
			parent::__construct();
            $this->CI = & get_instance();
            $this->load->library('pagination');
            $this->load->library('form_validation');
		}
		
        //halaman utama
		public function index(){
            $this->load->model('m_ModelIn');
            $data['koleksiBaru'] = $this->m_ModelIn->m_koleksiTerbaru();
			$this->load->view('v_IndexHome', $data);
		}
        //halaman utama

        public function c_KoleksiTerbaru(){
            $this->load->model('m_ModelIn');
            $data['koleksiBaru'] = $this->m_ModelIn->m_koleksiTerbaru();
            $this->load->view('v_IndexKoleksiTerbaru', $data);
        }

        //pagination dan search
		public function search_keyword(){
            $this->load->model('m_ModelIn');

            if(empty($this->session->userdata('keywordKu')) && ($this->session->userdata('keywordKu') != $this->input->post('keyword'))){
                $this->session->set_userdata('keywordKu',$this->input->post('keyword'));               
            } else if (!empty($this->input->post('keyword'))&&$this->session->userdata('keywordKu') != $this->input->post('keyword')) {
                    $this->session->unset_userdata('keywordKu');
                    $this->session->set_userdata('keywordKu',$this->input->post('keyword'));
            }

            $jumlah    =   $this->m_ModelIn->getJumlah($this->session->userdata('keywordKu'));

            //set base_url untuk setiap link page
            $config['base_url'] = base_url()."c_index/search_keyword/";
            //hitung jumlah row
            $config['total_rows'] = $jumlah;
 
            //mengatur total data yang tampil per page
            $config['per_page'] = 5;
 
            //mengatur jumlah nomor page yang tampil
            $config['num_links'] = $jumlah;
 
            //mengatur tag
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';
            
            //inisialisasi array 'config' dan set ke pagination library
            $this->pagination->initialize($config);
           
            $dari = $this->uri->segment('3');
 
            //ambil data buku dari database
            $data['results']    =   $this->m_ModelIn->search($this->session->userdata('keywordKu'), $config['per_page'],$dari);
            $data['judul'] = $this->session->userdata('keywordKu');
            
            //Membuat link
            $str_links = $this->pagination->create_links();
            $data['links'] = explode('&nbsp;',$str_links );

            $this->load->view('v_IndexPencarian',$data);
           
        }
        
        public function c_Pagination_KoleksiBaru(){
            $this->load->model('m_ModelIn');
            $jml = $this->m_ModelIn->getJumlahKoleksiBaru();
            //set base_url untuk setiap link page
            $config['base_url'] = base_url()."c_index/c_Pagination_KoleksiBaru/";
            //hitung jumlah row
            $config['total_rows'] = $jml;
 
            //mengatur total data yang tampil per page
            $config['per_page'] = 5;
 
            //mengatur jumlah nomor page yang tampil
            $config['num_links'] = $jml;
 
            //mengatur tag
            $config['first_link']       = 'First';
            $config['last_link']        = 'Last';
            $config['next_link']        = 'Next';
            $config['prev_link']        = 'Prev';
            $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
            $config['full_tag_close']   = '</ul></nav></div>';
            $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
            $config['num_tag_close']    = '</span></li>';
            $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
            $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
            $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
            $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['prev_tagl_close']  = '</span>Next</li>';
            $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
            $config['first_tagl_close'] = '</span></li>';
            $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
            $config['last_tagl_close']  = '</span></li>';

            //inisialisasi array 'config' dan set ke pagination library
            $this->pagination->initialize($config);
           
            $dari = $this->uri->segment('3');
 
            //ambil data buku dari database
            $data['koleksiBaru']    =   $this->m_ModelIn->dataKoleksiBaru($config['per_page'],$dari);
            
            //Membuat link
            $str_links = $this->pagination->create_links();
            $data['links'] = explode('&nbsp;',$str_links );

            $this->load->view('v_IndexKoleksiTerbaru', $data);
        }


        //halaman detail buku
    	public function detailbuku($namaBuku){
    		$this->load->model('m_ModelIn');
			$idBuku = $this->m_ModelIn->selectIdByJudulBuku(urldecode($namaBuku));
			$data['detailBuku'] = $this->m_ModelIn->selectBuku($idBuku);
			$this->load->view('v_IndexDetailBuku', $data);
    	}

        public function tesdropdown(){
            $this->load->model("m_ModelIn");
            $tes = $this->input->post("dataJenisKoleksi"); 
            //$data['testdrop'] = $this->m_ModelIn->dropdrop($tes);
            //$this->load->view('v_IndexPencarian');
            //dropdown
            echo $tes;
            $cekdata = $this->m_ModelIn->dropdrop($tes);
            

            if (!empty($cekdata)) {
                $datacek = $this->m_ModelIn->dropdrop($tes);
                $cekKode = $cekdata->JenisKoleksi;

                if ($cekKode == 'refrensi') {
                    echo "berhasil";
                } else {
                    echo "gagal";
                }
            }
        }

        public function c_registrasi(){
                $this->load->model("m_ModelIn");
                $Nama = $this->input->post("inputNama");
                $NoAnggota = md5($Nama);
                $NIK = $this->input->post("inputNIK");
                $Kecamatan = $this->input->post("dataKecamatan"); //dropdown
                $Kelurahan = $this->input->post("dataKelurahan"); //dropdown
                $JenisKelamin = $this->input->post("dataJenisKelamin"); //dropdown
                $Tanggal = $this->input->post("dataTanggal"); //dropdown
                $Bulan= $this->input->post("dataBulan"); //dropdown
                $Tahun = $this->input->post("inputTahun");
                $Username = $this->input->post("inputUsername");
                $Password = $this->input->post("inputPassword");
                $Alamat = $this->input->post("inputAlamatRumah");
                $JenisAnggota = $this->input->post("dataJenisAnggota"); //dropdown
                $NoTlp = $this->input->post("inputNomorTlp");
                $insert = $this->m_ModelIn->daftar($Nama, $NIK,$Kecamatan, $Kelurahan,$JenisKelamin, $Tanggal,$Bulan, $Tahun, $Username, $Password, $Alamat, $JenisAnggota, $NoTlp, $NoAnggota);
                redirect('c_index');

         }  

        public function login(){
            $this->load->model('m_ModelIn');
            $Username_User = $this->input->post('inputNamaLogin', true);
            $Password_User = $this->input->post('inputPasswordLogin', true);
            $cek = $this->m_ModelIn->cek($Username_User, $Password_User);
            // $tes = count($cek);
            if (!empty($cek)) {
                $data_login = $this->m_ModelIn->cek($Username_User, $Password_User);
                $Level = $data_login->Level;
                $status = $data_login->status;
                $SiapaLogin = $data_login->Nama;

                // $dataNama = array('Nama' => $SiapaLogin);
                // $data = array('Level' => $Level);
                // $statusdata = array('status' => $status);

                $this->session->set_userdata(array(
                            'Nama'=>$SiapaLogin,
                            'Level'=>$Level,
                            'Status' =>$status),
                        true);
                
                if ($Level == 'admin') {
                    redirect('c_admin');
                } elseif (empty($Level) OR $Level == 'anggota') {
                    if ($status == 1) {
                        redirect('c_anggota');
                        // $data["NAMAMU"] = $this->$SiapaLogin;
                    } else {
                        echo "<script>
                                alert(\"Akun belum diverifikasi oleh admin!\");
                          </script>";
                          redirect(base_url(), 'refresh');
                        // echo "Anda Belum Teregistrasi";
                    } 
                }
            } else {
                echo "<script>
                                alert(\"Anda Belum Terdaftar!\");
                          </script>";
                          redirect(base_url(), 'refresh');
                //echo "Anda Belum Terdaftar";
            }
        }

        public function Logout(){
            $this->session->sess_destroy();
            redirect('c_index');
        }

        public function c_PencarianByPengarang(){
            $this->load->model('m_ModelIn');
            $data['caripengarang'] = $this->m_ModelIn->PencarianByPengarang();
            $this->load->view('v_IndexPencarianByPengarang', $data);
        }

        public function c_SortByPengarang($value){
            $this->load->model('m_ModelIn');
            $data['sortByPengarang'] = $this->m_ModelIn->SortByPengarang(urldecode($value));
            $this->load->view('v_IndexPencarianSortByPengarang', $data);
        }

        public function c_PencarianByPenerbit(){
            $this->load->model('m_ModelIn');
            $data['caripenerbit'] = $this->m_ModelIn->PencarianByPenerbit();
            $this->load->view('v_IndexPencarianByPenerbit', $data);
        }

        public function c_SortByPenerbit($value){
            $this->load->model('m_ModelIn');
            $data['sortByPenerbit'] = $this->m_ModelIn->SortByPenerbit(urldecode($value));
            $this->load->view('v_IndexPencarianSortByPenerbit', $data);
        }

        //NAVBAR BAGIAN PROFIL
        public function c_VisiMisi(){
            $this->load->view('v_VisiMisi');
        }

        public function c_Galeri(){
            $this->load->view('v_galeri');
        }

        public function c_DenahLokasi(){
            $this->load->view('v_DenahLokasi');
        }

        public function c_DenahRuanganPerpus(){
            $this->load->view('v_DenahRuanganPerpus');
        }

        public function c_JenisKoleksi(){
            $this->load->view('v_JenisKoleksi');
        }

        public function c_JenisLayanan(){
            $this->load->view('v_JenisLayanan');
        }

        public function c_Keanggotaan(){
            $this->load->view('v_Keanggotaan');
        }

        public function c_Profil(){
            $this->load->view('v_Profil');
        }

        public function c_ProsedurPeminjaman(){
            $this->load->view('v_ProsedurPeminjaman');
        }

        public function c_RuangDanFungsi(){
            $this->load->view('v_RuangDanFungsi');
        }

        public function c_Sejarah(){
            $this->load->view('v_Sejarah');
        }

        public function c_Staf(){
            $this->load->view('v_Staf');
        }

        public function c_TataTertib(){
            $this->load->view('v_TataTertib');
        }

        public function c_BantuanAnggota(){
            $this->load->view('v_BantuanAnggota');
        }


	}

 ?>