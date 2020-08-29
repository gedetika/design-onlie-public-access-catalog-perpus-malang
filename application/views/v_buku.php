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
		<form action="<?php echo base_url('c_admin/searchBuku')?>" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6">
						<div class="input-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Cari Judul Buku">
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
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Buku</h4>
						</div>
						<div style="height: 500px; overflow: auto;">
							<table class="table table-striped">
								<thead class="thead-inverse">
									<tr>
										<th>Judul</th>
										<th>Cetakan</th>
										<th>Pengarang</th>
										<th>Penerbit</th>
										<th>Jilid</th>
										<th>Edisi</th>
										<th>Deskripsi Buku</th>
										<th>Bahasa</th>
										<th>Jumlah</th>
										<th>Subyek</th>
										<th>Nomor Panggilan</th>
										<th>Nomor Regis</th>
										<th>Gambar</th>
										<th>Action</th>
									</tr>
								</thead>

								<?php  
								foreach ($databuku as $data) { ?>
								<tbody>
									<tr>

										<td><?php echo $data->Judul?></td>
										<td><?php echo $data->Cetakan?></td>
										<td><?php echo $data->Pengarang?></td>
										<td><?php echo $data->Penerbit?></td>
										<td><?php echo $data->Jilid?></td>
										<td><?php echo $data->Edisi?></td>
										<td><?php echo $data->DeskripsiBuku?></td>
										<td><?php echo $data->Bahasa?></td>
										<td><?php echo $data->Jumlah?></td>
										<td><?php echo $data->Subyek?></td>
										<td><?php echo $data->NoPanggil?></td>
										<td><?php echo $data->NoRegis?></td>
										<td><?php echo "INI GAMBAR"?></td>
										
										<td>
											<div class="btn-group">
												<a href="#editBuku" data-target="#EditBuku" class="edit" onclick="modal_edit_buku('<?php echo $data->Judul?>','<?php echo $data->Cetakan?>','<?php echo $data->Pengarang?>','<?php echo $data->Penerbit?>','<?php echo $data->Jilid?>','<?php echo $data->Edisi?>','<?php echo $data->DeskripsiBuku?>','<?php echo $data->Bahasa?>','<?php echo $data->Jumlah?>','<?php echo $data->Subyek?>','<?php echo $data->NoPanggil?>','<?php echo $data->NoRegis?>');"><i class="btn btn-primary" data-toggle="tooltip" title="Edit" aria_hidden="true">Edit</i></a>

												<a href="" class="delete" data-toggle="modal" onclick="confirm_modal_buku('<?php echo $data->NoRegis?>');"><i class="btn btn-danger" title="Delete" aria_hidden="true">Hapus</i></a>
											</div> 
										</td>

											<!-- <td>
												<div class="btn-group">
												<a href="#editBuku" class="edit" onclick="modal_edit_buku('<?php //echo $data->id;?>','<?php //echo $data->judul;?>','<?php //echo $data->pengarang;?>','<?php //echo $data->subyek;?>','<?php //echo $data->penerbit;?>','<?php //echo $data->koleksi;?>','<?php //echo $data->jumlah;?>','<?php //echo $data->panggilan;?>','<?php //echo $data->status;?>','<?php //echo $data->gambar;?>');"><i class="btn btn-primary" data-toggle="tooltip" title="Edit" aria_hidden="true">Edit</i></a>

												<a href="" class="delete" data-toggle="modal" onclick="confirm_modal_buku('<?php //echo $data->id;?>');"><i class="btn btn-danger" title="Delete" aria_hidden="true">Hapus</i></a>
												</div> 
											</td> -->

										</tr>
									</tbody>
									<?php  }?>    
								</table>
							</div>
						</div>
					</div>          
				</div>
			</div>
		</section>
		<!--Header-->

		<!-- modal edit Buku -->
		<div class="modal fade" id="EditBuku">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header bg-primary text-white">
						<h5 class="modal-tittle">Edit Buku</h5>
						<button class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
					</div>
					<div class="modal-body">
						<form action="<?php echo base_url('c_admin/editBuku')?>" method="post" enctype="multipart/form-data">
							<input hidden id="id" name="id" value="<?php echo $data->id ;?>">
							<div class="form-group">
								<label for="title" class="form-control-label">Judul Buku</label>
								<input type="text" class="form-control" name="editjudul">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Pengarang</label>
								<input type="text" class="form-control" name="editpengarang">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Subyek</label>
								<input type="text" class="form-control" name="editsubyek">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Penerbit</label>
								<input type="text" class="form-control" name="editpenerbit">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Jenis Koleksi</label>
								<input type="text" class="form-control" name="editkoleksi">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Jumlah</label>
								<input type="text" class="form-control" name="editjumlah">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">No Panggilan</label>
								<input type="text" class="form-control" name="editpanggilan">
							</div>
							<div class="form-group">
								<label for="category" class="form-control-label">Status</label>
								<input type="text" class="form-control" name="editstatus">
							</div>
							<div class="input-group">              
								<input type="file" id="editbuku" name="editbuku" style="display:none" onchange="document.getElementById('edit').value=this.value" accept="image/png, image/jpeg, image/gif">
								<input type="text" id="edit" style="width: 690px;height: 35px;" disabled="disable">
								<input type="button" value="Pilih File" onclick="document.getElementById('editbuku').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default"> 
							</div>
							<div class="modal-footer">
								<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
								<input type="submit" class="btn btn-success" value="Simpan">
							</div>
						</form>
					</div>

				</div>
			</div>
		</div>
		<script>
			function modal_edit_buku(id,judul,pengarang,subyek,penerbit,koleksi,jumlah,panggilan,status,gambar)
			{
				$('#editBuku').modal('show',{backdrop: 'static'});
				document.getElementById('id').value = id;
				document.getElementById('editjudul').value = judul;
				document.getElementById('editpengarang').value = pengarang;
				document.getElementById('editsubyek').value = subyek;
				document.getElementById('editpenerbit').value = penerbit;
				document.getElementById('editkoleksi').value = koleksi;
				document.getElementById('editjumlah').value = jumlah;
				document.getElementById('editpanggilan').value = panggilan;
				document.getElementById('editstatus').value = status;
				document.getElementById('editbuku').value = gambar;
			}
		</script>

		<!-- modal hapus -->
		<div class="modal fade" id="delBuku">
			<div class="modal-dialog">
				<div class="modal-content">
					<form>
						<div class="modal-header">
							<h4 class="modal-title">Hapus Data</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Yakin ingin menghapus data ini?</p>
							<p class="text-warning"><small></small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Batal">
							<a href="" id="idbuku"><input type="button" class="btn btn-danger" value="Hapus"></a>
						</div>
					</form>
				</div>
			</div>
			<?php  ?>
		</div>
		<script>
			function confirm_modal_buku(delete_url)
			{
				$('#delBuku').modal('show',{backdrop: 'static'});
				document.getElementById('idbuku').setAttribute('href' ,"hapusBuku/"+delete_url);
			}
		</script>


		<!-- modal hapus -->
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/jquery.min.js"></script>
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/tether.min.js"></script>
		<script src="<?php echo base_url() ?>bootstrap/custom js admin/bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	</body>
	</html>
