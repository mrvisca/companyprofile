<?php
class Banner extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_banner');
	}

	function index(){
		$x['data']=$this->M_banner->get_all_banner();
		$this->load->view('admin/v_banner',$x);
	}
	function add_banner(){
		$this->load->view('admin/v_add_banner');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_banner->get_banner_by_id($id);
		$this->load->view('admin/v_edit_banner',$x);
	}
	function simpan_banner(){

		$judul=strip_tags($this->input->post('judul'));
		$subjudul=$this->input->post('subjudul');
		$deskripsi=$this->input->post('deskripsi');
		$button_name=$this->input->post('button_name');
		$this->M_banner->simpan_banner($judul,$subjudul,$deskripsi,$button_name);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/banner');
				
	}
	
	function update_banner(){
				
		$id=$this->input->post('id');
		$judul=strip_tags($this->input->post('judul'));
		$subjudul=$this->input->post('subjudul');
		$deskripsi=$this->input->post('deskripsi');
		$button_name=$this->input->post('button_name');
		$this->M_banner->update_banner($id,$judul,$subjudul,$deskripsi,$button_name);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/banner');

	}

	function hapus_banner(){
		$id=$this->input->post('id');
		$this->M_banner->hapus_banner($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/banner');
	}

}