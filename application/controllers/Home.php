<?php 
class Home extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_tulisan');
		$this->load->model('M_pengunjung');
		$this->load->model('M_register');
		$this->load->model('M_paket');
        $this->M_pengunjung->count_visitor();
	}
	
	function index(){
		$x['post']=$this->M_tulisan->get_post_home();
		$x['paket']=$this->M_paket->get_all_paket();
		$this->load->view('v_home',$x);
	}

	function upgrade_akun(){
		$nama=strip_tags($this->input->post('nama'));
		$telepon=$this->input->post('telepon');
		$refferal=$this->input->post('refferal');
		$paket=$this->input->post('paket');
		$pesan=$this->input->post('pesan');
		$tanggal=strtotime(date('Y-m-d h:i:s a'));
		$this->M_register->simpan_register($nama,$telepon,$refferal,$paket,$pesan,$tanggal);
		echo $this->session->set_flashdata('msg','success');
		redirect('v_home');		
	}
}