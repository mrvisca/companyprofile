<!--Counter Inbox-->
<?php 
  $query=$this->db->query("SELECT * FROM tbl_inbox WHERE inbox_status='1'");
  $jum_pesan=$query->num_rows();
  $query1=$this->db->query("SELECT * FROM tbl_komentar WHERE komentar_status='0'");
  $jum_komentar=$query1->num_rows();
  $query=$this->db->query("SELECT * FROM tbcareer WHERE career_status='1'");
  $jum_career=$query->num_rows();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Firna.co.id | Edit Porfil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/iCheck/all.css'?>">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.css'?>">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/select2/select2.min.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">

  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php 
    $this->load->view('admin/v_header');
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">Menu Utama</li>
        <li class="active">
          <a href="<?php echo base_url().'admin/dashboard'?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-headphones"></i>
            <span>Pelayanan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/banner'?>"><i class="fa fa-bookmark"></i> Banner</a></li>
            <li><a href="<?php echo base_url().'admin/layanan'?>"><i class="fa fa-cogs"></i> Layanan</a></li>
            <li><a href="<?php echo base_url().'admin/profil'?>"><i class="fa fa-institution"></i> Tentang Kami</a></li>
            <li><a href="<?php echo base_url().'admin/visi'?>"><i class="fa fa-book"></i> Visi Misi</a></li>
            <li><a href="<?php echo base_url().'admin/gallery'?>"><i class="fa fa-image"></i> Gallery</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-group"></i>
            <span>Member</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/register'?>"><i class="fa fa-user"></i> Register</a></li>
            <li><a href="<?php echo base_url().'admin/karir'?>"><i class="fa fa-briefcase"></i> <span> Karir</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><?php echo $jum_career;?></small>
              </span></a>
            </li>
            <li><a href="<?php echo base_url().'admin/testimoni'?>"><i class="fa fa-smile-o"></i> Testimoni</a></li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/pengguna'?>">
            <i class="fa fa-users"></i> <span>Pengguna</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="<?php echo base_url().'admin/komentar'?>">
            <i class="fa fa-bold"></i>
            <span>Blog</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'admin/kategori'?>"><i class="fa fa-list-alt"></i> Kategori</a></li>
            <li><a href="<?php echo base_url().'admin/tulisan'?>"><i class="fa fa-pencil"></i> Tulisan</a></li>
            <li><a href="<?php echo base_url().'admin/komentar'?>"><i class="fa fa-comment"></i> <span> Komentar</span>
              <span class="pull-right-container">
                <small class="label pull-right bg-green"><?php echo $jum_komentar;?></small>
              </span></a>
            </li>
          </ul>
        </li>
        <li>
          <a href="<?php echo base_url().'admin/inbox'?>">
            <i class="fa fa-envelope"></i> <span>Inbox</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-green"><?php echo $jum_pesan;?></small>
            </span>
          </a>
        </li>
         <li>
          <a href="<?php echo base_url().'administrator/logout'?>">
            <i class="fa fa-sign-out"></i> <span>Sign Out</span>
            <span class="pull-right-container">
              <small class="label pull-right"></small>
            </span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Edit Profil
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="#">Profil</a></li>
        <li class="active">Edit Profil</li>
      </ol>
    </section>
    <?php 
      error_reporting(0);
      $b=$data->row_array();
    ?>
    <!-- Main content -->
    <section class="content">
      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Profil</h3>
        </div>
		    <form action="<?php echo base_url().'admin/profil/update_profil'?>" method="post" enctype="multipart/form-data">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <div class="col-md-10">
              <input type="hidden" name="id" value="<?php echo $b['id'];?>" required>
              <label>Judul</label>
              <input type="text" name="judul" class="form-control" value="<?php echo $b['judul'];?>"/>
            </div>
            <div class="col-md-10">
              <br/>
              <label>deskripsi</label>
              <textarea id="ckeditor" name="deskripsi"><?php echo $b['deskripsi'];?></textarea>
            </div>
            <div class="col-md-10">
              <br />
              <label>Judul Konten</label>
              <input type="text" name="judulkonten" class="form-control" value="<?php echo $b['judulkonten'];?>"/>
            </div>
            <div class="col-md-10">
              <br/>
              <label>deskripsi Konten</label>
              <textarea class="ckeditor" id="ckeditor" name="deskripsikonten"><?php echo $b['deskripsikonten'];?></textarea>
            </div>
            <div class="col-md-10">
              <br />
              <label>Ikon</label>
              <input type="text" name="ikon" class="form-control" value="<?php echo $b['ikon'];?>"/>
            </div>
            <div class="col-md-10">
              <br />
              <label>Judul Konten 2</label>
              <input type="text" name="judulkonten2" class="form-control" value="<?php echo $b['judulkonten2'];?>"/>
            </div>
            <div class="col-md-10">
              <br/>
              <label>deskripsi Konten</label>
              <textarea class="ckeditor" id="ckeditor" name="deskripsikonten2"><?php echo $b['deskripsikonten2'];?></textarea>
            </div>
            <div class="col-md-10">
              <br />
              <label>Ikon</label>
              <input type="text" name="ikon2" class="form-control" value="<?php echo $b['ikon2'];?>"/>
            </div>
            <!-- /.col -->
            <div class="col-md-10">
              <div class="form-group">
                <br />
                <button type="submit" class="btn btn-primary btn-flat pull-right"><span class="fa fa-pencil"></span> Update</button>
              <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.box-body -->
        </div>
      </div>
      <!-- /.box -->
		  </form>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <footer class="main-footer">
    <strong><center>&copy; <?= date('Y'); ?> <a href="http://firna.co.id">IT Support CV Firna Indonesia</a></strong>
    </center>
  </footer>

 
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- Select2 -->
<script src="<?php echo base_url().'assets/plugins/select2/select2.full.min.js'?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.date.extensions.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/input-mask/jquery.inputmask.extensions.js'?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url().'assets/plugins/colorpicker/bootstrap-colorpicker.min.js'?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url().'assets/plugins/iCheck/icheck.min.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
<!-- Page script -->

<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
	
    CKEDITOR.replace('ckeditor');
   
	
  });
</script>

<script>
  $(function () {
    //Initialize Select2 Elements
    $(".select2").select2();

    //Datemask dd/mm/yyyy
    $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
    //Datemask2 mm/dd/yyyy
    $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
    //Money Euro
    $("[data-mask]").inputmask();

    //Date range picker
    $('#reservation').daterangepicker();
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
    //Date range as a button
    $('#daterange-btn').daterangepicker(
        {
          ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
          },
          startDate: moment().subtract(29, 'days'),
          endDate: moment()
        },
        function (start, end) {
          $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
        }
    );

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass: 'iradio_minimal-blue'
    });
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass: 'iradio_minimal-red'
    });
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass: 'iradio_flat-green'
    });

    //Colorpicker
    $(".my-colorpicker1").colorpicker();
    //color picker with addon
    $(".my-colorpicker2").colorpicker();

    //Timepicker
    $(".timepicker").timepicker({
      showInputs: false
    });
  });
</script>
</body>
</html>
