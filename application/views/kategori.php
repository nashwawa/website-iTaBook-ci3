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
											<li class="active"><a href="<?= base_url('semua_produk')?>">All Genre</a></li>
											<?php foreach ($kategori as $kate) { ?>
												<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="nav-item nav-link">
													<?= $kate['nama_kategori']?>
												</a>
											<?php } ?>
											<!-- <li><a href="index.html">Contact</a></li> -->
											<!-- <li><a href="index.html">Styles</a></li>
											<li><a href="index.html">Blog</a></li>
											<li><a href="index.html">Post Single</a></li>
											<li><a href="index.html">Our Store</a></li>
											<li><a href="index.html">Product Single</a></li>
											<li><a href="index.html">Contact</a></li>
											<li><a href="index.html">Thank You</a></li> -->
										</ul>

									</li>
									<li class="menu-item"><a href="<?= base_url('home/about')?>" class="nav-link">About Us</a></li>
									<li class="menu-item"><a href="#featured-books" class="nav-link">Featured</a></li>
									<li class="menu-item"><a href="#popular-books" class="nav-link">Popular</a></li>
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

	<section id="billboard">

		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<button class="prev slick-arrow">
						<i class="icon icon-arrow-left"></i>
					</button>

	

					<button class="next slick-arrow">
						<i class="icon icon-arrow-right"></i>
					</button>

				</div>
			</div>
		</div>

	</section>

	<!-- <section id="client-holder" data-aos="fade-up">
		<div class="container">
			<div class="row">
				<div class="inner-content">
					<div class="logo-wrap">
						<div class="grid">
							<a href="#"><img src="<?= base_url('assets/front')?>/images/client-image1.png" alt="client"></a>
							<a href="#"><img src="<?= base_url('assets/front')?>/images/client-image2.png" alt="client"></a>
							<a href="#"><img src="<?= base_url('assets/front')?>/images/client-image3.png" alt="client"></a>
							<a href="#"><img src="<?= base_url('assets/front')?>/images/client-image4.png" alt="client"></a>
							<a href="#"><img src="<?= base_url('assets/front')?>/images/client-image5.png" alt="client"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->

	<section id="featured-books" class="py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="section-header align-center">
						<h2 class="section-title"><?= $nama_kategori;?></h2>
					</div>
                    <ul class="tabs">
						<li data-tab-target="#featured" class="active tab">All Genre</li>
						<?php foreach ($kategori as $kate) { ?>
							<li>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="tab">
									<?= $kate['nama_kategori']?>
								</a>
							</li>
						<?php } ?>
					</ul>

					<div class="product-list" data-aos="fade-up">
						<div class="row">
							<?php 
							// Potong array untuk menampilkan hanya 4 produk
							$konten_limited = array_slice($konten, 0, 4);
							foreach ($konten_limited as $uu) { ?>
								<div class="col-md-3">
									<div class="product-item" style="text-align: left; border: 1px solid #ddd; border-radius: 12px; padding: 15px; margin-bottom: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
										<!-- Gambar Produk -->
										<figure class="product-style" style="margin: 0;">
											<img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>" 
												alt="Product Image" 
												style="width: 100%; height: 410px; object-fit: cover; border-radius: 12px;">
											<div style="margin-top: 10px; text-align: center;">
												<button type="button" class="add-to-cart" data-product-tile="add-to-cart" 
														style="background-color: #543A14; padding: 8px 12px; border: none;">
													<a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" 
													style="color: #fff; text-decoration: none; display: block; text-align: center;">
														Detail
													</a>
												</button>
											</div>
										</figure>

										<!-- Informasi Produk -->
										<figcaption style="margin-top: 10px;">
											<h3 style="font-size: 18px; margin-bottom: 5px; color: #333;">
												<?= $uu['judul'] ?>
											</h3>
											<span style="display: block; font-size: 14px; color: #888; margin-bottom: 5px;">
												<?= $uu['karya'] ?>
											</span>
											<div class="item-price" style="font-size: 20px; font-weight: bold; color: #000;">
												Rp<?= number_format($uu['harga'], 0, ',', '.') ?>
											</div>
											<div style="color: red; font-size: 14px; margin-top: 5px;">
												30% <s style="color: #aaa;">Rp<?= number_format($uu['harga'] * 1.3, 0, ',', '.') ?></s>
											</div>
										</figcaption>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


				</div><!--inner-content-->
			</div>
		</div>
	</section>

	<section id="popular-books" class="bookshelf py-5 my-5">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="section-header align-center">
						<div class="title">
							<span>Some quality items</span>
						</div>
						<h2 class="section-title">Popular Books</h2>
					</div>

					<ul class="tabs">
						<li data-tab-target="#all-genre" class="active tab">All Genre</li>
						<?php foreach ($kategori as $kate) { ?>
							<li>
								<a href="<?= base_url('home/kategori/'.$kate['id_kategori'])?>" class="tab">
									<?= $kate['nama_kategori']?>
								</a>
							</li>
						<?php } ?>
					</ul>

					<div class="product-list" data-aos="fade-up">
						<div class="row">
							<?php 
							// Potong array untuk menampilkan hanya 4 produk
							$konten_limited = array_slice($konten, 0, 4);
							foreach ($konten_limited as $uu) { ?>
								<div class="col-md-3">
									<div class="product-item" style="text-align: left; border: 1px solid #ddd; border-radius: 12px; padding: 15px; margin-bottom: 20px; box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);">
										<!-- Gambar Produk -->
										<figure class="product-style" style="margin: 0;">
											<img src="<?= base_url('assets/upload/konten/') . $uu['foto'] ?>" 
												alt="Product Image" 
												style="width: 100%; height: 410px; object-fit: cover; border-radius: 12px;">
											<div style="margin-top: 10px; text-align: center;">
												<button type="button" class="add-to-cart" data-product-tile="add-to-cart" 
														style="background-color: #543A14; padding: 8px 12px; border: none;">
													<a href="<?= base_url('home/artikel/' . $uu['slug']) ?>" 
													style="color: #fff; text-decoration: none; display: block; text-align: center;">
														Detail
													</a>
												</button>
											</div>
										</figure>

										<!-- Informasi Produk -->
										<figcaption style="margin-top: 10px;">
											<h3 style="font-size: 18px; margin-bottom: 5px; color: #333;">
												<?= $uu['judul'] ?>
											</h3>
											<span style="display: block; font-size: 14px; color: #888; margin-bottom: 5px;">
												<?= $uu['karya'] ?>
											</span>
											<div class="item-price" style="font-size: 20px; font-weight: bold; color: #000;">
												Rp<?= number_format($uu['harga'], 0, ',', '.') ?>
											</div>
											<div style="color: red; font-size: 14px; margin-top: 5px;">
												30% <s style="color: #aaa;">Rp<?= number_format($uu['harga'] * 1.3, 0, ',', '.') ?></s>
											</div>
										</figcaption>
									</div>
								</div>
							<?php } ?>
						</div>
					</div>


				</div><!--inner-tabs-->

			</div>
		</div>
	</section>

	<section id="quotation" class="align-center pb-5 mb-5">
		<div class="inner-content">
			<h2 class="section-title divider">Quote of the day</h2>
			<blockquote data-aos="fade-up">
				<q>Semakin banyak Anda membaca, semakin banyak hal yang akan Anda ketahui. Semakin banyak yang Anda pelajari, semakin banyak tempat yang akan Anda kunjungi.</q>
				<div class="author-name">Dr. Seuss</div>
			</blockquote>
		</div>
	</section>

	<section id="subscribe">
	<div class="container">
		<div class="row justify-content-center">
        <section id="articles" class="py-5 my-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">

                        <div class="section-header align-center">
                            <div class="title">
                                <span>Read our articles</span>
                            </div>
                            <h2 class="section-title">Latest Articles</h2>
                        </div>

                        <div class="row">
							<?php foreach ($berita as $aa) { ?>

                            <div class="col-md-4">

                                <article class="column" data-aos="fade-up">
                                    <figure>
                                        <a href="<?= base_url('home/isi/'.$aa['slug']) ?>" class="image-hvr-effect">

                                            <img
                                                src="<?= base_url('assets/upload/berita/' . $aa['foto']) ?>"
                                                alt="Product Image"
                                                style="width: 100%; height: 300px; object-fit: cover; border-radius: 12px;">
                                        </a>
                                    </figure>

                                    <div class="post-item">
                                        <div class="meta-date"><?= $aa['tanggal']?></div>
                                        <h3>
                                            <a href="#"><?= $aa['judul']?></a>
                                        </h3>

                                        <div class="links-element">
                                            <div class="categories">INSPITARION</div>
                                            <div class="social-links">
                                                <ul>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icon icon-facebook"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icon icon-twitter"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#">
                                                            <i class="icon icon-behance-square"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--links-element-->

                                    </div>
                                </article>

                            </div>

							<?php  } ?>
                        </div>

                        <div class="row">

                            <div class="btn-wrap align-center">
                                <a href="#" class="btn btn-outline-accent btn-accent-arrow" tabindex="0">Read All Articles<i class="icon icon-ns-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
	

   
			</section>
		
		</div>
    </div>
</section>
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
						<ul>
					</div>

				</div>

			</div>
			<!-- / row -->

		</div>
	</footer>

	<div id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="copyright">
						<div class="row">

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