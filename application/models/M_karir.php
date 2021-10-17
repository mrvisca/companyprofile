<?php
class M_karir extends CI_Model{

	function get_all_karir(){
		$krr=$this->db->query("SELECT * FROM tbcareer ORDER BY id DESC");
		return $krr;
	} 
	
	function simpan_karir($nama,$alamat,$telepon,$email,$foto,$dokumen){
		$krr=$this->db->query("INSERT INTO tbcareer (nama,alamat,telepon,email,foto,dokumen) VALUES ('$nama','$alamat','$telepon','$email','$foto','$dokumen')");
		return $krr;
	}

	function get_karir_by_id($id){
		$krr=$this->db->query("SELECT * FROM tbcareer WHERE id='$id'");
		return $krr;
	}

	function update_karir($id,$nama,$alamat,$telepon,$email,$foto,$dokumen){
		$krr=$this->db->query("UPDATE tbcareer SET nama='$nama',alamat='$alamat',telepon='$telepon',email='$email',foto='$foto',dokumen='$dokumen' WHERE id='$id'");
		return $krr;
	}

	function update_karir_tanpa_img($id,$nama,$alamat,$telepon,$email,$dokumen){
		$krr=$this->db->query("UPDATE tbcareer SET nama='$nama',alamat='$alamat',telepon='$telepon',email='$email',dokumen='$dokumen' WHERE id='$id'");
		return $krr;
	}

	function hapus_karir($id){
		$krr=$this->db->query("DELETE FROM tbcareer WHERE id='$id'");
		return $krr;
	}


	//Frontend
	function get_karir(){
		$krr=$this->db->query("SELECT * FROM tbcareer ORDER BY id DESC");
		return $krr;
	}

	function get_karir_per_page($offset,$limit){
		$krr=$this->db->query("SELECT * FROM tbcareer ORDER BY id DESC LIMIT $offset,$limit");
		return $krr;
	}
}