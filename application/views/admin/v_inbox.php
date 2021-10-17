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
  <title>Firna.co.id | Pesan Masuk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.css'?>">
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.css'?>">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datepicker/datepicker3.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
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
        Pesan Masuk
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li class="active">Pesan Masuk</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box">
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-striped" style="font-size:12px;">
                  <thead>
                    <tr>
                        <th style="width:70px;">#Tanggal</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Subyek</th>
                        <th>Pesan</th>
                        <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                <tbody>
                <?php
                  $no=0;
                  foreach ($data->result_array() as $i) :
                    $no++;
                    $inbox_id=$i['inbox_id'];
                    $inbox_nama=$i['inbox_nama'];
                    $inbox_email=$i['inbox_email'];
                    $inbox_subyek=$i['inbox_subyek'];
                    $inbox_msg=$i['inbox_pesan'];
                    $tanggal=$i['tanggal']; 
                ?>
                <tr>
                  <td><?php echo $tanggal;?></td>
                  <td><?php echo $inbox_nama;?></td>
                  <td><?php echo $inbox_email;?></td>
                  <td><?php echo $inbox_subyek;?></td>
                  <td><?php echo $inbox_msg;?></td>
                  <td style="text-align:right;">
                    <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $inbox_id;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				        <?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
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
		
<?php foreach ($data->result_array() as $i) :
  $inbox_id=$i['inbox_id'];
  $inbox_nama=$i['inbox_nama'];
  $inbox_email=$i['inbox_email'];
  $inbox_subyek=$i['inbox_subyek'];
  $inbox_msg=$i['inbox_pesan'];
  $tanggal=$i['tanggal'];
?>
<!--Modal Hapus Pengguna-->
<div class="modal fade" id="ModalHapus<?php echo $inbox_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Agenda</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/inbox/hapus_inbox'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">       
              <input type="hidden" name="kode" value="<?php echo $inbox_id;?>"/> 
              <p>Apakah Anda yakin mau menghapus data ini?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php endforeach;?>
	
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assets/plugins/jQuery/jquery-2.2.3.min.js'?>"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assets/bootstrap/js/bootstrap.min.js'?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url().'assets/plugins/datatables/jquery.dataTables.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.min.js'?>"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url().'assets/plugins/slimScroll/jquery.slimscroll.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/datepicker/bootstrap-datepicker.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/timepicker/bootstrap-timepicker.min.js'?>"></script>
<script src="<?php echo base_url().'assets/plugins/daterangepicker/daterangepicker.js'?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assets/plugins/fastclick/fastclick.js'?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assets/dist/js/app.min.js'?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assets/dist/js/demo.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.js'?>"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });

    $('#datepicker').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('#datepicker2').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker3').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $('.datepicker4').datepicker({
      autoclose: true,
      format: 'yyyy-mm-dd'
    });
    $(".timepicker").timepicker({
      showInputs: true
    });

  });
</script>
<?php if($this->session->flashdata('msg')=='error'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Error',
                    text: "Password dan Ulangi Password yang Anda masukan tidak sama.",
                    showHideTransition: 'slide',
                    icon: 'error',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#FF4859'
                });
        </script>
    
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Agenda berhasil di update",
                    showHideTransition: 'slide',
                    icon: 'info',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#00C9E6'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='success-hapus'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Pesan Berhasil dihapus.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php else:?>

    <?php endif;?>
</body>
</html>