<!DOCTYPE html>
<html>
<head>
	<title>Tambah Kategori</title>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("admin/_partials/navbar.php") ?>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view("admin/_partials/sidebar.php") ?>
		</aside>

		<div class="content-wrapper">
			<section class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1>Add Kategori</h1>
		          </div>
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Add Kategori</li>
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
		              <form action="<?php echo base_url(''); ?>admin/add_kategori/tambah" method="post" enctype="multipart/form-data">
		                <div class="form-group">
		                    <label>Nama Kategori</label>
		                      <input type="text" name="nama_kategori" value="<?php echo set_value('nama_kategori');?>" class="form-control" placeholder="Enter">
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