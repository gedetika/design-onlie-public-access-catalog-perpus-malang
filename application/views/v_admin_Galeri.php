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
		<form action="<?php echo base_url('c_admin/searchGaleri')?>" method="post" enctype="multipart/form-data">
			<div class="container">
				<div class="row">
					<div class="col-md-6 offset-md-6">
						<div class="input-group">
							<input type="text" name="search" id="search" class="form-control" placeholder="Cari Galeri">
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
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="card">
						<div class="card-header">
							<h4>Daftar Galeri</h4>
						</div>
						<div style="height: 500px; overflow: auto;">
							<table class="table table-striped">
								<thead class="thead-inverse">
									<tr>
										<th>Judul Galeri</th>
										<th>Isi Kegiatan</th>
										<th>Waktu</th>
										<th>Gambar</th>
										<th>Action</th>
									</tr>
									
								</thead>
								<?php  
								foreach ($datagaleri as $data) {
									
									
									?>
									<tbody>
										<tr>
											
											<td><?php echo $data->judulgaleri; ?></td>
											<td><?php echo $data->kegiatan; ?></td>
											<td><?php echo $data->waktu; ?></td>
											<td><?php echo $data->gambar; ?></td>
											<td>
												<!-- <div class="btn-group"> -->
													<!-- <a href="edit_buku.html" class="btn btn-primary">Edit</a> -->
													<a href="#editGaleri" class="edit" onclick="modal_edit_galeri('<?php echo $data->id;?>','<?php echo $data->judulgaleri;?>','<?php echo $data->kegiatan;?>','<?php echo $data->waktu;?>','<?php echo $data->gambar;?>');"><i class="btn btn-primary" data-toggle="tooltip" title="Edit" aria_hidden="true">Edit</i></a>
													
													<a href="" class="delete" data-toggle="modal" onclick="confirm_modal_galeri('<?php echo $data->id;?>');"><i class="btn btn-danger" title="Delete" aria_hidden="true">Hapus</i></a>
													<!-- <a href="<?php //echo base_url('c_admin/hapusGaleri\""$data->id"\"')?>" class="btn btn-danger">Hapus</a> -->
													<!-- </div> --> 
												</td> 
											</tr>
										</tbody>
										<?php  }
										?>
										
									</table>
								</div>
								
							</div>
						</div>          
					</div>
				</div>
			</section>
			<!--Header-->

			<!-- Modal EDit -->
			<div class="modal fade" id="editGaleri">
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<div class="modal-header bg-primary text-white">
							<h5 class="modal-tittle">Edit Galeri</h5>
							<button class="close" data-dismiss="modal" aria-hidden="true"><span>&times;</span></button>
						</div>
						<div class="modal-body">
							<form action="<?php echo base_url('c_admin/editGaleri')?>" method="post" enctype="multipart/form-data">
								<input hidden id="id" name="id" value="<?php echo $data->id ;?>">
								<div class="form-group">
									<label for="title" class="form-control-label">Judul</label>
									<input type="title" class="form-control" name="editjudulgaleri" value="<?php echo $data->judulgaleri;?>">
								</div>
								<div class="form-group">
									<label for="body" >Isi Kegiatan </label>
									<input type="title" class="form-control" name="editkegiatan" value="<?php echo $data->kegiatan;?>">
									
								</div>
								<div class="form-group">
									<label for="title" class="form-control-label">Waktu</label>
									<input type="title" class="form-control" name="editwaktu" value="<?php echo $data->waktu;?>">
								</div>
								<div class="input-group">              
									<input type="file" id="editgaleri" name="editgaleri" style="display:none" onchange="document.getElementById('edit').value=this.value" accept="image/png, image/jpeg, image/gif">
									<input type="text" id="edit" style="width: 690px;height: 35px;" disabled="disable">
									<input type="button" value="Pilih File" onclick="document.getElementById('editgaleri').click()" style="height: 35px;margin-top: -2px;" class="btn btn-default"> 
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
				function modal_edit_galeri(id,judulgaleri,kegiatan,waktu,gambar)
				{
					$('#editGaleri').modal('show',{backdrop: 'static'});
					document.getElementById('id').value = id;
					document.getElementById('editjudulgaleri').value = judulgaleri;
					document.getElementById('editkegiatan').value = kegiatan;
					document.getElementById('editwaktu').value = waktu;
					document.getElementById('editgaleri').value = gambar;
				}
			</script>
			<!-- modal hapus -->
			<div class="modal fade" id="delGaleri">
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
								<a href="" id="idgaleri"><input type="button" class="btn btn-danger" value="Hapus"></a>
							</div>
						</form>
					</div>
				</div>
				<?php  ?>
			</div>



			<!-- modal hapus -->
			
			<script>
				function confirm_modal_galeri(delete_url)
				{
					$('#delGaleri').modal('show',{backdrop: 'static'});
					document.getElementById('idgaleri').setAttribute('href' ,"hapusGaleri/"+delete_url);
				}
			</script>
			<!-- Modal Hapus -->

			<script src="<?php echo base_url() ?>bootstrap/js/jquery.min.js"></script>
			<script src="<?php echo base_url() ?>bootstrap/js/tether.min.js"></script>
			<script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
			<script src="<?php echo base_url() ?>https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
			<script>
				CKEDITOR.replace('editor1');
			</script>
		</body>
		</html>
