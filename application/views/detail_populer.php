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

							<div class="action-menu">

							</div>

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
	
<div id="caraouselExampleControls" class="main-slider pattern-overlay" data-ride="caraousel">
  <div class="slider-item caraousel-inner" style="display: flex; align-items: center; gap: 40px;">
   
    <div class="col-md-4">
      <figure class="banner-image mt-0.5">
        <img src="<?= base_url('assets/upload/populer/' . $konten->foto) ?>" alt="book" style="max-width: 370px; height: auto; border-radius: 12px; margin-right: 30px; transform: scale(1.4);" class="single-image">
      </figure>
    </div>

   
	<div class="product-entry mt-6" >
		
		<h2 class="section-title divider"style="margin-top: 100px;"><?= $konten->judul; ?></h2>
		<h2>
			<?= $konten->karya; ?>
		</h2>
		<?php if (isset($konten->harga)) : ?>
			<big><h1 style="color: black; font-size: 4rem; margin-bottom: 20px;">Rp <?= number_format($konten->harga, 0, ',', '.'); ?></h1></big>
		<?php endif; ?>
		<div style="color: red; font-size: 30px; margin-top: 5px;">
			30% <s style="color: #aaa;">Rp<?= number_format($konten->harga * 1.3, 0, ',', '.') ?></s>
		</div>
		
		<h2 style="margin-top: 30px;">Deskripsi :</h2>
		<p style="width: 500px; margin-bottom: 20px; line-height: 1.5;"><?= $konten->keterangan; ?></p>

		<h2 style="margin-top: 30px;">Detail Buku :</h2>

		<!-- Kontainer Detail Buku -->
		<div style="display: flex; flex-wrap: wrap; gap: 20px;">

			<!-- Kolom Kiri -->
			<div style="flex: 1;">
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Penerbit:</strong> <?= $konten->penerbit; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>ISBN:</strong> <?= $konten->isbn; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Bahasa:</strong> <?= $konten->bahasa; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Lebar:</strong> <?= $konten->lebar; ?>
				</p>
			</div>

			<!-- Kolom Kanan -->
			<div style="flex: 1;">
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Tanggal Terbit:</strong> <?= $konten->tanggal; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Halaman:</strong> <?= $konten->halaman; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Panjang:</strong> <?= $konten->panjang; ?>
				</p>
				<p style="margin-bottom: 10px; line-height: 1.5;">
					<strong>Berat:</strong> <?= $konten->berat; ?>
				</p>
			</div>

		</div>
			

		<?php if (isset($detail_buku->penerbit)) : ?>
			<p style="margin-top: 10px;">Penerbit: <?= $detail_buku->penerbit; ?></p>
		<?php endif; ?>
	</div>

 </div>
 
 <section id="latest-blog" class="py-5 my-5">
	<footer id="footer">
		<div class="container">
			<div class="row">

				<div class="col-md-4">

					<div class="footer-item">
						<div class="company-brand">
							<img src="images/main-logo.png" alt="logo" class="footer-logo">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sagittis sed ptibus liberolectus
								nonet psryroin. Amet sed lorem posuere sit iaculis amet, ac urna. Adipiscing fames
								semper erat ac in suspendisse iaculis.</p>
						</div>
					</div>

				</div>

				<div class="col-md-2">

					<div class="footer-menu">
						<h5>About Us</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">vision</a>
							</li>
							<li class="menu-item">
								<a href="#">articles </a>
							</li>
							<li class="menu-item">
								<a href="#">careers</a>
							</li>
							<li class="menu-item">
								<a href="#">service terms</a>
							</li>
							<li class="menu-item">
								<a href="#">donate</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Discover</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Home</a>
							</li>
							<li class="menu-item">
								<a href="#">Books</a>
							</li>
							<li class="menu-item">
								<a href="#">Authors</a>
							</li>
							<li class="menu-item">
								<a href="#">Subjects</a>
							</li>
							<li class="menu-item">
								<a href="#">Advanced Search</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>My account</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Sign In</a>
							</li>
							<li class="menu-item">
								<a href="#">View Cart</a>
							</li>
							<li class="menu-item">
								<a href="#">My Wishtlist</a>
							</li>
							<li class="menu-item">
								<a href="#">Track My Order</a>
							</li>
						</ul>
					</div>

				</div>
				<div class="col-md-2">

					<div class="footer-menu">
						<h5>Help</h5>
						<ul class="menu-list">
							<li class="menu-item">
								<a href="#">Help center</a>
							</li>
							<li class="menu-item">
								<a href="#">Report a problem</a>
							</li>
							<li class="menu-item">
								<a href="#">Suggesting edits</a>
							</li>
							<li class="menu-item">
								<a href="#">Contact us</a>
							</li>
						</ul>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>
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