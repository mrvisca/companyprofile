<?php
class M_testimoni extends CI_Model{

	function get_all_testimoni(){
		$tti=$this->db->query("SELECT * FROM tbtestimoni ORDER BY id DESC");
		return $tti;
	} 
	
	function simpan_testimoni($nama,$pendapat,$status_member,$photo){
		$tti=$this->db->query("INSERT INTO tbtestimoni (nama,pendapat,status_member,photo) VALUES ('$nama','$pendapat','$status_member','$photo')");
		return $tti;
	}

	function get_testimoni_by_id($id){
		$tti=$this->db->query("SELECT * FROM tbtestimoni WHERE id='$id'");
		return $tti;
	}

	function update_testimoni($id,$nama,$pendapat,$status_member,$photo){
		$tti=$this->db->query("UPDATE tbtestimoni SET nama='$nama',pendapat='$pendapat',status_member='$status_member',photo='$photo' WHERE id='$id'");
		return $tti;
	}

	function update_testimoni_tanpa_img($id,$nama,$pendapat,$tatus_member){
		$tti=$this->db->query("UPDATE tbtestimoni SET nama='$nama',pendapat='$pendapat',status_member='$status_member' WHERE id='$id'");
		return $tti;
	}

	function hapus_testimoni($id){
		$tti=$this->db->query("DELETE FROM tbtestimoni WHERE id='$id'");
		return $tti;
	}


	//Frontend
	function get_testimoni(){
		$tti=$this->db->query("SELECT * FROM tbtestimoni ORDER BY id DESC");
		return $hsl;
	}

	function get_testimoni_per_page($offset,$limit){
		$tti=$this->db->query("SELECT * FROM tbtestimoni ORDER BY id DESC LIMIT $offset,$limit");
		return $tti;
	}
}