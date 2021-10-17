<?php
class Layanan extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_layanan');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_layanan->get_all_layanan();
		$this->load->view('admin/v_layanan',$x);
	}
	function add_layanan(){
		$this->load->view('admin/v_add_layanan');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_layanan->get_layanan_by_id($id);
		$this->load->view('admin/v_edit_layanan',$x);
	}
	function simpan_layanan(){

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
					$config['source_image']='./assets/upload/gambar/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '70%';
					$config['new_image']= './assets/upload/gambar/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar=$gbr['file_name'];
					$judul=strip_tags($this->input->post('judul'));
					$deskripsi=$this->input->post('deskripsi');
					$this->M_layanan->simpan_layanan($judul,$deskripsi,$gambar);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/layanan');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/layanan');
			}
				
		}else{
			redirect('admin/layanan');
		}
				
	}
	
	function update_layanan(){
				
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
					$config['source_image']='./assets/upload/gambar/'.$gbr['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['quality']= '70%';
					$config['new_image']= './assets/upload/gambar/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();

					$gambar=$gbr['file_name'];
					$id=$this->input->post('id');
					$judul=strip_tags($this->input->post('judul'));
					$deskripsi=$this->input->post('deskripsi');
					$this->M_layanan->update_layanan($id,$judul,$deskripsi,$gambar);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/layanan');
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/layanan');
			}
			
		}else{
			$id=$this->input->post('kode');
			$judul=strip_tags($this->input->post('judul'));
			$deskripsi=$this->input->post('deskripsi');
			$this->M_layanan->update_layanan_tanpa_img($id,$judul,$deskripsi);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/layanan');
		} 

	}

	function hapus_layanan(){
		$id=$this->input->post('id');
		$gambar=$this->input->post('gambar');
		$path='./assets/upload/gambar/'.$gambar;
		unlink($path);
		$this->M_layanan->hapus_layanan($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/layanan');
	}

}