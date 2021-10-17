<?php
class M_paket extends CI_Model{

	function get_all_paket(){
		$pkt=$this->db->query("select * from tbpaket");
		return $pkt;
	}
	function simpan_paket($paket){
		$pkt=$this->db->query("insert into tbpaket(paket) values('$paket')");
		return $pkt;
	}
	function update_paket($id,$paket){
		$pkt=$this->db->query("update tbpaket set paket='$paket' where id='$id'");
		return $pkt;
	}
	function hapus_paket($id){
		$pkt=$this->db->query("delete from tbpaket where id='$id'");
		return $pkt;
	}
	
	function get_paket_by_id($id){
		$pkt=$this->db->query("select * from tbpaket where id='$id'");
		return $pkt;
	}

}