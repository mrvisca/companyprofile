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
  <title>Firna.co.id | Visi Misi</title>
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
        Visi Misi
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
        <li><a href="#">Visi Misi</a></li>
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
                <!--<a class="btn btn-success btn-flat" href="<?php echo base_url().'admin/visi/add_visi'?>"><span class="fa fa-plus"></span> Tambah Visi Misi</a>-->
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="example1" class="table table-striped" style="font-size:13px;">
                  <thead>
                  <tr>
                      <th>Judul</th>
                      <th>Visi</th>
                      <th>Misi</th>
                      <th>Profil</th> 
                      <th style="text-align:right;">Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=0;
                      foreach ($data->result_array() as $v) :
                        $no++;
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
                    <tr>
                      <td><?php echo $judul;?></td>
                      <td><?php echo $visi;?></td>
                      <td><?php echo $misi;?></td>
                      <td><?php echo $profil;?></td>
                      <td style="text-align:right;">
                        <a class="btn" href="<?php echo base_url().'admin/visi/get_edit/'.$id;?>"><span class="fa fa-pencil"></span></a>
                        <!--<a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>"><span class="fa fa-trash"></span></a>-->
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
	
<?php foreach ($data->result_array() as $v) :
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

<!--Modal Hapus Pengguna-->
<div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                <h4 class="modal-title" id="myModalLabel">Hapus Visi Misi</h4>
            </div>
            <form class="form-horizontal" action="<?php echo base_url().'admin/visi/hapus_visi'?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">       
              <input type="hidden" name="id" value="<?php echo $id;?>"/> 
              <input type="hidden" name="judul" value="<?php echo $judul;?>"/>
              <input type="hidden" name="visi" value="<?php echo $visi;?>"/>
              <input type="hidden" name="misi" value="<?php echo $misi;?>"/>
              <input type="hidden" name="profil" value="<?php echo $profil;?>"/>
              <input type="hidden" name="fitur" value="<?php echo $fitur;?>"/>
              <input type="hidden" name="presentase" value="<?php echo $presentase;?>"/>
              <input type="hidden" name="fitur2" value="<?php echo $fitur2;?>"/>
              <input type="hidden" name="presentase2" value="<?php echo $presentase2;?>"/>
              <input type="hidden" name="fitur3" value="<?php echo $fitur3;?>"/>
              <input type="hidden" name="presentase3" value="<?php echo $presentase3;?>"/>
              <input type="hidden" name="fitur4" value="<?php echo $fitur4;?>"/>
              <input type="hidden" name="presentase4" value="<?php echo $presentase4;?>"/>
              <p>Apakah Anda yakin mau menghapus Visi Misi <b><?php echo $judul;?></b> ?</p>         
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
                    text: "Visi Misi Berhasil disimpan ke database.",
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
                    text: "Visi Misi berhasil di update",
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
                    text: "Visi Misi Berhasil dihapus.",
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
