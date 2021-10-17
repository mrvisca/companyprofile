<?php
class M_banner extends CI_Model{

	function get_all_banner(){
		$bnr=$this->db->query("SELECT * FROM tbbanner ORDER BY id DESC");
		return $bnr;
	} 
	
	function simpan_banner($judul,$subjudul,$deskripsi,$button_name){
		$bnr=$this->db->query("INSERT INTO tbbanner (judul,subjudul,deskripsi,button_name) VALUES ('$judul','$subjudul','$deskripsi','$button_name')");
		return $bnr;
	}

	function get_banner_by_id($id){
		$bnr=$this->db->query("SELECT * FROM tbbanner WHERE id='$id'");
		return $bnr;
	}

	function update_banner($id,$judul,$subjudul,$deskripsi,$button_name){
		$bnr=$this->db->query("UPDATE tbbanner SET judul='$judul',subjudul='$subjudul',deskripsi='$deskripsi',button_name='$button_name' WHERE id='$id'");
		return $bnr;
	}

	function update_banner_tanpa_img($id,$judul,$subjudul,$deskripsi,$button_name){
		$bnr=$this->db->query("UPDATE tbbanner SET judul='$judul',subjudul='$subjudul',deskripsi='$deskripsi',button_name='$button_name' WHERE id='$id'");
		return $bnr;
	}

	function hapus_banner($id){
		$bnr=$this->db->query("DELETE FROM tbbanner WHERE id='$id'");
		return $bnr;
	}


	//Frontend
	function get_banner(){
		$bnr=$this->db->query("SELECT * FROM tbbanner ORDER BY id DESC");
		return $bnr;
	}

	function get_banner_per_page($offset,$limit){
		$bnr=$this->db->query("SELECT * FROM tbbanner ORDER BY id DESC LIMIT $offset,$limit");
		return $bnr;
	}
}