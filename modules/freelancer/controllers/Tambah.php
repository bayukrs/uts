<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class tambah extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();	
		$this->freelancer_login->cek_login();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	}

	public function index(){
		$data['kategori'] = $this->m_account->tampil()->result();
		$this->load->view('tambah',$data);
	}

	public function upload(){
			$config['upload_path']          = 'images';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('gambar')) //sesuai dengan name pada form 
            { 
                $data_produk = array(
		 			'id_kategori'		=> $this->input->post('kategori'),
		 			'id_freelancer'		=> $this->session->userdata('id'),
		 			'nama_produk' 		=> $this->input->post('nama_produk'),
		 			'harga' 			=> $this->input->post('harga'),
		 			'gambar' 			=> $this->input->post('gambar'),
		 			'deskripsi'			=> $this->input->post('deskripsi'),
		 			'benefit'			=> $this->input->post('benefit'),
		 			'waktu_pengerjaan'	=> $this->input->post('waktu')
		 		);
		 		$id_pelanggan 	=  $this->m_account->tambah_produk($data_produk);
				$this->session->set_flashdata('msg','data berhasil di upload');
				$pesan['message'] ="Pendaftaran berhasil";
				redirect(base_url('freelancer'));
            }
            else
            {
            	//tampung data dari form
            	$id_kategori		= $this->input->post('kategori');
		 		$id_freelancer		= $this->session->userdata('id');
		 		$nama_produk 		= $this->input->post('nama_produk');
		 		$harga	 			= $this->input->post('harga');
            	$file 				= $this->upload->data();
            	$gambar 			= $file['file_name'];
            	$deskripsi			= $this->input->post('deskripsi');
		 		$benefit			= $this->input->post('benefit');
		 		$waktu_pengerjaan	= $this->input->post('waktu');
 
                $data_produk = array(
		 			'id_kategori'		=> $id_kategori,
		 			'id_freelancer'		=> $id_freelancer,
		 			'nama_produk' 		=> $nama_produk,
		 			'harga' 			=> $harga,
		 			'gambar' 			=> $gambar,
		 			'deskripsi'			=> $deskripsi,
		 			'benefit'			=> $benefit,
		 			'waktu_pengerjaan'	=> $waktu_pengerjaan
		 		);
		 		$id_pelanggan 	=  $this->m_account->tambah_produk($data_produk);
				$this->session->set_flashdata('msg','data berhasil di upload');
				$pesan['message'] ="Pendaftaran berhasil";
				redirect(base_url('freelancer'));
 
            }
		}
}


 ?>