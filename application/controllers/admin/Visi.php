<?php
class Visi extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_visimisi');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->M_visimisi->get_all_visimisi();
		$this->load->view('admin/v_visi',$x);
	}

	function add_visi(){
		$this->load->view('admin/v_add_visi');
	}

	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_visimisi->get_visimisi_by_id($id);
		$this->load->view('admin/v_edit_visi',$x);
	}
	function simpan_visi(){
		$judul=strip_tags($this->input->post('judul'));
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		$profil=$this->input->post('profil');
		$fitur=$this->input->post('fitur');
		$presentase=$this->input->post('presentase');
		$fitur2=$this->input->post('fitur2');
		$presentase2=$this->input->post('presentase2');
		$fitur3=$this->input->post('fitur3');
		$presentase3=$this->input->post('presentase3');
		$fitur4=$this->input->post('fitur4');
		$presentase4=$this->input->post('presentase4');
		$this->M_visimisi->simpan_visimisi($judul,$visi,$misi,$profil,$fitur,$presentase,$fitur2,$presentase2,$fitur3,$presentase3,$fitur4,$presentase4);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/visi');	
	}
	
	function update_visi(){	
		$id=$this->input->post('id');
		$judul=strip_tags($this->input->post('judul'));
		$visi=$this->input->post('visi');
		$misi=$this->input->post('misi');
		$profil=$this->input->post('profil');
		$fitur=$this->input->post('fitur');
		$presentase=$this->input->post('presentase');
		$fitur2=$this->input->post('fitur2');
		$presentase2=$this->input->post('presentase2');
		$fitur3=$this->input->post('fitur3');
		$presentase3=$this->input->post('presentase3');
		$fitur4=$this->input->post('fitur4');
		$presentase4=$this->input->post('presentase4');
		$this->M_visimisi->update_visimisi($id,$judul,$visi,$misi,$profil,$fitur,$presentase,$fitur2,$presentase2,$fitur3,$presentase3,$fitur4,$presentase4);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/visi');
	}

	function hapus_visi(){
		$id=$this->input->post('id');
		$this->M_visimisi->hapus_visimisi($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/visi');
	}
}