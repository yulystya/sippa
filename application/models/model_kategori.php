<?php 

class Model_kategori extends CI_Model{
	public function data_percetakan(){
		return $this->db->get_where('tb_barang',array('kategori' => 'percetakan'));
	}

	public function data_jasa(){
		return $this->db->get_where('tb_barang',array('kategori' => 'jasa'));
	}
} ?>