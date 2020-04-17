<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Member extends CI_Controller {
 		public function __construct(){
 			parent::__construct();
 			$this->load->library('cart');
 			$this->load->model('m_buyer');
			$this->member_login->cek_login();
 		}
 		
 		public function index(){
 			$kategori 			= ($this->uri->segment(3))?$this->uri->segment(3):0;
 			$data['produk'] 	= $this->m_buyer->get_produk_kategori($kategori);
 			$data['kategori'] 	= $this->m_buyer->get_kategori_all();
 			$this->load->view('themes/header',$data);
 			$this->load->view('member/list_produk',$data);
 			$this->load->view('themes/footer');
 		}

 		public function tampil_cart(){
 			$data['kategori'] 	= $this->m_buyer->get_kategori_all();
 			$this->load->view('themes/header',$data);
 			$this->load->view('member/tampil_cart',$data);
 		}
 
 		public function check_out(){
 			$data['kategori'] 	= $this->m_buyer->get_kategori_all();
 			$this->load->view('themes/header',$data);
 			$this->load->view('member/check_out',$data);
 		}
 
 		public function detail_produk(){
 			$id 				=($this->uri->segment(3))?$this->uri->segment(3):0;
 			$data['kategori'] 	= $this->m_buyer->get_kategori_all();
 			$data['detail'] 	= $this->m_buyer->get_produk_id($id)->row_array();
 			$this->load->view('themes/header',$data);
 			$this->load->view('member/detail_produk',$data);
 			$this->load->view('themes/footer');
 		}
 
 		function tambah(){
 			$data_produk = array(
 				'id' 		=> $this->input->post('id'),
	 			'name' 		=> $this->input->post('nama'),
	 			'price' 	=> $this->input->post('harga'),
				'gambar' 	=> $this->input->post('gambar'),
	 			'qty' 		=> $this->input->post('qty'));
	 			$this->cart->insert($data_produk);
 			redirect('member');
 		}

 		function hapus($rowid){
 			if ($rowid=="all"){
 				$this->cart->destroy();
 			}else{
 				$data = array('rowid' => $rowid,
 				'qty' => 0);
 				$this->cart->update($data);
 			}
 			redirect('member/tampil_cart');
 		}
 
 		function ubah_cart(){
 			$cart_info = $_POST['cart'] ;
 			foreach( $cart_info as $id => $cart){
 				$rowid 		=  $cart['rowid'];
 				$price 		=  $cart['price'];
 				$gambar 	=  $cart['gambar'];
 				$amount 	=  $price * $cart['qty'];
 				$qty 		=  $cart['qty'];
 				$data 		=  array('rowid' => $rowid,
 				'price' 	=> $price,
 				'gambar' 	=> $gambar,
 				'amount' 	=> $amount,
 				'qty' 		=> $qty);
 				$this->cart->update($data);
 			}
 			redirect('member/tampil_cart');
 		}

 		public function proses_order(){
 
 //-------------------------Input data pelanggan-------------------------
 			$data_pelanggan = array(
 			'nama' 			=> $this->session->set_userdata('nama'),
 			'email'			=> $this->session->set_userdata('email'),
 			'alamat' 		=> $this->session->set_userdata('alamat'),
 			'telp' 			=> $this->session->set_userdata('telp'));
 			$id_pelanggan 	=  $this->m_buyer->tambah_pelanggan($data_pelanggan);
 //-------------------------Input data order-----------------------------
 			$data_order 	=  array('tanggal' => date('Y-m-d'),
 			'pelanggan' 	=> $id_pelanggan);
 			$id_order   	=  $this->m_buyer->tambah_order($data_order);
 //-------------------------Input data detail order----------------------
 			if ($cart = $this->cart->contents()){
 				foreach ($cart as $item){
 					$data_detail = array(
 						'order_id'	=> $id_order,
 						'produk' 	=> $item['id'],
 						'qty' 		=> $item['qty'],
 						'harga' 	=> $item['price']);
 					$proses = $this->m_buyer->tambah_detail_order($data_detail);
 				}
 			}
 //-------------------------Hapus shopping cart--------------------------
 			$this->cart->destroy();
 			$data['kategori'] = $this->m_buyer->get_kategori_all();
 			$this->load->view('themes/header',$data);
 			$this->load->view('member/sukses',$data);
 			$this->load->view('themes/footer');
 		}
}
?>