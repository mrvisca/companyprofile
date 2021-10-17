<?php
error_reporting(0);
$b = $data->row_array();
$url = base_url() . 'artikel/' . $b['tulisan_slug'];
$img = base_url() . 'assets/images/' . $b['tulisan_gambar'];
$title = $b['tulisan_judul'];
$author = $b['tulisan_author'];
$date = $b['tanggal'];
$kategori = $b['tulisan_kategori_nama'];
$deskripsi = strip_tags($b['tulisan_isi']);
$isi = $b['tulisan_isi'];
$views = $b['tulisan_views'];
$rating = $b['tulisan_rating'];
?>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
<!-- Mobile Specific Meta -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="author" content="Bima Sakti Putra" />

<meta property="fb:app_id" content="966242223397117" />
<meta property="og:locale" content="id_id" />
<meta property="og:type" content="article" />
<meta property="og:title" content="<?php echo $title; ?>" />
<meta property="og:description" content="<?php echo $deskripsi; ?>" />
<meta property="og:url" content="<?php echo $url ?>" />
<meta property="og:site_name" content="firna.co.id" />

<meta property="article:section" content="<?php echo $author; ?>" />
<meta property="og:image" content="<?php echo $img ?>" />
<meta property="og:image:width" content="460" />
<meta property="og:image:height" content="440" />
<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">

<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!--
	CSS
	============================================= -->
	<link rel="stylesheet" href="<?php echo base_url('public/css/linearicons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/bootstrap.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/magnific-popup.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/nice-select.css');?>">							
	<link rel="stylesheet" href="<?php echo base_url('public/css/animate.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/owl.carousel.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('public/css/main.css');?>">
</head>
<body class="blog-page">	
	<header id="header" id="beranda">
		<div class="header-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
						<ul>
							<li><a href="https://web.facebook.com/firnapay/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/firnapay/"><i class="fa fa-instagram"></i></a></li>
							<li><a href="mailto:firnaofficial@gmail.com"><i class="fa fa-google"></i></a></li>
							<li><a href="https://api.whatsapp.com/send?phone=62881036772354"><i class="fa fa-whatsapp"></i></a></li>
						</ul>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
						<a href="https://api.whatsapp.com/send?phone=62881036772354">+62 881-0367-72354</a>
						<a href="mailto:firnaofficial@gmail.com">firnaofficial@gmail.com</a>				
					</div>
				</div>			  					
			</div>
		</div>
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
				<a href="<?php echo base_url().'home'?>"><img src="<?php echo base_url('public/img/logo.png');?>" alt="" title="" /></a>
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
	</header>
	<!-- #header -->

	<!-- start banner Area -->
	<section class="banner-area relative" id="home">	
		<div class="overlay overlay-bg"></div>
		<div class="container">				
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<h1 class="text-white">
						Halaman Detail Blog				
					</h1>	
					<p class="text-white link-nav"><a href="index.html">Beranda </a>  <span class="lnr lnr-arrow-right"></span><a href="blog-home.html">Blog </a> <span class="lnr lnr-arrow-right"></span> <a href="blog-single.html"> Halaman Blog Detail</a></p>
				</div>	
			</div>
		</div>
	</section>
	<!-- End banner Area -->					  
	
	<!-- Start post-content Area -->
	<section class="post-content-area single-post-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 posts-list">
					<div class="single-post row">
						<div class="col-lg-12">
							<div class="feature-img">
								<img class="img-fluid" src="<?php echo $img; ?>" alt="">
							</div>									
						</div>
						<div class="col-lg-3  col-md-3 meta-details">
							<ul class="tags">
								<?php foreach ($kat->result() as $i) : ?>
								<li><a href="<?php echo base_url() . 'blog/kategori/' . $i->kategori_id; ?>"><?php echo $i->kategori_nama; ?></a></li>
								<?php endforeach; ?>
							</ul>
							<div class="user-details row">
								<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><a href="#"><?php echo $author;?></a> <span class="lnr lnr-user"></span></p>
								<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php echo $date;?></a> <span class="lnr lnr-calendar-full"></span></p>
								<!--<p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo $views; ?></a> <span class="lnr lnr-eye"></span></p>
								<p class="comments col-lg-12 col-md-12 col-6"><a href="#"><?php echo $rating; ?></a> <span class="lnr lnr-star"></span></p>-->																			
							</div>
						</div>
						<div class="col-lg-9 col-md-9">
							<a class="posts-title" href="<?php echo $url; ?>"><h3><?php echo $title;?></h3></a>
							<p class="excert">
								<?php echo $isi;?>
							</p>
							<?php if ($rate->num_rows() > 0) : ?>
							<?php else : ?>
								<div class="alert alert-success">
									<strong>Apakah pendapat Anda tentang artikel ini?</strong><br /><br />
									<a class="btn btn-sm" href="<?php echo base_url() . 'blog/good/' . $b['tulisan_slug']; ?>" title="Good"><i class="fa fa-smile-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url() . 'blog/like/' . $b['tulisan_slug']; ?>" title="Like"><i class="fa fa-thumbs-o-up fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url() . 'blog/love/' . $b['tulisan_slug']; ?>" title="Love"><i class="fa fa-heart-o fa-2x"></i></a>
									<a class="btn btn-sm" href="<?php echo base_url() . 'blog/genius/' . $b['tulisan_slug']; ?>" title="Genius"><i class="fa fa-lightbulb-o fa-2x"></i></a>
								</div>
							<?php endif; ?>
							<h4>Share:</h4>
							<br />
							<div>
								<a class="popup2 btn btn-info btn-sm" href="https://plus.google.com/share?url=<?php echo $url; ?>" title="Bagikan ke Google+"><i class="fa fa-google-plus"></i> Google+</a>
								<a class="popup2 btn btn-info btn-sm" target="_parent" href="http://www.facebook.com/sharer.php?u=<?php echo $url; ?>" title="Bagikan ke Facebook"><i class="fa fa-facebook"></i> Facebook</a>
								<a class="popup2 btn btn-info btn-sm" href="http://twitter.com/share?url=<?php echo $b['tulisan_judul']; ?>&url=<?php echo $url; ?>&via=badoey" title="Bagikan ke Twitter"><i class="fa fa-twitter"></i> Twitter</a>
								<a class="popup2 btn btn-info btn-sm" href="javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());" title="Bagikan ke Pinterest"><i class="fa fa-pinterest"></i> Pinterest</a>
							</div>
						</div>
					</div>
					<!--<div class="navigation-area">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-12 nav-left flex-row d-flex justify-content-start align-items-center">
								<div class="thumb">
									<a href="<?php echo $url; ?>"><img class="img-fluid" src="<img src="<?php echo $img; ?>" alt=""></a>
								</div>
								<div class="arrow">
									<a href="<?php echo $url; ?>"><span class="lnr text-white lnr-arrow-left"></span></a>
								</div>
								<div class="detials">
									<p>Prev Post</p>
									<a href="<?php echo $url; ?>"><h4><?php echo $title;?></h4></a>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-12 nav-right flex-row d-flex justify-content-end align-items-center">
								<div class="detials">
									<p>Next Post</p>
									<a href="<?php echo $url; ?>"><h4><?php echo $title;?></h4></a>
								</div>
								<div class="arrow">
									<a href="<?php echo $url; ?>"><span class="lnr text-white lnr-arrow-right"></span></a>
								</div>
								<div class="thumb">
									<a href="<?php echo $url; ?>"><img class="img-fluid" src="<img src="<?php echo $img; ?>" alt=""></a>
								</div>										
							</div>									
						</div>
					</div>-->
					<!--<div class="comment-form">
						<h4>Tinggalkan Komen</h4>
						<form>
							<div class="form-group form-inline">
								<div class="form-group col-lg-6 col-md-12 name">
								<input type="text" class="form-control" id="name" placeholder="Enter Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Name'">
								</div>
								<div class="form-group col-lg-6 col-md-12 email">
								<input type="email" class="form-control" id="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
								</div>										
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" placeholder="Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Subject'">
							</div>
							<div class="form-group">
								<textarea class="form-control mb-10" rows="5" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
							</div>
							<a href="#" class="primary-btn text-uppercase">Post Comment</a>	
						</form>
					</div>-->
				</div>
				<div class="col-lg-4 sidebar-widgets">
					<div class="widget-wrap">
						<div class="single-sidebar-widget search-widget">
							<form class="search-form" action="<?php echo base_url() . 'blog/search' ?>" method="post">
								<input placeholder="Cari Post" name="xfilter" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Cari Post'" >
								<button type="submit" id="btncari"><i class="fa fa-search"></i></button>
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
							<h4 class="popular-title">Post Populer</h4>
							<div class="popular-post-list">
								<?php foreach ($populer->result() as $row) : ?>
								<div class="single-post-list d-flex flex-row align-items-center">
									<div class="thumb">
										<img class="img-fluid" src="<?php echo base_url() . 'assets/images/' . $row->tulisan_gambar; ?>" style="width:100px;height:60px;" alt="">
									</div>
									<div class="details">
										<a href="<?php echo base_url() . 'artikel/' . $row->tulisan_slug; ?>"><h6><?php echo $row->tulisan_judul; ?></h6></a>
										<p><?php echo $row->tanggal; ?></p>
									</div>
								</div>
								<?php endforeach; ?>															
							</div>
						</div>
						<div class="single-sidebar-widget ads-widget">
							<a href="#"><img class="img-fluid" src="<?php echo base_url('assets/public/img/blog/ads-banner.jpg');?>" alt=""></a>
						</div>
						<div class="single-sidebar-widget post-category-widget">
							<h4 class="category-title">Post Catgories</h4>
							<ul class="cat-list">
								<?php foreach ($kat->result() as $i) : ?>
								<li>
									<a href="<?php echo base_url() . 'blog/kategori/' . $i->kategori_id; ?>" class="d-flex justify-content-between">
										<p><?php echo $i->kategori_nama . ' (' . $i->jml . ')'; ?></p>
									</a>
								</li>
								<?php endforeach; ?>														
							</ul>
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
						<div class="single-sidebar-widget tag-cloud-widget">
							<h4 class="tagcloud-title">Tag Kategori</h4>
							<ul>
								<?php foreach ($kat->result() as $i) : ?>
									<li><a href="<?php echo base_url() . 'blog/kategori/' . $i->kategori_id; ?>"><?php echo $i->kategori_nama . ' (' . $i->jml . ')'; ?></a></li>
								<?php endforeach; ?>
							</ul>
						</div>								
					</div>
				</div>
			</div>
		</div>	
	</section>
	<!-- End post-content Area -->
	
	<!-- start footer Area -->		
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Sekilas tentang kami</h6>
							<p>
								Firna Indonesia merupakan perusahaan penyedia konsep bisnis di era modern yang serba murah dan otomatis. Firna Indonesia bergerak di bidang Multi Payment berbagai pembayaran, penjualan aksesoris gadget, dan akan segera merambah ke usaha kuliner. 
							</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Misi Kami</h6>
							<p>
								Membantu Masyarakat Membangun Bisnis yang Mudah dan menguntungkan. Menciptakan Teknologi yang Modern dan mampu bersaing di era Globalisasi saat ini. Tertarik bergabung?
							</p>							
						</div>
					</div>
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget">
							<h6>Lingkup Bisnis Firna</h6>								
							<div class="row">
								<div class="col">
									<ul>
										<li><a href="http://www.firnapay.com">Firna Pay</a></li>
										<li><a href="http://www.firnastore.com">Firna Store</a></li>
										<li><a href="http://www.firnafood.com">Firna Food and Beverage</a></li>
										<li><a href="#">Firna Alkaline Water</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>					
					<div class="col-lg-3  col-md-6 col-sm-6">
						<div class="single-footer-widget mail-chimp">
							<h6 class="mb-20">Intagram</h6>
							<ul class="instafeed d-flex flex-wrap">
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i1.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i1.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i2.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i2.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i3.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i3.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i4.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i4.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i5.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i5.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i6.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i6.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i7.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i7.jpg'?>" alt="">
									</a>
								</li>
								<li>
									<a class="lightbox" href="<?php echo base_url() . 'public/img/footer/i8.jpg'?>">
										<img src="<?php echo base_url() . 'public/img/i8.jpg'?>" alt="">
									</a>
								</li>
							</ul>
						</div>
					</div>						
				</div>
				<div class="row footer-bottom d-flex justify-content-between align-items-center">
					<p class="col-lg-8 col-sm-12 footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank"> IT Firna Indonesia</a>
					</p>
					<div class="col-lg-4 col-sm-12 footer-social">
					<a href="https://web.facebook.com/firnapay/?_rdc=1&_rdr"><i class="fa fa-facebook"></i></a>
						<a href="https://www.instagram.com/firnapay/"><i class="fa fa-instagram"></i></a>
						<a href="mailto:firnaofficial@gmail.com"><i class="fa fa-google"></i></a>
						<a href="https://api.whatsapp.com/send?phone=62881036772354"><i class="fa fa-whatsapp"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- End footer Area -->	
	<script src="public/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="public/js/vendor/bootstrap.min.js"></script>			
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="public/js/easing.min.js"></script>			
	<script src="public/js/hoverIntent.js"></script>
	<script src="public/js/superfish.min.js"></script>	
	<script src="public/js/mn-accordion.js"></script>
	<script src="public/js/jquery.ajaxchimp.min.js"></script>
	<script src="public/js/jquery.magnific-popup.min.js"></script>	
	<script src="public/js/owl.carousel.min.js"></script>						
	<script src="public/js/jquery.nice-select.min.js"></script>	
	<script src="public/js/jquery.circlechart.js"></script>								
	<script src="public/js/mail-script.js"></script>	
	<script src="public/js/main.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {
			$('#btncari').hide();
		});
	</script>
	<script>
		jQuery(document).ready(function($) {
			$('.popup2').click(function(event) {
				var width = 575,
					height = 400,
					left = ($(window).width() - width) / 2,
					top = ($(window).height() - height) / 2,
					url = this.href,
					opts = 'status=1' +
					',width=' + width +
					',height=' + height +
					',top=' + top +
					',left=' + left;
				window.open(url, 'facebook', opts);
				return false;
			});
		});
	</script>	
</body>
</html>