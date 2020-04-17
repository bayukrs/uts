<?php
class Kategori extends CI_Controller {
 
 	public function __construct(){
		parent::__construct();
		$this->login_admin->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}

	public function index(){
		$data['kategori'] = $this->m_admin->get_kategori();
		$this->load->view('kategori',$data);
	}

	function edit($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$data['kategori'] = $this->m_admin->edit_kategori($where,'tbl_kategori')->result();
		$this->load->view('edit_kategori',$data);
	}

	function update(){
            	$nama_kategori		= $this->input->post('nama_kategori');
                $id_kategori		= $this->input->post('id_kategori');
		$data = array(
                	'id_kategori'		=> $id_kategori,
		 			'nama_kategori'		=> $nama_kategori
		 		);

		$where = array(
			'id_kategori' => $id_kategori
		);
	 
		$this->m_admin->update_kategori($where,$data,'tbl_kategori');
		redirect(base_url('admin/kategori'));
		}

	function hapus($id_kategori){
		$where = array('id_kategori' => $id_kategori);
		$this->m_admin->hapus_data($where,'tbl_kategori');
		redirect(base_url('admin/kategori'));
	}
}