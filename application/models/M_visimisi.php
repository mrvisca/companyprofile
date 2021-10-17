<?php
class M_visimisi extends CI_Model{

	function get_all_visimisi(){
		$vmp=$this->db->query("SELECT * FROM tbvisi ORDER BY id DESC");
		return $vmp;
	} 
	
	function simpan_visimisi($judul,$visi,$misi,$profil,$fitur,$presentase,$fitur2,$presentase2,$fitur3,$presentase3,$fitur4,$presentase4){
		$vmp=$this->db->query("INSERT INTO tbvisi (judul,visi,misi,profil,fitur,presentase,fitur2,presentase2,fitur3,presentase3,fitur4,presentase4) VALUES ('$judul','$visi','$profil','$profil','$fitur','$presentase','$fitur2','$presentase2','$fitur3','$presentase3','$fitur4','$presentase4')");
		return $vmp;
	}

	function get_visimisi_by_id($id){
		$vmp=$this->db->query("SELECT * FROM tbvisi WHERE id='$id'");
		return $vmp;
	}

	function update_visimisi($id,$judul,$visi,$misi,$profil,$fitur,$presentase,$fitur2,$presentase2,$fitur3,$presentase3,$fitur4,$presentase4){
		$vmp=$this->db->query("UPDATE tbvisi SET judul='$judul',visi='$visi',misi='$misi',profil='$profil',fitur='$fitur',presentase='$presentase',fitur2='$fitur2',presentase2='$presentase2',fitur3='$fitur3',presentase3='$presentase3',fitur4='$fitur4',presentase4='$presentase4' WHERE id='$id'");
		return $vmp;
	}

	function update_visimisi_tanpa_img($id,$judul,$visi,$misi,$profil,$fitur,$presentase,$fitur2,$presentase2,$fitur3,$presentase3,$fitur4,$presentase4){
		$vmp=$this->db->query("UPDATE tbvisi SET judul='$judul',visi='$visi',misi='$misi',profil='$profil',fitur='$fitur',presentase='$presentase',fitur2='$fitur2',presentase2='$presentase2',fitur3='$fitur3',presentase3='$presentase3',fitur4='$fitur4',presentase4='$presentase4' WHERE id='$id'");
		return $vmp;
	}

	function hapus_visimisi($id){
		$vmp=$this->db->query("DELETE FROM tbvisi WHERE id='$id'");
		return $vmp;
	}


	//Frontend
	function get_visimisi(){
		$vmp=$this->db->query("SELECT * FROM tbvisi ORDER BY id DESC");
		return $hsl;
	}

	function get_visimisi_per_page($offset,$limit){
		$vmp=$this->db->query("SELECT * FROM tbvisi ORDER BY id DESC LIMIT $offset,$limit");
		return $vmp;
	}
}