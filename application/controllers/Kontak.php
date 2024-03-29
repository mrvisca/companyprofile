<?php 
class Kontak extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_pengunjung');
		$this->load->model('M_kontak');
        $this->M_pengunjung->count_visitor();
	}

	function index(){
		//$this->load->library('googlemaps');
		//error_reporting(0);
		//$long='37.4419';
		//$lat='-122.1419';
		//$config=array();
		//$config['center']=$long.','. $lat;
		//$config['zoom']=16;
		//$this->googlemaps->initialize($config);
		//$marker=array();
		//$marker['position']=$long.','. $lat;
		//$this->googlemaps->add_marker($marker);
		//$x['map']=$this->googlemaps->create_map();
		$this->load->view('v_kontak');
	}

	function kirim_pesan(){
		$nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$inbox_subyek=htmlspecialchars($this->input->post('inbox_subyek',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
		$this->M_kontak->kirim_pesan($nama,$email,$inbox_subyek,$pesan);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah menghubungi kami.</div>");
		redirect('kontak');
	}
}