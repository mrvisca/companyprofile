<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Favicon-->
<link rel="shortcut icon" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
<!-- Author Meta -->
<meta name="author" content="colorlib">
<!-- Meta Description -->
<meta name="description" content="">
<!-- Meta Keyword -->
<meta name="keywords" content="">
<!-- meta character set -->
<meta charset="UTF-8">
<!-- Site Title -->
<title>Firna.co.id</title>

<!-- Css Galery -->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">-->
<<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/gallery-grid.css');?>">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
<!-- CSS ============================================= -->
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/linearicons.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/font-awesome.min.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/bootstrap.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/magnific-popup.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/nice-select.css'?>">							
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/animate.min.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/owl.carousel.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'public/css/main.css'?>">
</head>
<body>	
	<header id="header" id="beranda">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						<ul>
						<li><a href="https://web.facebook.com/firnapay/?_rdc=1&_rdr"><i class="fa fa-facebook"><title>facebook.com/firnapay/</title></i></a></li>
						<li><a href="https://www.instagram.com/firnapay/"><i class="fa fa-instagram"><title>instagram.com/firnapay/</title></i></a></li>
						<li><a href="mailto:firnaofficial@gmail.com"><i class="fa fa-google"><title>firnaofficial@gmail.com</title></i></a></li>
						<li><a href="https://api.whatsapp.com/send?phone=62881036512040"><i class="fa fa-whatsapp"><title>0881-0365-12040</title></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
						<a href="https://api.whatsapp.com/send?phone=62881036512040">0881-0365-12040</a>
						<a href="mailto:firnaofficial@gmail.com" title="firnaofficial@gmail.com">firnaofficial@gmail.com</a>				
					</div>
				</div>			  					
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
				<a href="index.html"><img src="<?php echo base_url() . 'public/img/logo.png'?>" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?php echo base_url().'home'?>">Beranda</a></li>
						<li><a href="<?php echo base_url().'home'?>">Tentang Kami</a></li>
						<li class="menu-has-children"><a href="<?php echo base_url().'home'?>">Layanan</a>
						<ul>
							<li><a href="https://firnapay.com/">Firna Pay</a><li>
							<li><a href="https://firnastore.com/product">Firna Store</a><li>
							<li><a href="https://firnafood.com/">Firna Food & Beverage</a><li>
							<li><a href="#">Firna Hydro Water</a><li>
						</ul>
						</li>
						<!--<li><a href="feedback.html">Timbal Balik</a></li>-->
						<li><a href="<?php echo base_url().'karir'?>">Firna Karir</a></li>
						<li><a href="<?php echo base_url().'gallery'?>">Gallery</a></li> 
						<li><a href="<?php echo base_url().'blog'?>">Blog</a></li>					          
						<!--<li><a href="elements.html">Elements</a></li>-->			          
						<li><a href="<?php echo base_url().'kontak'?>">Kontak Kami</a></li>
					</ul>
				</nav><!-- #nav-menu-container -->		    		
			</div>
		</div>
	</header><!-- #header -->

	<?php
		error_reporting(0);
		function limit_words($string, $word_limit){
			$words = explode(" ",$string);
			return implode(" ",array_splice($words,0,$word_limit));
		}
	?>

	<!-- start banner Area -->
	<section class="banner-area relative blog-home-banner" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content blog-header-content col-lg-12">
					<h1 class="text-white">
						BLOG
						<br />
						CV FIRNA INDONESIA				
					</h1>	
					<p class="text-white">
						Kumpulan tips dan trik serta berita terbaru saeputar Firna Official.
					</p>
					<a href="<?php echo base_url().'blog'?>" class="primary-btn">Selengkapnya</a>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->			  

	<!-- Start top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
		<div class="container">
			<div class="row">		
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('public/img/blog/cat-widget1.jpg');?>" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Firna Pay</h4>
									<span></span>								        
									<p>PPOB keagenan & Online shop Aksesoris</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('public/img/blog/cat-widget3.jpg');?>" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Firna Food</h4>
									<span></span>								        
									<p>Ayam Boyolali & Voo Cus Youghurt</p>
								</div>
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single-cat-widget">
						<div class="content relative">
							<div class="overlay overlay-bg"></div>
							<a href="#" target="_blank">
								<div class="thumb">
									<img class="content-image img-fluid d-block mx-auto" src="<?php echo base_url('public/img/blog/cat-widget2.jpg');?>" alt="">
								</div>
								<div class="content-details">
									<h4 class="content-title mx-auto text-uppercase">Firna Hydro Water</h4>
									<span></span>
									<p>Alkaline Water kemasan & keagenan resmi</p>
								</div>
							</a>
						</div>
					</div>
				</div>												
			</div>
		</div>	
	</section>
	<!-- End top-category-widget Area -->
	
	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<?php
						$tulisan = $this->db->query("SELECT * FROM tbl_tulisan;");
						foreach ($tulisan->result_array() as $o) :
							$post_id=$o['tulisan_id'];
							$post_judul=$o['tulisan_judul'];
							$post_isi=$o['tulisan_isi'];
							$post_author=$o['tulisan_author'];
							$post_image=$o['tulisan_gambar'];
							$post_tglpost=$o['tulisan_tanggal'];
							$post_slug=$o['tulisan_slug'];
							$post_views=$o['tulisan_views'];
							$post_rating=$o['tulisan_rating'];
					?>
					<div class="single-post row">
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<li><a href="#">Teknologi,</a></li>
								<li><a href="#">Tips & Trick,</a></li>
								<li><a href="#">Kuliner,</a></li>
								<li><a href="#">Review Produk</a></li>
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="<?php echo base_url().'artikel/'.$post_slug;?>"><?php echo $post_author;?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="<?php echo base_url().'artikel/'.$post_slug;?>"><?php echo $post_tglpost;?></a> <span class="lnr lnr-calendar-full"></span></p>
								<!--<p class="view col-lg-12 col-md-12 col-6"><a href="<?php echo base_url().'artikel/'.$post_slug;?>"><?php echo $post_views; ?></a> <span class="lnr lnr-eye"></span></p>
								<p class="comments col-lg-12 col-md-12 col-6"><a href="<?php echo base_url().'artikel/'.$post_slug;?>"><?php echo $post_rating; ?></a> <span class="lnr lnr-star"></span></p>-->						
							</div>
						</div>
						<div class="col-lg-9 col-md-9 ">
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="">
							</div>
							<a class="posts-title" href="<?php echo base_url().'artikel/'.$post_slug;?>"><h3><?php echo $post_judul;?></h3></a>
							<p class="excert">
								<?php echo limit_words($post_isi,20).'...';?>
							</p>
							<a href="<?php echo base_url().'artikel/'.$post_slug;?>" class="primary-btn">Selengkapnya</a>
						</div>
					</div>
					<?php endforeach;?>												
					<nav class="blog-pagination justify-content-center d-flex">
						<ul class="pagination">
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Previous">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-left"></span>
									</span>
								</a>
							</li>
							<li class="page-item"><a href="#" class="page-link">01</a></li>
							<li class="page-item active"><a href="#" class="page-link">02</a></li>
							<li class="page-item"><a href="#" class="page-link">03</a></li>
							<li class="page-item"><a href="#" class="page-link">04</a></li>
							<li class="page-item"><a href="#" class="page-link">09</a></li>
							<li class="page-item">
								<a href="#" class="page-link" aria-label="Next">
									<span aria-hidden="true">
										<span class="lnr lnr-chevron-right"></span>
									</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="#">
								<input placeholder="Search Posts" name="search" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Posts'" >
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<div class="single-sidebar-widget user-info-widget">
							<img src="<?php echo base_url('public/img/blog/logo.png');?>" alt="">
							<a href="<?php echo base_url().'about'?>"><h4>Mr.Visca</h4></a>
							<p>
								IT Support Firna.co.id
							</p>
							<ul class="social-links">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-github"></i></a></li>
								<li><a href="#"><i class="fa fa-behance"></i></a></li>
							</ul>
							<p>
							Menulis dan berbagi informasi yang bermanfaat adalah sebuah hobi sekaligus ladang amal bagi ku. tidak hanya sekedar menulis, tapi berbagi ilmu yang bermanfaat bagi banyak orang
							</p>
						</div>
						<div class="single-sidebar-widget popular-post-widget">
							<h4 class="popular-title">Populer Pos</h4>
							<div class="popular-post-list">
								<?php
									$tulisan = $this->db->query("SELECT * FROM tbl_tulisan;");
									foreach ($tulisan->result_array() as $o) :
										$post_id=$o['tulisan_id'];
										$post_judul=$o['tulisan_judul'];
										$post_isi=$o['tulisan_isi'];
										$post_author=$o['tulisan_author'];
										$post_image=$o['tulisan_gambar'];
										$post_tglpost=$o['tulisan_tanggal'];
										$post_slug=$o['tulisan_slug'];
										$post_views=$o['tulisan_views'];
										$post_rating=$o['tulisan_rating'];
								?>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="<?php echo base_url().'assets/images/'.$post_image;?>" style="width:100px;height:60px;" alt="">
									</div>
									<div class="details">
										<a href="<?php echo base_url().'artikel/'.$post_slug;?>"><h6><?php echo $post_judul;?></h6></a>
										<p><?php echo $post_tglpost;?></p>
									</div>
								</div>
								<?php endforeach;?>															
							</div>
						</div>
						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="<?php echo base_url('assets/public/img/blog/ads-banner.jpg');?>" alt=""></a>
						</div>	
						<div class="single-sidebar-widget newsletter-widget">
							<h4 class="newsletter-title">Newsletter</h4>
							<p>
								Dapatkan Update Tips, trick dan berita terbaru seputar kami secara gratis
								dengan memasukan email anda dan klik subscribe.
							</p>
							<div class="form-group d-flex flex-row">
								<div class="col-autos">
									<div class="input-group">
									<div class="input-group-prepend">
										<div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i>
									</div>
									</div>
									<input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Masukan Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email'" >
									</div>
								</div>
								<a href="#" class="bbtns">Subcribe</a>
							</div>	
							<p class="text-bottom">
								Kamu dapat berhenti berlangganan kapan pun
							</p>								
						</div>								
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->
	
<?php
	include 'footer.php';
?>