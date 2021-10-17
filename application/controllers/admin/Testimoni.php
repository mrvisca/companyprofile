<?php
class Testimoni extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_testimoni');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_testimoni->get_all_testimoni();
		$this->load->view('admin/v_testimoni',$x);
	}
	function add_testimoni(){
		$this->load->view('admin/v_add_testimoni');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_testimoni->get_testimoni_by_id($id);
		$this->load->view('admin/v_edit_testimoni',$x);
	}
	function simpan_testimoni(){

		$config['upload_path'] = './assets/upload/gambar/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '70%';
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$photo=$gbr['file_name'];
					$nama=strip_tags($this->input->post('nama'));
					$pendapat=$this->input->post('pendapat');
					$status_member=$this->input->post('status_member');
					$this->M_testimoni->simpan_testimoni($nama,$pendapat,$status_member,$photo);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/testimoni');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/testimoni');
			}
				
		}else{
			redirect('admin/testimoni');
		}
				
	}
	
	function update_testimoni(){
				
		$config['upload_path'] = './assets/images/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
					$gbr = $this->upload->data();
					//Compress Image
					$config['image_library']='gd2';
					$config['source_image']='./assets/images/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '70%';
					$config['new_image']= './assets/images/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$photo=$gbr['file_name'];
					$id=$this->input->post('id');
					$nama=strip_tags($this->input->post('nama'));
					$pendapat=$this->input->post('pendapat');
					$status_member=$this->input->post('status_member');
					$this->M_testimoni->update_testimoni($id,$nama,$pendapat,$status_member,$photo);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/testimoni');
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/testimoni');
			}
			
		}else{

			$id=$this->input->post('id');
			$nama=strip_tags($this->input->post('nama'));
			$pendapat=$this->input->post('pendapat');
			$status_member=$this->input->post('status_member');
			$this->M_testmoni->update_testimoni_tanpa_img($id,$nama,$pendapat,$status_member);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/testimoni');
		} 

	}

	function hapus_testimoni(){
		$id=$this->input->post('id');
		$photo=$this->input->post('photo');
		$path='./assets/upload/gambar'.$photo;
		unlink($path);
		$this->M_testimoni->hapus_testimoni($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/testimoni');
	}

}