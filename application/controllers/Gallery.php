<?php
class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('M_gallery');
		//$this->load->model('M_album');
		$this->load->model('M_pengunjung');
        $this->M_pengunjung->count_visitor();
	}

	function index(){
		$x['data']=$this->M_gallery->get_all_gallery();
		$this->load->view('gallery',$x);
	}
}
