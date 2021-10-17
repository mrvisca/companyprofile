<?php
class Register extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_register');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_register->get_all_register();
		$this->load->view('admin/v_register',$x);
	}
	function add_register(){
		$this->load->view('admin/v_add_register');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_register->get_register_by_id($id);
		$this->load->view('admin/v_edit_register',$x);
	}

	function simpan_register(){
		$nama=strip_tags($this->input->post('nama'));
		$telepon=$this->input->post('telepon');
		$refferal=$this->input->post('refferal');
		$paket=$this->input->post('paket');
		$pesan=$this->input->post('pesan');
		$tanggal=strtotime(date('Y-m-d h:i:s a'));
		$this->M_register->simpan_register($nama,$telepon,$refferal,$paket,$pesan,$tanggal);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/register');		
	}
	
	function update_register(){

		$id=$this->input->post('id');
		$nama=strip_tags($this->input->post('nama'));
		$telepon=$this->input->post('telepon');
		$refferal=$this->input->post('refferal');
		$paket=$this->input->post('paket');
		$pesan=$this->input->post('pesan');
		$tanggal=strtotime(date('Y-m-d h:i:s a'));
		$this->M_register->update_register($id,$nama,$telepon,$refferal,$paket,$pesan,$tanggal);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/register');

	}

	function hapus_register(){

		$id=$this->input->post('id');
		$this->M_register->hapus_register($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/register');
		
	}

}