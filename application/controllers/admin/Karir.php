<?php
class Karir extends CI_Controller{
	function __construct(){
		parent::__construct();
		if(!isset($_SESSION['logged_in'])){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('M_pengguna');
		$this->load->model('M_karir');
		$this->load->library('upload');
	}


	function index(){
		$x['data']=$this->M_karir->get_all_karir();
		$this->load->view('admin/v_karir',$x);
	}
	function add_karir(){
		$this->load->view('admin/v_add_karir');
	}
	function get_edit(){
		$id=$this->uri->segment(4);
		$x['data']=$this->M_karir->get_karir_by_id($id);
		$this->load->view('admin/v_edit_karir',$x);
	}
	function simpan_karir(){
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
				$config['width']= 710;
				$config['height']= 455;
				$config['new_image']= './assets/upload/gambar/'.$gbr['file_name'];
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/karir');
			}
				
		}else{
			redirect('admin/karir');
		}

		$config['upload_path'] = './assets/upload/dokumen/'; //path folder
		$config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = 1024;
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filedokumen']['name']))
		{
			if ($this->upload->do_upload('filedokumen'))
			{
				$gbr = $this->upload->data();
				//Compress Document
				$config['document_library']='gd2';
				$config['source_document']='./assets/upload/dokumen/'.$dkm['file_name'];
				$config['create_thumb']= FALSE;
				$config['maintain_ratio']= FALSE;
				$config['new_document']= './assets/upload/dokumen/'.$dkm['file_name'];

			}else{
				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/karir');
			}
				
		}else{
			redirect('admin/karir');
		}
		
		$foto=$gbr['file_name'];
		$dokumen=$dkm['file_name'];
		$nama=strip_tags($this->input->post('nama'));
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$email=$this->input->post('email');
		$this->M_karir->simpan_karir($nama,$alamat,$telepon,$email,$foto,$dokumen);
		echo $this->session->set_flashdata('msg','success');
		redirect('admin/karir');
				
	}
	
	function update_karir(){
				
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
					$config['width']= 710;
					$config['height']= 455;
					$config['new_image']= './assets/upload/gambar/'.$gbr['file_name'];
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
				
			}else{

				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/karir');

			}
			
		}else{

			$id=$this->input->post('id');
			$nama=strip_tags($this->input->post('nama'));
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
			$email=$this->input->post('email');
			$this->m_portfolio->update_karir_tanpa_img($id,$nama,$alamat,$telepon,$email);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/karir');

		}

		$config['upload_path'] = './assets/upload/dokumen/'; //path folder
		$config['allowed_types'] = 'pdf'; //type yang dapat diakses bisa anda sesuaikan
		$config['max_size'] = '1024';
		$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filedokumen']['name']))
		{
			if ($this->upload->do_upload('filedokumen'))
			{

					$gbr = $this->upload->data();
					//Compress Document
					$config['document_library']='gd2';
					$config['source_document']='./assets/upload/dokumen/'.$dkm['file_name'];
					$config['create_thumb']= FALSE;
					$config['maintain_ratio']= FALSE;
					$config['new_document']= './assets/upload/dokumen/'.$dkm['file_name'];
				
			}else{

				echo $this->session->set_flashdata('msg','warning');
				redirect('admin/karir');

			}
			
		}else{

			$id=$this->input->post('id');
			$nama=strip_tags($this->input->post('nama'));
			$alamat=$this->input->post('alamat');
			$telepon=$this->input->post('telepon');
			$email=$this->input->post('email');
			$this->m_portfolio->update_karir_tanpa_img($id,$nama,$alamat,$telepon,$email);
			echo $this->session->set_flashdata('msg','info');
			redirect('admin/karir');

		}

		$foto=$gbr['file_name'];
		$dokumen=$dkm['file_name'];
		$id=$this->input->post('id');
		$nama=strip_tags($this->input->post('nama'));
		$alamat=$this->input->post('alamat');
		$telepon=$this->input->post('telepon');
		$email=$this->input->post('email');
		$this->M_karir->update_karir($id,$nama,$alamat,$telepon,$email,$foto,$dokumen);
		echo $this->session->set_flashdata('msg','info');
		redirect('admin/karir');

	}

	function hapus_karir(){
		$id=$this->input->post('id');
		$foto=$this->input->post('foto');
		$dokumen=$this->input->post('dokumen');
		$path='./assets/upload/gambar/'.$foto;
		$path='./assets/upload/dokumen'.$dokumen;
		unlink($path);
		$this->M_karir->hapus_karir($id);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/karir');
	}

}