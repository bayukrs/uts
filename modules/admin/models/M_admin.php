<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_admin extends CI_Model{

	public function tampil(){
 			$query = $this->db->get('tbl_produk');
 			return $query->result_array();
 		}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function get_kategori(){
		$query = $this->db->get('tbl_kategori');
		return $query->result_array();
	}

	public function add_kategori($data){
 			$this->db->insert('tbl_kategori', $data);
 			$id_kategori = $this->db->insert_id();
 			return (isset($id_produk)) ? $id_kategori : FALSE;
	}

	function edit_kategori($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_kategori($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function get_freelancer(){
 			$query = $this->db->get('freelancer');
 			return $query->result_array();
 	}

	public function get_order(){
 			$query = $this->db->get('tbl_order');
 			return $query->result_array();
 	}

	public function get_order_detail(){
 			$query = $this->db->get('tbl_detail_order');
 			return $query->result_array();
 	}

	public function get_pelanggan(){
 			$query = $this->db->get('tbl_pelanggan');
 			return $query->result_array();
 	}
}