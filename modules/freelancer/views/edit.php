<!DOCTYPE html>
<html>
<head>
	<title>Tambah Product</title>
	<?php $this->load->view("freelancer/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("freelancer/_partials/navbar.php") ?>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view("freelancer/_partials/sidebar.php") ?>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1>Add Product</h1>
		          </div>
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Add Product</li>
		            </ol>
		          </div>
		        </div>
		      </div><!-- /.container-fluid -->
		    </section>

		    <section class="content">
		      <div class="container-fluid">
		        <div class="row">
		          <!-- left column -->
		          <div class="col-md-6">
		              <p><?php echo $this->session->flashdata('msg') ?></p>
		              <form action="<?php echo base_url();?>freelancer/upload" method="post" enctype="multipart/form-data">
		              	<?php foreach($produk as $u){ ?>
		                <div class="form-group">
		                    <label>Nama Product</label>
		                      <input type="text" name="nama_produk" value="<?php echo $u->nama_produk;?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="row">
		                    <div class="col-sm-6">
		                      <!-- select -->
		                      <div class="form-group">
		                        <label>Kategori</label>
		                        <select class="custom-select" name="kategori">
		                          <option><?php echo $u->id_kategori;?></option>
		                          <?php 
		                            foreach($kategori as $k){
		                          ?>
		                          <option  value="<?php echo $u->id_kategori ?>"><?php   echo $k->nama_kategori ?></option>
		                        <?php   }; ?>
		                        </select>
		                      </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label>Harga</label>
		                      <input type="text" name="harga" value="<?php echo $u->harga;?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="form-group">
		                    <label>Deskripsi</label>
		                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" value="<?php echo set_value('deskripsi');?>"><?php echo $u->deskripsi;?></textarea>
		                </div>
		                <div class="form-group">
		                    <label>Benefit</label>
		                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="benefit" value="<?php echo set_value('deskripsi');?>"><?php echo $u->benefit;?></textarea>
		                </div>
		                <div class="form-group">
		                    <label>Waktu Pengerjaan</label>
		                      <input type="text" name="waktu" value="<?php echo $u->waktu_pengerjaan;?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="form-group">
		                <img src="<?php echo base_url('images/'.$u->gambar.''); ?>"height="50px" width="50px">
		                <input type="hidden" name="gambar" value="<?php echo $u->gambar; ?>" />
		                <input type="hidden" name="id_produk" value="<?php echo $u->id_produk; ?>" />
		                <label for="exampleInputFile">Input Images</label>
		                <div class="input-group">
		                <input type="file" name="new_gambar">
		                </div>
		                </div>
		                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
		                <?php } ?>
		              <?php echo form_close() ?>  
		              </form>
		            </div>
		          </div>
		      </div>
		    </section>
		</div>
	</div>

<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>
</body>
</html>