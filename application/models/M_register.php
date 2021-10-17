<?php
class M_register extends CI_Model{

	function get_all_register(){
		$reg=$this->db->query("SELECT * FROM tbregist ORDER BY id DESC");
		return $reg;
	} 
	
	function simpan_register($nama,$telepon,$refferal,$paket,$pesan,$tanggal){
		$reg=$this->db->query("INSERT INTO tbregist (nama,telepon,refferal,paket,pesan,tanggal) VALUES ('$nama','$telepon','$refferal','$paket','$pesan','$tanggal')");
		return $reg;
	}

	function get_register_by_id($id){
		$reg=$this->db->query("SELECT * FROM tbregist WHERE id='$id'");
		return $reg;
	}

	function update_register($id,$nama,$telepon,$refferal,$paket,$pesan,$tanggal){
		$reg=$this->db->query("UPDATE tbregist SET nama='$nama',telepon='$telepon',refferal='$refferal',paket='$paket',pesan='$pesan',tanggal='$tanggal' WHERE id='$id'");
		return $reg;
	}

	function update_register_tanpa_img($id,$nama,$telepon,$refferal,$paket,$pesan,$tanggal){
		$reg=$this->db->query("UPDATE tbregist SET nama='$nama',telepon='$telepon',refferal='$refferal',paket='$paket',pesan='$pesan',tanggal='$tanggal' WHERE id='$id'");
		return $reg;
	}

	function hapus_register($id){
		$reg=$this->db->query("DELETE FROM tbregist WHERE id='$id'");
		return $reg;
	}


	//Frontend
	function get_register(){
		$reg=$this->db->query("SELECT * FROM tbregist ORDER BY id DESC");
		return $reg;
	}

	function get_regist_per_page($offset,$limit){
		$reg=$this->db->query("SELECT * FROM tbregist ORDER BY id DESC LIMIT $offset,$limit");
		return $reg;
	}
}