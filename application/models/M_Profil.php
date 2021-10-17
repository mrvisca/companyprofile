<?php
class M_profil extends CI_Model{

	function get_all_profil(){
		$prf=$this->db->query("SELECT * FROM tbabout ORDER BY id DESC");
		return $prf;
	} 
	
	function simpan_profil($judul,$deskripsi,$judulkonten,$deskripsikonten,$ikon,$judulkonten2,$deskripsikonten2,$ikon2){
		$prf=$this->db->query("INSERT INTO tbabout (judul,deskripsi,judulkonten,deskripsikonten,ikon,judulkonten2,deskripsikonten2,ikon2) VALUES ('$judul','$deskripsi','$judulkonten','$deskripsikonten','$ikon','$judulkonten2','$deskripsikonten2','$ikon2')");
		return $prf;
	}

	function get_profil_by_id($id){
		$prf=$this->db->query("SELECT * FROM tbabout WHERE id='$id'");
		return $prf;
	}

	function update_profil($id,$judul,$deskripsi,$judulkonten,$deskripsikonten,$ikon,$judulkonten2,$deskripsikonten2,$ikon2){
		$prf=$this->db->query("UPDATE tbabout SET judul='$judul',deskripsi='$deskripsi',judulkonten='$judulkonten',deskripsikonten='$deskripsikonten',ikon='$ikon',judulkonten2='$judulkonten2',deskripsikonten2='$deskripsikonten2',ikon2='$ikon2' WHERE id='$id'");
		return $prf;
	}

	function update_profil_tanpa_img($id,$judul,$deskripsi,$judulkonten,$deskripsikonten,$ikon,$judulkonten2,$deskripsikonten2,$ikon2){
		$prf=$this->db->query("UPDATE tbabout SET judul='$judul',deskripsi='$deskripsi',judulkonten='$judulkonten',deskripsikonten='$deskripsikonten',ikon='$ikon',judulkonten2='$judulkonten2',deskripsikonten2='$deskripsikonten2',ikon2='$ikon2' WHERE id='$id'");
		return $prf;
	}

	function hapus_profil($id){
		$prf=$this->db->query("DELETE FROM tbabout WHERE id='$id'");
		return $prf;
	}


	//Frontend
	function get_profil(){
		$prf=$this->db->query("SELECT * FROM tbabout ORDER BY id DESC");
		return $prf;
	}

	function get_profil_per_page($offset,$limit){
		$prf=$this->db->query("SELECT * FROM tbabout ORDER BY id DESC LIMIT $offset,$limit");
		return $prf;
	}
}