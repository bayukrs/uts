<?php
class Freelancer extends CI_Controller {
 
 	function __construct(){
		parent::__construct();
		$this->freelancer_login->cek_login();
		$this->load->helper(array('url','form'));
		$this->load->model('m_account');
	} 
	
	public function index(){
 	// load view admin/overview.php
		$freelancer = $this->session->userdata('id');
		$data['produk'] = $this->m_account->get_produk_freelancer($freelancer);
 		$this->load->view("freelancer/dashboard",$data);
	}

	function hapus($id_produk){
		$where = array('id_produk' => $id_produk);
		$this->m_account->hapus_data($where,'tbl_produk');
		redirect(base_url('freelancer'));
	}

	function edit($id_produk){
		$where = array('id_produk' => $id_produk);
		$data['produk'] = $this->m_account->edit_data($where,'tbl_produk')->result();
		$data['kategori'] = $this->m_account->tampil()->result();
		$this->load->view('edit',$data);
	}

	function upload(){
			$config['upload_path']          = 'images';  // folder upload 
            $config['allowed_types']        = 'gif|jpg|png|jpeg'; // jenis file
            $config['max_size']             = 3000;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;
 
            $this->load->library('upload', $config);
 
            if ( ! $this->upload->do_upload('new_gambar')) //sesuai dengan name pada form 
            {
            	$id_produk			= $this->input->post('id_produk');
                $id_kategori		= $this->input->post('kategori');
		 		$id_freelancer		= $this->session->userdata('id');
		 		$nama_produk 		= $this->input->post('nama_produk');
		 		$harga	 			= $this->input->post('harga');
            	$gambar 			= $this->input->post('gambar');
            	$deskripsi			= $this->input->post('deskripsi');
		 		$benefit			= $this->input->post('benefit');
		 		$waktu_pengerjaan	= $this->input->post('waktu');
 
                $data_produk = array(
                	'id_produk'			=> $id_produk,
		 			'id_kategori'		=> $id_kategori,
		 			'id_freelancer'		=> $id_freelancer,
		 			'nama_produk' 		=> $nama_produk,
		 			'harga' 			=> $harga,
		 			'gambar' 			=> $gambar,
		 			'deskripsi'			=> $deskripsi,
		 			'benefit'			=> $benefit,
		 			'waktu_pengerjaan'	=> $waktu_pengerjaan
		 		);
		 		$where = array(
					'id_produk' => $id_produk
				);
			 
				$this->m_account->update_data($where,$data_produk,'tbl_produk');
				redirect(base_url('freelancer'));
            }
            else {
            	$id_produk			= $this->input->post('id_produk');
				$id_kategori		= $this->input->post('kategori');
		 		$id_freelancer		= $this->session->userdata('id');
		 		$nama_produk 		= $this->input->post('nama_produk');
		 		$harga	 			= $this->input->post('harga');
            	$file 				= $this->upload->data();
            	$new_gambar 		= $file['file_name'];
            	$deskripsi			= $this->input->post('deskripsi');
		 		$benefit			= $this->input->post('benefit');
		 		$waktu_pengerjaan	= $this->input->post('waktu');
 
                $data_produk = array(
                	'id_produk'			=> $id_produk,
		 			'id_kategori'		=> $id_kategori,
		 			'id_freelancer'		=> $id_freelancer,
		 			'nama_produk' 		=> $nama_produk,
		 			'harga' 			=> $harga,
		 			'gambar' 			=> $new_gambar,
		 			'deskripsi'			=> $deskripsi,
		 			'benefit'			=> $benefit,
		 			'waktu_pengerjaan'	=> $waktu_pengerjaan
		 		);
		 		$where = array(
					'id_produk' => $id_produk
				);
			 
				$this->m_account->update_data($where,$data_produk,'tbl_produk');
				redirect(base_url('freelancer'));
		}
	}
}