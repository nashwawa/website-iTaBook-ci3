<!DOCTYPE html>
<html lang="en">

<head>
	<title><?= $judul ?>
    </title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front')?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front')?>/icomoon/icomoon.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front')?>/css/vendor.css">
	<link rel="stylesheet" type="text/css" href="<?= base_url('assets/front')?>/style.css">

</head>

<body data-bs-spy="scroll" data-bs-target="#header" tabindex="0">

	<div id="header-wrap">

		<div class="top-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6">
						<div class="social-links">
							<ul>
								<li>
									<a href="#"><i class="icon icon-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-youtube-play"></i></a>
								</li>
								<li>
									<a href="#"><i class="icon icon-behance-square"></i></a>
								</li>
							</ul>
						</div><!--social-links-->
					</div>
					<div class="col-md-6">
						<div class="right-element">



						</div><!--top-right-->
					</div>

				</div>
			</div>
		</div><!--top-content-->

		<header id="header">
			<div class="container-fluid">
				<div class="row">

 					<div class="col-md-2">
						<div class="main-logo">
							<img src="<?= base_url('assets/front')?>/images/logoita.png" alt="logo" class="footer-logo " style="margin-left: 50px;">
						</div>
					<!--<div class="col-md-2">
						<div class="main-logo">
							<a href="index.html"><span class= "text-primary"><?= $konfig->judul_website; ?></span></a>
						</div> -->

					</div> 

					<div class="col-md-10">

						<nav id="navbar">
							<div class="main-menu stellarnav">
								<ul class="menu-list">
									<li class="menu-item active"><a href="<?= base_url('home')?>">Home</a></li>
									<li class="menu-item has-sub">
										<a href="#pages" class="nav-link">Kategori</a>

										<ul>
											<li class="active"><a href="<?= base_url('home')?>">Home</a></li>
											<?php foreach ($kategori as $kate) { ?>
												<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
													<?= $kate['nama_kategori']?>
												</a>
											<?php } ?>
										</ul>

									</li>
									<li class="menu-item"><a href="#contact">Contact</a></li>
									<li class="menu-item"><a href="<?= base_url('auth')?>" class="btn btn-primary px-4 mt-1 text-white" style="border-radius: 25px">Log In</a></li>
			
								</ul>

								<div class="hamburger">
									<span class="bar"></span>
									<span class="bar"></span>
									<span class="bar"></span>
								</div>

							</div>
						</nav>

					</div>

				</div>
			</div>
		</header>
		<!-- <section id="billboard">

		<div class="container">
			<div class="row">
				<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
						<img class="d-block w-100" src="..." alt="First slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>

	</section> -->

	</div><!--header-wrap-->
	<section id="best-selling" class="leaf-pattern-overlay">
		<div class="corner-pattern-overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12" style="width: 100%; height: auto;">
					<figure class="products-thumb" style="margin: 0; padding: 0;">
						<img src="<?= base_url('assets/front')?>/images/aboutUs.png" 
							alt="book" 
							class="single-image"
							style="width: 100%; height: auto; border-radius: 25px; box-shadow: 0 8px 8px rgba(0, 0, 0, 0.3); transition: transform 0.3s ease-in-out; transform: scale(1.11);">
					</figure>
					<br><br>
				</div>
					
						<div class="col-md-10">
							<div class="product-entry">
								<h2 class="section-title divider">About Us</h2>

								<div class="products-content">
									<div class="author-name"><big><b style="color: black;">iTabooks</b></big> adalah toko buku terpercaya di Indonesia yang hadir dengan koleksi lengkap buku berkualitas, alat tulis, dan perlengkapan kantor. Kini, iTabooks tak hanya menjadi tempat favorit para pencinta buku secara langsung, tetapi juga memberikan pengalaman baru melalui platform online.</div>
									<h3 class="item-title">Kenapa iTabooks?</h3> 
									<p>Kami menggabungkan kenyamanan belanja offline dengan kemudahan akses online. Dengan website kami, Anda dapat:</p>
									<p>
										<blockquote>
											<big><h4>Menjelajahi Koleksi Buku Kami Secara Virtual:</h4></big>
											<p>Temukan berbagai buku dan perlengkapan yang tersedia di toko iTabooks.</p>
											
											<big><h4>Cek Ketersediaan Stok:</h4></big>
											<p>Pastikan buku favorit Anda tersedia sebelum berkunjung ke toko kami.</p>
												
											<big><h4> Nikmati Penawaran Eksklusif:</h4></big>
										    <p>Nikmati Penawaran Eksklusif: Dapatkan promo spesial yang hanya tersedia melalui platform online kami.</p>
										</blockquote>
										<h4>Rasakan Pengalaman Offline yang Tak Tergantikan
										Kunjungi toko fisik iTabooks di lokasi terdekat Anda untuk:</h4>
										<p>Menikmati suasana membaca yang nyaman.
										Mendapatkan rekomendasi langsung dari tim kami yang profesional.
										Menyentuh dan memilih buku secara langsung.
										Tunjuk Kami untuk Temukan Toko Terdekat
										Melalui website kami, Anda dapat dengan mudah menemukan lokasi iTabooks di seluruh Indonesia.
										Kunjungi kami untuk pengalaman belanja yang lebih personal dan menyenangkan!</p>
									<h3>
									iTabooks, menjembatani kenyamanan online dengan sentuhan offline yang tak tergantikan.
									Temukan inspirasi Anda bersama kami! 📖✨</h3>
						
									<div class="btn-wrap">
										<a href="#" class="btn-accent-arrow">shop it now <i
												class="icon icon-ns-arrow-right"></i></a>
									</div>
								</div>

							</div>
						</div>

					</div>
					<!-- / row -->

				</div>

			</div>
		</div>
	</section>

<section id="contact" class="py-5 my-5">
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="<?= base_url('assets/front')?>/images/logona.png" alt="logo" class="footer-logo" style="transform: scale(1.7)">
							<p><?= $konfig->profil_website; ?></p>
						</div>
					</div>

				</div>

				
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="<?= base_url()?>">Home</a>
							</li>
							<?php foreach ($kategori as $kate) { ?>
								<li class="menu-item">
									<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>"><?= $kate['nama_kategori']?></a>
								</li>
							<?php } ?>
							<li class="menu-item">
								<a href="<?= base_url()?>">Featured</a>
							</li>
							<li class="menu-item">
								<a href="<?= base_url()?>">Popular</a>
							</li>
							<li class="menu-item">
								<a href="<?= base_url()?>">Articles</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="<?= base_url('auth/login') ?>">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">About Us</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="icon icon-whatsapp"> 
								<a href="<?= $konfig->no_wa; ?>">Phone : +62 812-3375-8482</a>
							</li>
							<br>
							<li class="icon icon">
								<a href="<?= $konfig->alamat; ?>">Alamat : Jl. Melati No. 45, Kelurahan Sukamaju, Kecamatan Cempaka, Kota Bandung, Jawa Barat 40123, Indonesia.</a>
							</li>
							<br>
							<li class="email">
								<a href="<?= $konfig->email; ?>">Email : supportiTabooks@gmail.com</a>
							</li>
						</ul>
						<br><br><br><br>
						<div class="col-md-6">
								<div class="social-links align-right">
									<ul>
										<li>
											<a href="<?= $konfig->instagram; ?>"><i class="icon icon-facebook"></i></a>
										</li>
										<li>
											<a href="<?= $konfig->instagram; ?>"><i class="icon icon-twitter"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-youtube-play"></i></a>
										</li>
										<li>
											<a href="#"><i class="icon icon-behance-square"></i></a>
										</li>
									</ul>
								</div>
							</div>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>
</section>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

							

						</div>
					</div><!--grid-->

				</div><!--footer-bottom-content-->
			</div>
		</div>
	</div>

	<script src="<?= base_url('assets/front')?>/js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/front')?>/js/plugins.js"></script>
	<script src="<?= base_url('assets/front')?>/js/script.js"></script>

</body>

</html>