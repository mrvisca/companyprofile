<?php
class M_gallery extends CI_Model{

	function get_kategori(){
        $query = $this->db->get('tbusaha');
        return $query;  
    }
 
    function get_sub_kategori($id){
        $query = $this->db->get_where('kategori', array('nama' => $kategori));
        return $query;
    }

	function get_all_gallery(){
		$gal=$this->db->query("SELECT * FROM tbgallery ORDER BY id DESC");
		return $gal;
	}
	
	function simpan_gallery($foto,$alt,$kategori,$tanggal){
		$gal=$this->db->query("INSERT INTO tbgallery (foto,alt,kategori,tanggal) VALUES ('$foto','$alt','$kategori','".date("Y-m-d H:i:s")."')");
		return $gal;
	}

	function get_gallery_by_id($id){
		$gal=$this->db->query("SELECT * FROM tbgallery WHERE id='$id'");
		return $gal;
	}

	function update_gallery($id,$foto,$alt,$kategori,$tanggal){
		$gal=$this->db->query("UPDATE tbgallery SET foto='$foto',alt='$alt',kategori='$kategori',tanggal='".date("Y-m-d H:i:s")."' WHERE id='$id'");
		return $gal;
	}

	function update_gallery_tanpa_img($id,$alt,$kategori,$tanggal){
		$gal=$this->db->query("UPDATE tbgallery SET alt='$alt',kategori='$kategori',tanggal='".date("Y-m-d H:i:s")."' WHERE id='$id'");
		return $gal;
	}

	function hapus_gallery($id){
		$gal=$this->db->query("DELETE FROM tbgallery WHERE id='$id'");
		return $gal;
	}


	//Frontend
	function get_gallery(){
		$gal=$this->db->query("SELECT * FROM tbgallery ORDER BY id DESC");
		return $gal;
	}

	function get_gallery_per_page($offset,$limit){
		$gal=$this->db->query("SELECT * FROM tbgallery ORDER BY id DESC LIMIT $offset,$limit");
		return $gal;
	}
}