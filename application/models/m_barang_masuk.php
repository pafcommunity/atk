<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_barang_masuk extends CI_Model {

	public function get_produk_id(){
	$data = array();
	$query = $this->db->get('produk');
	if($query->num_rows() > 0){
		foreach($query->result_array() as $row){
			$data[] = $row;
		}
	}

	$query->free_result();
	return $data;

	}

	public function get_barang_masuk($where = ""){
		$data = $this->db->query('select * from barang_masuk '.$where);
		return $data -> result_array();
	}

	public function insert_data($table, $isi_data){
		$temp = $this->db->insert($table, $isi_data);
		return $temp;
	}

	public function delete_data($table, $where){
		$temp = $this->db->delete($table, $where);
		return $temp;
	}

	public function update_data($table, $isi_data, $where){
		$temp = $this->db->update($table, $isi_data, $where);
		return $temp;
	}
}