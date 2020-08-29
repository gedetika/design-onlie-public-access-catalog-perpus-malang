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
		<form action="<?php echo base_url('c_admin/searchUser')?>" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6">
						<div class="input-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Cari Nama User">
							<input class="btn btn-primary" type="submit" name="pencarian" value="Cari">
							<span class="input-group-btn">

							</span>

						</div>
					</div>
				</div>
			</div>

		</form>
	</section>

	<!--Post-->
	<section id="posts">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-14">
					<div class="card text-center">
						<div class="card-header">
							<h4>Manage User</h4>
						</div>
						<div style="height: 500px; overflow: auto;">
							<table class="table table-striped text-center">
								<thead class="thead-inverse" style="font-size: 15px;">
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
										<th scope="col">Level User</th>
										<th scope="col">Action</th>
									</tr>         
								</thead>

								<?php foreach ($datauser as $data) { ?>
								<tbody style="font-size: 14px;">
									<tr>

										<td><?php echo $data->Nama?></td>
										<td><?php echo $data->NIK?></td>
										<td><?php echo $data->Kecamatan?></td>
										<td><?php echo $data->Kelurahan?></td>
										<td><?php echo $data->JenisKelamin?></td>
										<td><?php echo $data->Tanggal?></td>
										<td><?php echo $data->Bulan?></td>
										<td><?php echo $data->Tahun?></td>
										<td><?php echo $data->Username?></td>
										<td><?php echo $data->Password?></td>
										<td><?php echo $data->Alamat?></td>
										<td><?php echo $data->JenisAnggota?></td>
										<td><?php echo $data->NoTelp?></td>
										<td><?php echo $data->NoAnggota?></td>
										<td><?php echo $data->Level?></td>
										<td><?php echo $data->status?></td>

											<!-- <div class="btn-group"> -->
												<!-- <a href="edit_buku.html" class="btn btn-primary">Edit</a> -->
												<!-- <a href="#editGaleri" class="edit" onclick="modal_edit_galeri('<?php echo $data->id;?>','<?php echo $data->judulgaleri;?>','<?php echo $data->kegiatan;?>','<?php echo $data->waktu;?>','<?php echo $data->gambar;?>');"><i class="btn btn-primary" data-toggle="tooltip" title="Edit" aria_hidden="true">Edit</i></a> -->

												<!-- <a href="" class="delete" data-toggle="modal" onclick="confirm_modal_galeri('<?php echo $data->id;?>');"><i class="btn btn-danger" title="Delete" aria_hidden="true">Hapus</i></a> -->
												<!-- <a href="<?php //echo base_url('c_admin/hapusGaleri\""$data->id"\"')?>" class="btn btn-danger">Hapus</a> -->
												<!-- </div> --> 
											</td> 
										</tr>
									</tbody>
									<?php  } ?>
								</table>
							</div>
						</div>
					</div>




				</div>
			</div>
		</section>
		<!--Header-->
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/tether.min.js"></script>
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
		<script>
			CKEDITOR.replace('editor1');
		</script>
	</body>
	</html>
