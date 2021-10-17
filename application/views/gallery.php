<?php
    include 'header.php';
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
	<div class="overlay overlay-bg"></div>
	<div class="container">				
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Gallery Kegiatan				
				</h1>	
				<p class="text-white link-nav"><a href="home">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="about"> Gallery</a></p>
			</div>	
		</div>
	</div>
</section>
<!-- End banner Area -->

<div class="container gallery-container">
    <br />
    <h1>Gallery</h1>
    <p class="page-description text-center">Gallery Kegiatan Firna Group</p>
    <div class="tz-gallery">
        <div class="row">
            <?php
                $gallery = $this->db->query("SELECT * FROM tbgallery;");
                foreach ($gallery->result_array() as $g) :
                    $id=$g['id'];
                    $foto=$g['foto'];
                    $alt=$g['alt'];
                    $kategori=$g['kategori'];
                    $tanggal=date('d-m-Y H:i:s', strtotime($g['tanggal']));
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

<?php
    include 'footer.php';
?>