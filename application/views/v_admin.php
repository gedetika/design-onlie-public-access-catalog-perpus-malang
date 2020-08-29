<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/custom css admin/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/custom css admin/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>bootstrap/custom css admin/style.css">
	<title>Admin</title>
</head>
<body>
	<nav class="navbar navbar-toggleable-sm navbar-inverse bg-inverse p-0">
		<div class="container">
			<button class="navbar-toggler navbar-toggler-right" data-target="#mynavbar" data-toggle="collapse">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a href="<?php echo base_url('c_admin/c_BerandaAdmin') ?>" class="navbar-brand">Home Admin</a>
			<div class="collapse navbar-collapse" id="mynavbar">

				<ul class="navbar-nav">
					<li class="nav-item px-2">
						<a href="<?php echo base_url('c_admin/c_adminSebagaiUser') ?>" class="nav-link">Perpustakaan Umum dan Arsip</a>
					</li>
					<li class="nav-item px-2">
						<a href="<?php echo base_url('c_admin/c_LihatBuku') ?>" class="nav-link">Buku</a>
					</li>
					<li class="nav-item px-2">
						<a href="<?php echo base_url('c_admin/c_LihatGaleri') ?>" class="nav-link">Galeri</a>
					</li>
					<li class="nav-item px-2">
						<a href="<?php echo base_url('c_admin/c_LihatUser') ?>" class="nav-link">User</a>
					</li>
				</ul>
				<!---->
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a href="" class="nav-link" data-toggle="dropdown">
							<i class="fa fa-user"></i><span>Selamat Datang Admin </span><span><?php echo $this->session->userdata('Nama'); ?></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="<?php echo site_url('c_index/Logout') ?>" class="nav-link"><i class="fa fa user-times"></i>Logout</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<!--heaer-->


	<!--section-->
	<section id="sections" class="py-4 mb-4 bg-faded">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addBookModel">
						<i class="fa fa-plus"></i>Tambah Buku
					</a>
				</div>
				<div class="col-md-6">
					<a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addGaleryModel">
						<i class="fa fa-plus"></i>Tambah Galeri
					</a>
				</div>
				<!-- <div class="col-md-4">
					<a href="" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addNewsModel">
						<i class="fa fa-plus"></i>Tambah Berita
					</a>
				</div> -->
			</div>
		</div>
	</section>

	<section>
		<div class="container-fluid ml-2 mr-2">
			<div class="row">
				<form action="<?php echo base_url('c_admin/c_admin_ubahLevel'); ?>" method="post">
					<table class="table table-striped table-sm" style="font-size: 16px;">

						<thead class="thead-dark">
							<tr>
								<th scope="col">Nama</th>
								<th scope="col">NIK</th>
								<th scope="col">Kecamatan</th>
								<th scope="col">Kelurahan</th>
								<th scope="col">Jenis Kelamin</th>
								<th scope="col">Tanggal</th>
								<th scope="col">Bulan</th>
								<th scope="col">Tahun</th>
								<th scope="col">Username</th>
								<th scope="col">Password</th>
								<th scope="col">Alamat</th>
								<th scope="col">Jenis Anggota</th>
								<th scope="col">Nomor Telpon</th>
								<th scope="col">Nomor Anggota</th>	
								<th scope="col">Level User</th>
								<th scope="col">Status</th>
								<th scope="col">Ubah Level</th>
								<th scope="col">Action</th>
							</tr>
						</thead>

						<?php foreach ($verifikasiUser as $verifi) { ?>
						<tbody style="font-size: 15px;">
							<tr>
								<td><?php echo $verifi->Nama?></td>
								<td><?php echo $verifi->NIK?></td>
								<td><?php echo $verifi->Kecamatan?></td>
								<td><?php echo $verifi->Kelurahan?></td>
								<td><?php echo $verifi->JenisKelamin?></td>
								<td><?php echo $verifi->Tanggal?></td>
								<td><?php echo $verifi->Bulan?></td>
								<td><?php echo $verifi->Tahun?></td>
								<td><?php echo $verifi->Username?></td>
								<td><?php echo $verifi->Password?></td>
								<td><?php echo $verifi->Alamat?></td>
								<td><?php echo $verifi->JenisAnggota?></td>
								<td><?php echo $verifi->NoTelp?></td>
								<td><?php echo $verifi->NoAnggota?></td>
								<td><?php echo $verifi->Level?></td>
								<td><?php echo $verifi->status?></td>
								<td>
									<div class="form-group">
										<select id="inputLevel" class="inputLevel form-control" name="inputLevel" data-toggle="tooltip" data-placement="top" onchange="getValue();">
											<option selected disabled>Pilih</option>
											<option>admin</option>
											<option>anggota</option>
										</select>
									</div>
								</td>

								<td>
									<div class="btn-group">
										<button class="btn btn-success" type="submit">Verifikasi</button>
									</div>
								</td>

							</tr>
						</tbody>
						<?php } ?>
						<input hidden name="dataLevel" id="dataLevel">
						
					</table>
				</form>
				<script>
					function getValue() {
						alert($("#inputLevel").val());
					 // var e = document.getElementById("inputLevel").value;
					 // console.log(e);
					// var pilihan = e.options[e.selectedIndex].value;
					// document.getElementById('dataLevel').value = $("#inputLevel").val();
				}
			</script>
		</div>
	</div>

</section>
<!--Header-->
<div class="modal fade" id="addBookModel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-tittle">Tambah Buku</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('c_admin/sakGambar')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title" class="form-control-label">Judul Buku</label>
						<input type="text" class="form-control" name="judul">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">Pengarang</label>
						<input type="text" class="form-control" name="pengarang">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">Subyek</label>
						<input type="text" class="form-control" name="subyek">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">Penerbit</label>
						<input type="text" class="form-control" name="penerbit">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">Jenis Koleksi</label>
						<input type="text" class="form-control" name="koleksi">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">Jumlah</label>
						<input type="text" class="form-control" name="jumlah">
					</div>
					<div class="form-group">
						<label for="category" class="form-control-label">No Panggilan</label>
						<input type="text" class="form-control" name="panggilan">
					</div>
					<div class="form-group">
						<label for="file" >Gambar</label>
						<input type="file" name="gambar" >
						<small class="form-text text-muted">max 3MB</small>
					</div>
					<button class="btn btn-secondary">Close</button>
					<button class="btn btn-primary" type="submit">Add </button>

				</form>

			</div>

		</div>
	</div>
</div>

<!--modalcateg-->

<!--Header-->
<div class="modal fade" id="addGaleryModel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-tittle">Tambah Galeri</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url('c_admin/insertGaleri')?>" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="title" class="form-control-label">Judul</label>
						<input type="title" class="form-control" name="galeri">
					</div>
					<div class="form-group">
						<label for="body" >Isi Kegiatan </label>
						<textarea class="form-control" name="kegiatan"></textarea>
					</div>
					<div class="form-group">
						<label for="title" class="form-control-label">Waktu</label>
						<input type="title" class="form-control" name="waktu">
					</div>
					<div class="form-group">
						<label for="file" >Gambar</label>
						<input type="file" class="form-control-file" id="file" name="galeri">
						<small class="form-text text-muted">max 3MB</small>
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary" >Close</button>
						<button class="btn btn-success" type="submit" name="galeri">Tambah Galeri</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>


<div class="modal fade" id="addNewsModel">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header bg-primary text-white">
				<h5 class="modal-tittle">Tambah Berita</h5>
				<button class="close" data-dismiss="modal"><span>&times;</span></button>
			</div>
			<div class="modal-body">
				<form action="<?php echo base_url()?>c_admin/insertBerita" method="post">
					<div class="modal-body">
						<label for="name">Judul</label>
						<input type="name" class="form-control" name="judulberita">
					</div>
					<div class="modal-body">
						<label for="email">Isi</label>
						<input type="email" class="form-control" name="isiberita">
					</div>
					<div class="modal-footer">
						<button class="btn btn-secondary">Close</button>
						<button class="btn btn-warning" type="submit">Tambah Berita</button>
					</div>
				</form>
			</div>

		</div>
	</div>
</div>




<script src="<?php echo base_url() ?>bootstrap/custom js admin/jquery.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/custom js admin/tether.min.js"></script>
<script src="<?php echo base_url() ?>bootstrap/custom js admin/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
<script>
	CKEDITOR.replace('editor1');
</script>
</body>
</html>
