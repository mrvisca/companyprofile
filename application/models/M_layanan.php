<?php
class M_layanan extends CI_Model{

	function get_all_layanan(){
		$lyn=$this->db->query("SELECT * FROM tbservice ORDER BY id DESC");
		return $lyn;
	} 
	
	function simpan_layanan($judul,$deskripsi,$gambar){
		$lyn=$this->db->query("INSERT INTO tbservice (judul,deskripsi,gambar) VALUES ('$judul','$deskripsi','$gambar')");
		return $lyn;
	}

	function get_layanan_by_id($id){
		$lyn=$this->db->query("SELECT * FROM tbservice WHERE id='$id'");
		return $lyn;
	}

	function update_layanan($id,$judul,$deskripsi,$gambar){
		$lyn=$this->db->query("UPDATE tbservice SET judul='$judul',deskripsi='$deskripsi',gambar='$gambar' WHERE id='$id'");
		return $lyn;
	}

	function update_layanan_tanpa_img($id,$judul,$deskripsi){
		$lyn=$this->db->query("UPDATE tbservice SET judul='$judul',deskripsi='$deskripsi' WHERE id='$id'");
		return $lyn;
	}

	function hapus_layanan($id){
		$lyn=$this->db->query("DELETE FROM tbservice WHERE id='$id'");
		return $lyn;
	}


	//Frontend
	function get_layanan(){
		$lyn=$this->db->query("SELECT * FROM tbservice ORDER BY id DESC");
		return $lyn;
	}

	function get_layanan_per_page($offset,$limit){
		$lyn=$this->db->query("SELECT * FROM tbservice ORDER BY id DESC LIMIT $offset,$limit");
		return $lyn;
	}
}