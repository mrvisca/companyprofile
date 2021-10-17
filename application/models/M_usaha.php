<?php
class M_usaha extends CI_Model{

	function get_all_usaha(){
		$hsl=$this->db->query("select * from tbusaha");
		return $hsl;
	}
	function simpan_usaha($kategori){
		$hsl=$this->db->query("insert into tbusaha(nama) values('$kategori')");
		return $hsl;
	}
	function update_usaha($id,$kategori){
		$hsl=$this->db->query("update tbusaha set nama='$kategori' where id='$id'");
		return $hsl;
	}
	function hapus_usaha($id){
		$hsl=$this->db->query("delete from tbusaha where id='$id'");
		return $hsl;
	}
	
	function get_usaha_by_id($id){
		$hsl=$this->db->query("select * from tbusaha where id='$id'");
		return $hsl;
	}

}