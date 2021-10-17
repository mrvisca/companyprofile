<?php
class Gallery extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_usaha');
		$this->load->model('M_gallery');
		$this->load->library('upload');
	}

	function index(){
		$x['data']=$this->M_gallery->get_all_gallery();
		$this->load->view('admin/v_gallery',$x);
	}
	function add_gallery(){
		$x['usaha']=$this->M_usaha->get_all_usaha();
		$this->load->view('admin/v_add_gallery',$x);
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_gallery->get_gallery_by_id($id);
		$x['usaha']=$this->M_usaha->get_all_usaha();
		$this->load->view('admin/v_edit_gallery',$x);
	}
	function simpan_gallery(){

		$config['upload_path'] = './assets/upload/gambar'; //path folder
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

					$foto=$gbr['file_name'];
					$alt=strip_tags($this->input->post('alt'));
					$kategori=strip_tags($this->input->post('kategori'));
					$tanggal=$this->input->post('tanggal');
					$this->M_gallery->simpan_gallery($foto,$alt,$kategori,$tanggal);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/gallery');
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/gallery');
			}
				
		}else{
			redirect('admin/gallery');
		}
				
	}
	
	function update_gallery(){
				
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

					$foto=$gbr['file_name'];
					$id=$this->input->post('id');
					$alt=strip_tags($this->input->post('alt'));
					$kategori=strip_tags($this->input->post('kategori'));
					$tanggal=strtotime(date('Y-m-d h:i:s a'));
					$this->M_gallery->update_gallery($id,$foto,$alt,$kategori,$tanggal);
					echo $this->session->set_flashdata('msg','info');
					redirect('admin/gallery');
				
			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/gallery');
			}
			
		}else{
			$id=$this->input->post('id');
			$alt=strip_tags($this->input->post('alt'));
			$kategori=$this->input->post('kategori');
			$tanggal=strtotime(date('Y-m-d h:i:s a'));
			$this->M_gallery->update_gallery_tanpa_img($id,$alt,$kategori,$tanggal);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/gallery');
		} 

	}

	function hapus_gallery(){
		$id=$this->input->post('id');
		$foto=$this->input->post('foto');
		$path='./assets/upload/gambar/'.$gambar;
		unlink($path);
		$this->M_gallery->hapus_gallery($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/gallery');
	}

}