<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class M_account extends CI_Model{
	function daftar($data)
	{
		$this->db->insert('freelancer', $data);
	}
	public function tambah_produk($data){
 			$this->db->insert('tbl_produk', $data);
 			$id_produk = $this->db->insert_id();
 			return (isset($id_produk)) ? $id_produk : FALSE;
 		}

	function tampil(){
		return $this->db->get('tbl_kategori');
	}

	public function get_produk_freelancer($freelancer){
 			if($freelancer>0){
 				$this->db->where('id_freelancer',$freelancer);
 			}
			$query = $this->db->get('tbl_produk');
 			return $query->result_array();
 		}


	function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
} 
?>