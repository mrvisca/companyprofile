<?php
	include 'header.php';
?>
<?php
    error_reporting(0);
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
?>
<!-- start banner Area -->
<section class="banner-area" id="beranda">
	<div class="container">
		<div class="row fullscreen d-flex align-items-center">
			<div class="banner-content col-lg-7 col-md-6 justify-content-center ">
				<?php
					$banner = $this->db->query("SELECT * FROM tbbanner;");
					foreach ($banner->result_array() as $b) :
						$id=$b['id'];
						$judul=$b['judul'];
						$subjudul=$b['subjudul'];
						$deskripsi=$b['deskripsi'];
						$button_name=$b['button_name'];
				?>
				<h6 class="text-uppercase"><?php echo $subjudul;?></h6>
				<h1>
					<?php echo $judul;?>			
				</h1>
				<p class="text-white">
					<?php echo $deskripsi;?>
				</p>
				<a href="#tentang" class="primary-btn header-btn text-uppercase mt-10"><?php echo $button_name;?></a>
			</div>	
			<div class="banner-img col-lg-5 col-md-6 align-self-end">
				<img class="img-fluid-banner" src="<?php echo base_url() . 'public/img/banner-img.png'?>" alt="">
			</div>
			<?php endforeach;?>											
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start service Area -->
<section class="service-area section-gap" id="layanan">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-50 header-text text-center">
				<h1 class="mb-10">LINGKUP BISNIS</h1>
				<p>
					Firna Indonesia merupakan perusahaan penyedia konsep bisnis PPOB Keagenan, FNB, dan Keagenan Firna Hydro Water.
				</p>
			</div>
		</div>						
		<div class="row">
			<?php
				$service = $this->db->query("SELECT * FROM tbservice LIMIT 4");
				foreach ($service->result_array() as $s) :
					$id=$s['id'];
					$judul=$s['judul'];
					$deskripsi=$s['deskripsi'];
					$gambar=$s['gambar'];
			?>
			<div class="col-lg-3 col-md-6">
				<div class="single-service">
					<div class="thumb">
						<img src="<?php echo base_url().'assets/upload/gambar/'.$gambar;?>" alt="">									
					</div>
					<h4><?php echo $judul;?></h4>
					<p>
						<?php echo limit_words($deskripsi,20).'...';?>
					</p>
				</div>
			</div>
			<?php endforeach;?>																		
		</div>
	</div>	
</section>
<!-- End service Area -->

<!-- Start home-about Area -->
<section class="home-about-area section-gap relative" id="tentang">			
	<div class="container">
		<div class="row align-items-center justify-content-start">
			<div class="col-lg-6 no-padding home-about-right">
				<?php
					$profil = $this->db->query("SELECT * FROM tbabout LIMIT 1");
					foreach ($profil->result_array() as $p) :
						$id=$p['id'];
						$judul=$p['judul'];
						$deskripsi=$p['deskripsi'];
						$judulkonten=$p['judulkonten'];
						$deskripsikonten=$p['deskripsikonten'];
						$ikon=$p['ikon'];
						$judulkonten2=$p['judulkonten2'];
						$deskripsikonten2=$p['deskripsikonten2'];
						$ikon2=$p['ikon2'];
				?>
				<h1>
					<?php echo $judul;?>
				</h1>
				<p>
					<?php echo $deskripsi;?>
				</p>
				<div class="row no-gutters">
					<div class="single-services col">
						<span class="<?php echo $ikon;?>"></span>
						<a href="#">
							<h4><?php echo $judulkonten;?></h4>
						</a>
						<p>
							<?php echo $deskripsikonten;?>
						</p>
					</div>
					<div class="single-services col">
						<span class="<?php echo $ikon2;?>"></span>
						<a href="#">
							<h4><?php echo $judulkonten2;?></h4>
						</a>
						<p>
							<?php echo $deskripsikonten2;?>
						</p>
					</div>								
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>	
</section>
<!-- End home-about Area -->

<!-- Start faq Area -->
<section class="faq-area section-gap" id="visimisi">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12 pb-50 header-text text-center">
				<h1 class="mb-10">Profil Firna Indonesia</h1>
				<p>
					Visi, Misi & Profil Singkat CV.FIRNA INDONESIA
				</p>
			</div>
		</div>			
		<div class="row faq-contents justify-content-center align-items-center">
			<div class="col-lg-8 faq-left">
				<div class="mn-accordion" id="accordion">
					
					<?php
						$visimisi = $this->db->query("SELECT * FROM tbvisi LIMIT 1");
						foreach ($visimisi->result_array() as $v) :
							$id=$v['id'];
							$judul=$v['judul'];
							$visi=$v['visi'];
							$misi=$v['misi'];
							$profil=$v['profil'];
							$fitur=$v['fitur'];
							$presentase=$v['presentase'];
							$fitur2=$v['fitur2'];
							$presentase2=$v['presentase2'];
							$fitur3=$v['fitur3'];
							$presentase3=$v['presentase3'];
							$fitur4=$v['fitur4'];
							$presentase4=$v['presentase4'];
					?>

					<!--Accordion item-->
					<div class="accordion-item">
						<div class="accordion-heading">
							<h3>Visi</h3>
							<div class="icon">
								<i class="lnr lnr-chevron-right"></i>
							</div>
						</div>
						<div class="accordion-content">
							<p><?php echo $visi;?></p>
						</div>
					</div>
					<!--Accordion item-->

					<!--Accordion item-->
					<div class="accordion-item">
						<div class="accordion-heading">
							<h3>Misi</h3>
							<div class="icon">
								<i class="lnr lnr-chevron-right"></i>
							</div>
						</div>
						<div class="accordion-content">
							<p><?php echo $misi;?></p>
						</div>
					</div>
					<!--Accordion item-->

					<!--Accordion item-->
					<div class="accordion-item">
						<div class="accordion-heading">
							<h3>Profil</h3>
							<div class="icon">
								<i class="lnr lnr-chevron-right"></i>
							</div>
						</div>
						<div class="accordion-content">
							<p><?php echo $profil;?></p>
						</div>
					</div>
					<!--Accordion item-->

				</div>
			</div>						
		</div>
		<div class="row pt-50 skill-area justify-content-center" id="skills">
			<div class="col-lg-3 single-skill mx-auto d-block">
				<div class="skills skill-1" data-percent="<?php echo $presentase;?>"></div>
				<h6 class="text-uppercase"><?php echo $fitur;?></h6>							
			</div> 
			<div class="col-lg-3 single-skill mx-auto d-block">
				<div class="skills skill-2" data-percent="<?php echo $presentase2;?>"></div>	
				<h6 class="text-uppercase"><?php echo $fitur2;?></h6>						      		
			</div>	
			<div class="col-lg-3 single-skill mx-auto d-block">
				<div class="skills skill-3" data-percent="<?php echo $presentase3;?>"></div>
				<h6 class="text-uppercase"><?php echo $fitur3;?></h6>						     			
			</div>
			<div class="col-lg-3 single-skill mx-auto d-block">
				<div class="skills skill-4" data-percent="<?php echo $presentase4;?>"></div>
				<h6 class="text-uppercase"><?php echo $fitur4;?></h6>						     			
			</div>
		</div>
		<?php endforeach;?>
	</div>	
</section>
<!-- End faq Area -->

<!-- Start testomial Area -->
<section class="testomial-area section-gap" id="testimoni">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-7">
				<div class="title text-center">
					<h1 class="mb-10 text-white">TESTIMONI</h1>
					<p class="text-white">Pendapat mereka tentang FIRNA INDONESIA?</p>
				</div>
			</div>
		</div>						
		<div class="row">
			<div class="active-testimonial-carusel">
				<?php
						$testimoni = $this->db->query("SELECT * FROM tbtestimoni;");
						foreach ($testimoni->result_array() as $t) :
							$id=$t['id'];
							$nama=$t['nama'];
							$pendapat=$t['pendapat'];
							$status_member=$t['status_member'];
							$photo=$t['photo'];
				?>
				<div class="single-testimonial item">
					<img class="mx-auto" src="<?php echo base_url().'assets/upload/gambar/'.$photo;?>" alt="">
					<p class="desc">
						<?php echo $pendapat;?>
					</p>
					<h5><?php echo $nama;?></h5>
					<p>
						<?php echo $status_member;?>
					</p>
				</div>
				<?php endforeach;?>														
			</div>
		</div>
	</div>	
</section>
<!-- End testomial Area -->	

<!-- Start work-process Area -->
<section class="work-process-area pt-120" id="tutorial">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-60 col-lg-7">
				<div class="title text-center">
					<h1 class="mb-10">Cara Memulai Bisnis Firna</h1>
					<p>Berikut tahapan memulai bisnis anda dalam lingkup bisnis Firna Indonesia</p>
				</div>
			</div>
		</div>	
		<div class="total-work-process d-flex flex-wrap justify-content-around align-items-center">
			<div class="single-work-process">
				<div class="work-icon-box">
					<span class="lnr lnr-user"></span>
				</div>
				<h4 class="caption">Calon Member</h4>
			</div>
			<div class="work-arrow">
				<img src="<?php echo base_url() . 'public/img/arrow.png'?>" alt="">
			</div>
			<div class="single-work-process">
				<div class="work-icon-box">
					<span class="lnr lnr-smartphone"></span>
				</div>
				<h4 class="caption">Firna Pay</h4>
			</div>
			<div class="work-arrow">
				<img src="<?php echo base_url() . 'public/img/arrow.png'?>" alt="">
			</div>
			<div class="single-work-process">
				<div class="work-icon-box">
					<span class="lnr lnr-location"></span>
				</div>
				<h4 class="caption">Upgrade Member</h4>
			</div>
			<div class="work-arrow">
				<img src="<?php echo base_url() . 'public/img/arrow.png'?>" alt="">
			</div>
			<div class="single-work-process">
				<div class="work-icon-box">
					<span class="lnr lnr-gift"></span>
				</div>
				<h4 class="caption">Penawaran Spesial</h4>
			</div>											
			<div class="row">
				<div class="col"></div>
			</div>
		</div>
	</div>
</section>
<!-- End work-process Area -->

<!-- Start discount-section Area -->
<section class="discount-section-area relative section-gap" id="upgrade">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row align-items-center justify-content-between no-gutters">
			<div class="col-lg-6 discount-left">
				<h1 class="text-white"> Upgrade akun mu sekarang & dapatkan benefit berlimpah</h1>
				<p class="text-white">
					Isi form di sebelah untuk upgrade akun dengan penawaran spesial terbatas...
				</p>
				<a href="#" class="header-btn">Upgrade Sekarang Sekarang</a>
			</div>
			<div class="col-lg-5 discount-right">
				<h4 class="text-white">Upgrade Akunmu Sekarang !!!</h4>
				<form class="booking-form" id="myForm" action="<?php echo base_url().'home/upgrade_akun'?>" method="post">
					<div class="row">
						<div class="col-lg-12 d-flex flex-column">
							<input name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" class="form-control mt-20" required="" type="text">
						</div>
						<div class="col-lg-6 d-flex flex-column">
							<input name="telepon" placeholder="No Telepon Aktif" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No Telepon Aktif'" class="form-control mt-20" required="" type="text">
						</div>
						<div class="col-lg-6 d-flex flex-column">
							<input name="refferal" placeholder="Alamat Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat Email'" class="form-control mt-20" required="" type="email">
						</div>
						<div class="col-lg-12 d-flex flex-column">
							<select name="paket" class="form-control mt-20" required="">
								<option disabled selected> --- Pilih Paket Upgrade --- </option>
								<?php
								$no=0;
								foreach ($paket->result_array() as $pk) :
									$no++;
									$id=$pk['id'];
									$paket=$pk['paket'];    
								?>
								<option value="<?php echo $paket;?>"><?php echo $paket;?></option>
								<?php endforeach;?>
							</select>
						</div>
						<div class="col-lg-12 flex-column">
							<textarea rows="5" class="form-control mt-20" name="Pesan" placeholder="Isi Pesan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Isi Pesan'" required=""></textarea>
						</div>

						<div class="col-lg-12 d-flex justify-content-end send-btn">
							<button class="genric-btn primary mt-20 text-uppercase ">Daftar</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>	
</section>
<!-- End discount-section Area -->

<!-- Start gallery-section Area -->
<section class="work-process-area section-gap" id="gallery">
	<div class="container gallery-container">
		<h1>Gallery Kegiatan Firna</h1>
		<p class="page-description text-center">Gallery Kegiatan Firna Indonesia</p>
		<div class="tz-gallery">
			<div class="row">
				<?php
					$gallery = $this->db->query("SELECT * FROM tbgallery ORDER BY id LIMIT 6");
					foreach ($gallery->result_array() as $g) :
						$id=$g['id'];
						$foto=$g['foto'];
						$alt=$g['alt'];
						$kategori=$g['kategori'];
						$tanggal= $g['tanggal'];
				?>
				<div class="col-sm-6 col-md-4">
					<a class="lightbox" href="<?php echo base_url().'assets/upload/gambar/'.$foto;?>">
						<img src="<?php echo base_url().'assets/upload/gambar/'.$foto;?>" alt="<?php echo $alt;?>">
					</a>
				</div>
				<?php endforeach;?>
			</div>
		</div>
	</div>
</div>	
</section>
<!-- End gallery-section Area -->			

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="menu-content pb-70 col-lg-8">
				<div class="title text-center">
					<h1 class="mb-10">Firna Blog And News</h1>
					<p>Kumpulan tips dan trik serta berita terbaru saeputar Firna Official.</p>
				</div>
			</div>
		</div>					
		<div class="row">
			<?php
				$post = $this->db->query("SELECT * FROM tbl_tulisan LIMIT 4");
				foreach ($post->result_array() as $o) :
					$post_id=$o['tulisan_id'];
					$post_judul=$o['tulisan_judul'];
					$post_isi=$o['tulisan_isi'];
					$post_author=$o['tulisan_author'];
					$post_image=$o['tulisan_gambar'];
					$post_tglpost=$o['tulisan_tanggal'];
					$post_slug=$o['tulisan_slug'];
			?>
			<div class="col-lg-3 col-md-6 single-blog">
				<div class="thumb">
					<img class="img-fluid" src="<?php echo base_url().'assets/images/'.$post_image;?>" alt="">								
				</div>
				<p class="meta"><?php echo $post_tglpost;?>  |  By <a href="#"><?php echo $post_author;?></a></p>
				<a href="<?php echo base_url().'artikel/'.$post_slug;?>">
					<h5><?php echo $post_judul;?></h5>
				</a>
				<p>
					<?php echo limit_words($post_isi,20).'...';?>
				</p>
				<a href="<?php echo base_url().'artikel/'.$post_slug;?>" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
			</div>
			<?php endforeach;?>							
		</div>
	</div>	
</section>
<!-- End blog Area -->

<!-- Start brands Area -->
<section class="brands-area pb-120">
	<div class="container no-padding">
		<div class="brand-wrap">
			<div class="row align-items-center active-brand-carusel justify-content-start no-gutters">
				<div class="col single-brand">
					<a href="http://firnapay.com"><img class="mx-auto" src="<?php echo base_url() . 'public/img/l1.png'?>" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="https://firnastore.com"><img class="mx-auto" src="<?php echo base_url() . 'public/img/l2.png'?>" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="http://firnafood.com"><img class="mx-auto" src="<?php echo base_url() . 'public/img/l3.png'?>" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="<?php echo base_url() . 'public/img/l4.png'?>" alt=""></a>
				</div>
				<div class="col single-brand">
					<a href="#"><img class="mx-auto" src="<?php echo base_url() . 'public/img/l5.png'?>" alt=""></a>
				</div>								
			</div>																			
		</div>
	</div>	
</section>
<!-- End brands Area -->			
<?php
	include 'footer.php';
?>