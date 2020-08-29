<?php  ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>Perpustakaan Malang Kota - Jenis Koleksi</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>bootstrap/bootstrap 4.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script>window.jQuery || document.write('<script src="<?php echo base_url()?>bootstrap/bootstrap 4.1/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  <script src="<?php echo base_url()?>bootstrap/bootstrap 4.1/assets/js/vendor/popper.min.js"></script>
  <script src="<?php echo base_url()?>bootstrap/bootstrap 4.1/dist/js/bootstrap.min.js"></script>

  <!-- Custom css -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/custom css/floating-labels.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>bootstrap/custom css/DasarProfil.css">
  <link href="<?php echo base_url()?>bootstrap/custom css/dashboard.css" rel="stylesheet">
  <!--Akhir custom CSS-->
  
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-md navbar-dark fixed-top">
    <img src="<?php echo base_url()?>bootstrap/gambar/logo.png" id="logoperpus">
    <a class="navbar-brand" href="<?php echo base_url() ?>">Dinas Perpustakaan dan Arsip Kota Malang</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse navbarefek" id="navbarCollapse">

      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="page-scroll nav-link" href="<?php echo base_url() ?>">Home</a>
        </li>

        <li class="nav-item dropdown">
          <a class="page-scroll  nav-link dropdown-togglel" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
          
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_VisiMisi'); ?>">Visi & Misi</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_JenisKoleksi'); ?>">Jenis Koleksi</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_TataTertib'); ?>">Tata Tertib</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_RuangDanFungsi'); ?>">Ruang dan Fungsi</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_JenisLayanan'); ?>">Bentuk dan Jenis Layanan</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_Keanggotaan'); ?>">Keanggotaan</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_ProsedurPeminjaman'); ?>">Prosedur Peminjaman</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_Staf'); ?>">Staf</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_DenahLokasi'); ?>">Denah Lokasi</a>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_Sejarah'); ?>">Sejarah Perpustakaan</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="<?php echo base_url('c_index/c_BantuanAnggota'); ?>">Bantuan Pendaftaran Anggota</a>
          </div>
        </li>

        <li class="nav-item">
          <a class="page-scroll nav-link" href="<?php echo base_url('c_index/c_Galeri'); ?>">Galeri</a>
        </li>

        <li class="nav-item">
          <a class="nav-link page-scroll" href="#kontak" onclick="Kontak();">Kontak</a>
        </li>

        <button class="btn btn-outline-info" type="submit" data-toggle="modal" data-target="#exampleModalCenter">Daftar/Masuk</button>
      </ul>
    </div>
  </nav>
  <!--End navbar-->

  <!--side bar-->
  <div class="container-fluid">
    <div class="row">
      <nav class="col-md-2 d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_VisiMisi'); ?>">
                <span data-feather="chevrons-right"></span>
                Visi Misi <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_JenisKoleksi'); ?>">
                <span data-feather="chevrons-right"></span>
                Jenis Koleksi <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_TataTertib'); ?>">
                <span data-feather="chevrons-right"></span>
                Tata Tertib <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_RuangDanFungsi'); ?>">
                <span data-feather="chevrons-right"></span>
                Ruang dan Fungsi <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_JenisLayanan'); ?>">
                <span data-feather="chevrons-right"></span>
                Bentuk dan Jenis Layanan <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_Keanggotaan'); ?>">
                <span data-feather="chevrons-right"></span>
                Keanggotaan <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_ProsedurPeminjaman'); ?>">
                <span data-feather="chevrons-right"></span>
                Prosedur Peminjaman <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_Staf'); ?>">
                <span data-feather="chevrons-right"></span>
                Staf <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_DenahLokasi'); ?>">
                <span data-feather="chevrons-right"></span>
                Denah Lokasi <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_DenahRuanganPerpus'); ?>">
                <span data-feather="chevrons-right"></span>
                Denah Ruangan Perpustakaan <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url('c_index/c_Sejarah'); ?>">
                <span data-feather="chevrons-right"></span>
                Sejarah Perpustakaan <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="<?php echo base_url('c_index/c_BantuanAnggota'); ?>">
                <span data-feather="chevrons-right"></span>
                <span style="color: black;">Bantuan</span>
                <span class="sr-only">(current)</span>
              </a>
            </li>
          </ul>
        </div>
      </nav>
      <!--end side bar-->

      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
          <h1 class="h2">Jenis Koleksi</h1>
        </div>
        <div class="description">
          <p>Jenis koleksi Perpustakaan dikelompokkan menjadi:</p>
          <p>&emsp;1.&emsp;Koleksi Referensi, berfungsi sebagai sumber informasi yang bersifat sekunder.</p>
          <p>&emsp;2.&emsp;Buku Reserve (Tandon) terdiri kopi pertama dari setiap judul buku teks.</p>
          <p>&emsp;3.&emsp;Buku Umum.</p>
          <p>&emsp;4.&emsp;Buku Anak / Koleksi Kecil.</p>
          <p>&emsp;5.&emsp;Buku Keliling.</p>
        </div>

        <!--footer-->
        <section id="kontak" class="kontak">
          <nav class="navbar fixed-bottom" style="background-color: #4d4d4d;">
            <div class="container">
              <div class="row">

                <div class="col-md-4" style="color: #dcdbdb;">
                  <h5 class="SocialMedia">Social Media</h5><hr>
                  <a href ="https://www.facebook.com/perpustakaan.malang">
                    <img src="<?php echo base_url()?>bootstrap/gambar/facebook.png" width="30px" height="30px" alt=""><i class="text-light" style="text-decoration-line: none ; display: inline-block;">Facebook</i></a>
                    <a href="https://twitter.com/malanglib" class="footerimg ml-3">
                      <img src="<?php echo base_url()?>bootstrap/gambar/twiiter.png" width="30px" height="30px" alt=""><i class="text-light" style="text-decoration-line: none; display: inline-block;">Twitter</i></a>
                      <a href="https://www.instagram.com/perpustakaan_malang/" class="footerimg ml-3">
                        <img src="<?php echo base_url()?>bootstrap/gambar/instagram.png" width="30px" height="30px" alt=""><i class="text-light" style="text-decoration-line: none;display: inline-block;">Instagram</i></a>
                      </div>

                      <div class="col-md-4" style="color: #dcdbdb;">
                        <h5 class="Alamat">Alamat</h5><hr>
                        <p class="NamaJalan">Jl. Besar Ijen 30A Malang - Jawa Timur, Indonesia
                        Phone: +62-341-362005</p>  
                      </div>

                      <div class="col-md-4 mt-5" style="color: #dcdbdb;">
                       <p style="color: #dcdbdb;">© copyright 2018 all rights reserved</p>  
                     </div>

                   </div>
                 </div>
               </nav>
             </section>
             <!--footer-->

             <!-- Modal -->
             <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

              <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">

                  <div class="modal-body">
                    <div class="container">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <div class="card-body">

                        <div class="row">

                          <form action="<?php echo base_url('c_index/c_registrasi'); ?>" method="post">
                            <div class="col">
                              <div class="card ">
                                <div class="card-body">
                                  <!-- <form> -->
                                   <div id="login-box">
                                    <div class="left-box">
                                      <h5>Belum Punya Akun? Daftar disini</h5><a href="<?php echo base_url('c_index/c_BantuanAnggota'); ?>"><small class="bantuan">Bantuan Pendaftaran</small></a>
                                      <hr>

                                      <!--row 1-->
                                      <div class="form-row">
                                        <!--isi row pertama-->
                                        <div class="form-group col-md-6">
                                          <label for="inputNama">Nama</label>
                                          <input type="text" class="inputNama form-control" id="inputNama" name="inputNama" placeholder="Masukan Nama" required>
                                        </div>

                                        <div class="form-group col-md-5">
                                          <label for="inputNIK">NIK</label>
                                          <input type="text" class="inputNIK form-control" id="inputNIK" name="inputNIK" placeholder="Masukan NIK" required>
                                        </div>
                                        <!--isi row pertama-->
                                      </div>
                                      <!--row 1-->
                                      <small>*Untuk yang berdomisili diluar malang, kosongngkan kecamatan dan kelurahan</small>

                                      <div class="form-row"> <!--row 2-->

                                        <!--isi row kedua-->
                                        <div class="form-group col-md-4">
                                          <label for="inputKecamatan">Kecamatan</label>
                                          <select id="inputKecamatan" class="inputKecamatan form-control" name="inputKecamatan" data-toggle="tooltip" data-placement="top" title="Khusus yang Berdomisili di Malang" onchange="getValue();">
                                            <option selected disabled>Pilih</option>
                                            <option>Klojen</option>
                                            <option>Blimbing</option>
                                            <option>Kedungkandang</option>
                                            <option>Lowokwaru</option>
                                            <option>Sukun</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataKecamatan" id="dataKecamatan">

                                        <div class="form-group col-md-4">
                                          <label for="inputKelurahan">Kelurahan</label>

                                          <select id="inputKelurahan" class="inputKelurahan form-control" name="inputKelurahan" data-toggle="tooltip" data-placement="top" title="Khusus yang Berdomisili di Malang" onchange="getValue();">
                                            <option selected disabled>Pilih</option>

                                            <!--kelurahan di kec. klojen-->
                                            <option>Klojen</option>
                                            <option>Rampal Celaket</option>
                                            <option>Samaan</option>
                                            <option>Kidulkalem</option>
                                            <option>Sukoharjo</option>
                                            <option>Kasin</option>
                                            <option>Oro-oro Dowo</option>
                                            <option>Bareng</option>
                                            <option>Gading Kasri</option>
                                            <option>Penanggungan</option>
                                            <option>Kauman</option>

                                            <!--kelurahan di kec. blimbing-->
                                            <option>Blimbing</option>
                                            <option>Balearjosari</option>
                                            <option>Arjosari</option>
                                            <option>Purwodadi</option>
                                            <option>Polowijen</option>
                                            <option>Pandanwangi</option>
                                            <option>Purwantoro</option>
                                            <option>Bunulrejo</option>
                                            <option>Kesatrian</option>
                                            <option>Polehan</option>
                                            <option>Jodipan</option>

                                            <!--kelurahan di kec. kedungkandang-->
                                            <option>Kotalama</option>
                                            <option>Mergosono</option>
                                            <option>Bumiayu</option>
                                            <option>Wonokoyo</option>
                                            <option>Buring</option>
                                            <option>Kedungkandang</option>
                                            <option>Lesanpuro</option>
                                            <option>Sawojajar</option>
                                            <option>Madyapuro</option>
                                            <option>Cemorokandang</option>
                                            <option>Arjowinangun</option>
                                            <option>Tlogowaru</option>

                                            <!--kelurahan di kec. lowokwaru-->
                                            <option>Tasikmadu</option>
                                            <option>Tunggulwulung</option>
                                            <option>Merjosari</option>
                                            <option>Tlogomas</option>
                                            <option>Dinoyo</option>
                                            <option>Sumbersari</option>
                                            <option>Ketawanggede</option>
                                            <option>Jatimulyo</option>
                                            <option>Tunjungsekar</option>
                                            <option>Mojolangu</option>
                                            <option>Tulusrejo</option>
                                            <option>Lowokwaru</option>

                                            <!--kelurahan di kec. sukun-->
                                            <option>Ciptomulyo</option>
                                            <option>Gadang</option>
                                            <option>Bandungrejosari</option>
                                            <option>Sukun</option>
                                            <option>Tanjungrejo</option>
                                            <option>Pisangcandi</option>
                                            <option>Bandulan</option>
                                            <option>Karang Besuki</option>
                                            <option>Mulyorejo</option>
                                            <option>Bakalan Krajan</option>
                                            <option>Kebonsari</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataKelurahan" id="dataKelurahan">


                                        <div class="form-group col-md-3">
                                          <label for="inputJenisKelamin">Jenis Kelamin</label>
                                          <select id="inputJenisKelamin" class="inputJenisKelamin form-control" name="inputJenisKelamin" onchange="getValue();">
                                            <option selected disabled>Pilih</option>
                                            <option>Laki-laki</option>
                                            <option>Perempuan</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataJenisKelamin" id="dataJenisKelamin">
                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-2">
                                          <label for="inputTanggal">Tgl</label>
                                          <select id="inputTanggal" class="inputTanggal form-control" name="inputTanggal" onchange="getValue();">
                                            <option selected disabled>Pilih Tgl</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>7</option>
                                            <option>8</option>
                                            <option>9</option>
                                            <option>10</option>
                                            <option>11</option>
                                            <option>12</option>
                                            <option>13</option>
                                            <option>14</option>
                                            <option>15</option>
                                            <option>16</option>
                                            <option>17</option>
                                            <option>18</option>
                                            <option>19</option>
                                            <option>20</option>
                                            <option>21</option>
                                            <option>22</option>
                                            <option>23</option>
                                            <option>24</option>
                                            <option>25</option>
                                            <option>26</option>
                                            <option>27</option>
                                            <option>28</option>
                                            <option>29</option>
                                            <option>30</option>
                                            <option>31</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataTanggal" id="dataTanggal">

                                        <div class="form-group col-md-4">
                                          <label for="inputBulan">Bln</label>
                                          <select id="inputBulan" class="inputBulan form-control" name="inputBulan" onchange="getValue();">
                                            <option selected disabled>Pilih Bulan</option>
                                            <option>Januari</option>
                                            <option>Februari</option>
                                            <option>Maret</option>
                                            <option>April</option>
                                            <option>Mei</option>
                                            <option>Juni</option>
                                            <option>Juli</option>
                                            <option>Agustus</option>
                                            <option>September</option>
                                            <option>Oktober</option>
                                            <option>November</option>
                                            <option>Desember</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataBulan" id="dataBulan">

                                        <div class="form-group col-md-3">
                                          <label for="inputThn">Thn</label>
                                          <input type="text" class="inputTahun form-control" id="inputTahun" name="inputTahun" placeholder="Thn">
                                        </div>

                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-5">
                                          <label for="inputUsername">Masukkan Username</label>
                                          <input type="text" class="inputUsername form-control" id="inputUsername" name="inputUsername" placeholder="Masukkan Username">
                                        </div>

                                        <div class="form-group col-md-5">
                                          <label for="inputPassword">Masukkan Password</label>
                                          <input type="password" class="inputPassword form-control" id="inputPassword" name="inputPassword" placeholder="Masukkan Password">
                                        </div>

                                      </div>

                                      <div class="form-row">
                                        <div class="form-group col-md-10">
                                          <label for="inputAlamatRumah">Alamat Rumah</label>
                                          <input type="text" class="inputAlamatRumah form-control" id="inputAlamatRumah" name="inputAlamatRumah" placeholder="Masukkan Alamat Rumah">
                                        </div>
                                      </div>

                                      <div class="row">

                                        <div class="form-group col-md-5">
                                          <label for="inputJenisAnggota">Jenis Anggota</label>
                                          <select id="inputJenisAnggota" class="inputJenisAnggota form-control" name="inputJenisAnggota" onchange="getValue();">
                                            <option selected disabled>Pilih</option>
                                            <option>Pegawai Swasta</option>
                                            <option>Wiraswasta</option>
                                            <option>Pelajar</option>
                                            <option>Mahasiswa</option>
                                            <option>Umum</option>
                                          </select>
                                        </div>
                                        <input hidden name="dataJenisAnggota" id="dataJenisAnggota">

                                        <div class="form-group col-md-5">
                                          <label for="inputNomorTlp">Masukkan No tlp</label>
                                          <input type="text" class="inputNomorTlp form-control" id="inputNomorTlp" placeholder="Masukkan No tlp" name="inputNomorTlp">
                                        </div>
                                      </div>

                                      <div class="row">
                                        <div class="col-md-11">
                                          <button class="btn btn-outline-info btn-block" name="daftar" name="daftar" value="Daftar" type="submit">Daftar</button>
                                        </div>
                                      </div>

                                    </div>


                                  </div>
                                </div>
                              </div>
                            </div>

                          </form>


                          <script>
                            function getValue() {
                              document.getElementById('dataKecamatan').value = $("#inputKecamatan").val();
                              document.getElementById('dataKelurahan').value = $("#inputKelurahan").val();
                              document.getElementById('dataJenisKelamin').value = $("#inputJenisKelamin").val();
                              document.getElementById('dataTanggal').value = $("#inputTanggal").val();
                              document.getElementById('dataBulan').value = $("#inputBulan").val();
                              document.getElementById('dataJenisAnggota').value = $("#inputJenisAnggota").val();

                            }
                          </script>


                          <div class="col">

                            <div class="card">
                              <div class="card-body" style="background-image: url(<?php echo base_url()?>bootstrap/gambar/image1.png);">

                               <form action="<?php echo base_url('c_index/login'); ?>" method="post">
                                <h5 class="masuk" style="color: #fff;">Sudah punya akun? Masuk disini</h5><hr>
                                <?php echo $this->session->flashdata('msg');?>

                                <div class="form-label-group">
                                  <input type="text" id="inputNamaLogin" class="form-control inputNamaLogin" name="inputNamaLogin" placeholder="Email address" required autofocus>
                                  <label for="inputNamaLogin">Masukkan Username</label>
                                </div>

                                <div class="form-label-group">
                                  <input type="password" id="inputPasswordLogin" class="form-control inputPasswordLogin" name="inputPasswordLogin" placeholder="Password" required autofocus>
                                  <label for="inputPasswordLogin">Masukkan Password</label>
                                </div>

                                <button class="btn btn-outline-success btn-block" type="submit">Masuk</button>
                                <br><br><br>
                              </form>

                              <div class="tata cara mt-5" style="color: #fff;">
                                <h6>Tata Cara Pendaftaran Anggota Online</h6><hr>
                                <small>1. Isi Form Pendataran Online dapat lewat internet atau komputer yang disediakan di Perpustakaan Kota Malang.</small><br>
                                <small>2. Datang ke bagian pendaftaran di Perpustakaan Kota Malang segera setelah mengisi form pendaftaran online.Untuk pengambilan foto dan cetak kartu anggota dengan membawa:<br>- Fotocopy KTP sendiri <br> -Fotocopy KTP orang tua bagi anak-anak yang belum mempunyai KTP</small><br>
                                <small>3. Pendaftaran tidak dipungut biaya</small>
                              </div>

                            </div>
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>

              </div>
            </div>
          </div>
          <!--akhir modal-->

        </body>
        </html>
