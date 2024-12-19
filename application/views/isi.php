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
											<li class="active"><a href="<?= base_url('semua_produk') ?>">All Genre</a></li>
											<?php foreach ($kategori as $kate) { ?>
												<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
													<?= $kate['nama_kategori']?>
												</a>
											<?php } ?>
										</ul>

									</li>
									<li class="menu-item"><a href="<?= base_url('home/about')?>" class="nav-link">About Us</a></li>
									<li class="menu-item"><a href="#" class="nav-link">Contact</a></li>
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

	</div><!--header-wrap-->
	
	<section id="best-selling" class="leaf-pattern-overlay">
    <div class="corner-pattern-overlay"></div>
    <div class="container">
        <div class="row justify-content-center align-items-center d-flex text-left" style="min-height: 100vh;">
            <div class="col-md-3">
                
            </div>
											
            <div class="col-md-12">
                <div class="product-entry">
				<figure class="banner-image mt-0.5" style=" text-align: center;">
                    <img src="<?= base_url('assets/upload/berita/' . $berita->foto) ?>" 
                         alt="book" 
                         style="max-width: 370px; height: auto; border-radius: 12px; margin-right: 30px; transform: scale(1.4);"
                         class="single-image">
                </figure>
				<br><br>
                    <h1 style="font-size: 36px; font-weight: bold; text-align: center;"><?= $berita->judul; ?></h1>

                    <div class="products-content">
                        <!-- Teks Keterangan -->
                        <p style="font-size: 22px; line-height: 1.8;"><?= $berita->keterangan; ?></p>

                        <!-- Teks Tengah -->
                       
                        <p style="font-size: 22px; line-height: 1.8;"><?= $berita->tengah; ?></p>

                        <!-- Teks Akhir -->
                       
                        <p style="font-size: 22px; line-height: 1.8; "><?= $berita->akhir; ?></p>

                      
                </div>
            </div>
        </div>
        <!-- / row -->
    </div>
</section>


 </div>
 


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
								<a href="<?= base_url('home/about')?>">About Us</a>
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
	

	<script src="<?= base_url('assets/front')?>/js/jquery-1.11.0.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
		crossorigin="anonymous"></script>
	<script src="<?= base_url('assets/front')?>/js/plugins.js"></script>
	<script src="<?= base_url('assets/front')?>/js/script.js"></script>

</body>

</html>