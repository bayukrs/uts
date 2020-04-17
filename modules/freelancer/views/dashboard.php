<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	 <?php $this->load->view("freelancer/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("freelancer/_partials/navbar.php") ?>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view("freelancer/_partials/sidebar.php") ?>
		</aside>

		<div class="content-wrapper">
			<div class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0 text-dark">Your Product</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="#">Home</a></li>
		              <li class="breadcrumb-item active">Your Product</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Product</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th>
                          #
                      </th>
                      <th  class="text-center">
                          Gambar
                      </th>
                      <th >
                          Product Name
                      </th>
                      <th>
                      	Kategori
                      </th>
                      <th>
                          Price
                      </th>
                      <th  >
                          Desc
                      </th>
                      <th  >
                          Benefit
                      </th>
                      <th  >
                          Deadline
                      </th>
                      <th >
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($produk as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><img src="<?php echo base_url() . 'images/'.$u['gambar']; ?>"height="50px" width="50px"></td>
              	 	<td><?php echo $u['nama_produk'];?></td>
              	 	<td><?php echo $u['id_kategori'] ?></td>
              	 	<td><?php echo $u['harga'] ?></td>
              	 	<td><?php echo $u['deskripsi'] ?></td>
              	 	<td><?php echo $u['benefit'] ?></td>
              	 	<td><?php echo $u['waktu_pengerjaan'] ?></td>
              	 	<td class="project-actions text-right">
              	 		<div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<a href="<?php echo base_url();?>freelancer/edit/<?php echo $u['id_produk'];?>">Edit</a>
                        </i>
                        </div>
                        <div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-folder">
			      		<a href="<?php echo base_url();?>freelancer/hapus/<?php echo $u['id_produk'];?>">Hapus</a>
                        </i>
                        </div>
					</td>
              	 </tr>
              </tbody>
          <?php } ?>
              </table>
		</div>

		
	</div>

<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="<?php echo base_url()?>assets/dist/js/adminlte.js"></script>
</body>
</html>