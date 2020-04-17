<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Add_Kategori extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->freelancer_login->cek_login();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_admin');
	}

	public function index(){
		$this->load->view('add_kategori');
	}

	public function tambah(){
			$data = array(
		 			'nama_kategori'	=> $this->input->post('nama_kategori')
		 		);
		 		$id_kategori 	=  $this->m_admin->add_kategori($data);
				$this->session->set_flashdata('msg','data berhasil di upload');
				redirect(base_url('admin/kategori'));
	}
}


 ?>