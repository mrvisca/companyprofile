<?php
class Profil extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_profil');
	}

	function index(){
		$x['data']=$this->M_profil->get_all_profil();
		$this->load->view('admin/v_profil',$x);
	}
	function add_profil(){
		$this->load->view('admin/v_add_profil');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_profil->get_profil_by_id($id);
		$this->load->view('admin/v_edit_profil',$x);
	}
	function simpan_profil(){

		$judul=strip_tags($this->input->post('judul'));
		$deskripsi=$this->input->post('deskripsi');
		$judulkonten=$this->input->post('judulkonten');
		$deskripsikonten=$this->input->post('deskripsikonten');
		$ikon=$this->input->post('ikon');
		$judulkonten2=$this->input->post('judulkonten2');
		$deskripsikonten2=$this->input->post('deskripsikonten2');
		$ikon2=$this->input->post('ikon2');
		$this->M_profil->simpan_profil($judul,$deskripsi,$judulkonten,$deskripsikonten,$ikon,$judulkonten2,$deskripsikonten2,$ikon2);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/profil');
				
	}
	
	function update_profil(){
		
		$id=$this->input->post('id');
		$judul=strip_tags($this->input->post('judul'));
		$deskripsi=$this->input->post('deskripsi');
		$judulkonten=$this->input->post('judulkonten');
		$deskripsikonten=$this->input->post('deskripsikonten');
		$ikon=$this->input->post('ikon');
		$judulkonten2=$this->input->post('judulkonten2');
		$deskripsikonten2=$this->input->post('deskripsikonten2');
		$ikon2=$this->input->post('ikon2');
		$this->M_profil->update_profil($id,$judul,$deskripsi,$judulkonten,$deskripsikonten,$ikon,$judulkonten2,$deskripsikonten2,$ikon2);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/profil');

	}

	function hapus_profil(){
		$id=$this->input->post('id');
		$this->M_profil->hapus_profil($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/profil');
	}

}