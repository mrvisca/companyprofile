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
  <title>Firna.co.id | Testimoni</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/favicon.png'?>">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
  
	<?php 
    function limit_words($string, $word_limit){
      $words = explode(" ",$string);
      return implode(" ",array_splice($words,0,$word_limit));
    }          
  ?>
	
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
        Testimoni
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="#">Testimoni</a></li>
        <li class="active">Daftar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box">
              <div class="box-header">
                <a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/testimoni/add_testimoni'?>"><span class="fa fa-plus"></span> Tambah Testimoni</a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-striped" style="font-size:13px;">
                  <thead>
                  <tr>
                    <th>Nama</th>
                    <th>Pendapat</th>
                    <th>Status</th>
                    <th>Photo</th> 
                    <th style="text-align:right;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $t) :
                        $no++;
                        $id=$t['id'];
                        $nama=$t['nama'];
                        $pendapat=$t['pendapat'];
                        $status_member=$t['status_member'];
                        $photo=$t['photo']; 
                    ?>
                    <tr>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $pendapat;?></td>
                      <td><?php echo $status_member;?></td>
                      <td><img src="<?php echo base_url().'assets/upload/gambar/'.$photo;?>" style="width:90px;"></td>
                      <td style="text-align:right;">
                            <a class="btn" href="<?php echo base_url().'admin/testimoni/get_edit/'.$id;?>"><span class="fa fa-pencil"></span></a>
                            <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>
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

<?php foreach ($data->result_array() as $t) :
  $id=$t['id'];
  $nama=$t['nama'];
  $pendapat=$t['pendapat'];
  $status_member=$t['status_member'];
  $photo=$t['photo'];
?>

<!--Modal Hapus Pengguna-->
<div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Testimoni</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/testimoni/hapus_testimoni'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">       
              <input type="hidden" name="id" value="<?php echo $id;?>"/>
              <input type="hidden" name="nama" value="<?php echo $nama;?>"/>
              <input type="hidden" name="pendapat" value="<?php echo $pendapat;?>"/>
              <input type="hidden" name="status_member" value="<?php echo $status_member;?>"/> 
              <input type="hidden" value="<?php echo $photo;?>" name="photo">
              <p>Apakah Anda yakin mau menghapus Testimoni <b><?php echo $nama;?></b> ?</p>    
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
  });
</script>
    
    <?php if($this->session->flashdata('msg')=='success'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Success',
                    text: "Testimoni Berhasil disimpan ke database.",
                    showHideTransition: 'slide',
                    icon: 'success',
                    hideAfter: false,
                    position: 'bottom-right',
                    bgColor: '#7EC857'
                });
        </script>
    <?php elseif($this->session->flashdata('msg')=='info'):?>
        <script type="text/javascript">
                $.toast({
                    heading: 'Info',
                    text: "Testimoni berhasil di update",
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
                    text: "Testimoni Berhasil dihapus.",
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
