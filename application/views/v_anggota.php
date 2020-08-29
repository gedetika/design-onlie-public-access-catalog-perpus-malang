<?php  ?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Perpustakaan Umum dan Arsip Kota Malang - Coming Soon</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url()?>bootstrap/bootstrap 4.1/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Custom fonts for this template -->
	<link href="<?php echo base_url()?>bootstrap/https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<link href="<?php echo base_url()?>bootstrap/https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
	<link href="<?php echo base_url()?>bootstrap/custom css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php echo base_url()?>bootstrap/custom css/coming-soon.min.css" rel="stylesheet">

</head>

<body>

	<div class="overlay"></div>
	<video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
		<source src="<?php echo base_url()?>bootstrap/mp4/bg.MKV" type="video/mp4">
		</video>

		<div class="masthead">
			<div class="masthead-bg"></div>
			<div class="container h-100">
				<div class="row h-100">
					<div class="col-12 my-auto">
						<div class="masthead-content text-white py-5 py-md-0">
							<h2 class="mb-3" style="font-family: Century Gothic;">Selamat Datang, <span><?php echo $this->session->userdata('Nama'); ?></span></h2><hr>
							<p class="mb-5" style="font-family: Corbel;">Kami bekerja keras untuk menyelesaikan halaman web ini. Terima kasih telah menjadi anggota <strong> Perpustakaan Umum dan Arsip Daerah Kota Malang</strong>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<form action="<?php echo site_url('c_index/Logout') ?>">
		<div class="social-icons">
			<ul class="list-unstyled text-center mb-0">
				<li class="list-unstyled-item">
					<a href="https://twitter.com/malanglib">
						<i class="fa fa-twitter"></i>
					</a>
				</li>
				<li class="list-unstyled-item">
					<a href="https://www.facebook.com/perpustakaan.malang">
						<i class="fa fa-facebook"></i>
					</a>
				</li>
				<li class="list-unstyled-item">
					<a href="https://www.instagram.com/perpustakaan_malang/">
						<i class="fa fa-instagram"></i>
					</a>
				</li>
				<li>
					<button class="btn btn-dark btn-block" type="submit">Keluar</button>
				</li>
			</ul>
		</div>
		</form>

		<!-- Bootstrap core JavaScript -->
		<script src="custom js/jquery-3.3.1"></script>
		<script src="bootstrap 4.1/dist/js/bootstrap.bundle.min.js"></script>

		<!-- Custom scripts for this template -->
		<script src="custom js/coming-soon.min.js"></script>

	</body>

	</html>
