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
		              <form action="<?php echo base_url(''); ?>freelancer/tambah/upload" method="post" enctype="multipart/form-data">
		                <div class="form-group">
		                    <label>Nama Product</label>
		                      <input type="text" name="nama_produk" value="<?php echo set_value('nama_produk');?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="row">
		                    <div class="col-sm-6">
		                      <!-- select -->
		                      <div class="form-group">
		                        <label>Kategori</label>
		                        <select class="custom-select" name="kategori">
		                          <option>--Select Kategori--</option>
		                          <?php 
		                            foreach($kategori as $u){
		                          ?>
		                          <option  value="<?php echo $u->id_kategori ?>"><?php   echo $u->nama_kategori ?></option>
		                        <?php   }; ?>
		                        </select>
		                      </div>
		                    </div>
		                </div>
		                <div class="form-group">
		                    <label>Harga</label>
		                      <input type="text" name="harga" value="<?php echo set_value('harga');?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="form-group">
		                    <label>Deskripsi</label>
		                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="deskripsi" value="<?php echo set_value('deskripsi');?>"></textarea>
		                </div>
		                <div class="form-group">
		                    <label>Benefit</label>
		                    <textarea type="text" class="form-control" rows="3" placeholder="Enter ..." name="benefit" value="<?php echo set_value('deskripsi');?>"></textarea>
		                </div>
		                <div class="form-group">
		                    <label>Waktu Pengerjaan</label>
		                      <input type="text" name="waktu" value="<?php echo set_value('harga');?>" class="form-control" placeholder="Enter">
		                </div>
		                <div class="form-group">
		                <label for="exampleInputFile">Input Images</label>
		                <div class="input-group">
		                <input type="file" name="gambar">
		                </div>
		                </div>
		                <input type="submit" value="Tambah" class="btn btn-primary btn-block">
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