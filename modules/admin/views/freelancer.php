<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	 <?php $this->load->view("admin/_partials/head.php") ?>
</head>
<body class="hold-transition sidebar-mini">
	<div class="wrapper">
		<?php $this->load->view("admin/_partials/navbar.php") ?>

		<aside class="main-sidebar sidebar-dark-primary elevation-4">
			<?php $this->load->view("admin/_partials/sidebar.php") ?>
		</aside>

		<div class="content-wrapper">
			<div class="content-header">
		      <div class="container-fluid">
		        <div class="row mb-2">
		          <div class="col-sm-6">
		            <h1 class="m-0 text-dark">List Freelancer</h1>
		          </div><!-- /.col -->
		          <div class="col-sm-6">
		            <ol class="breadcrumb float-sm-right">
		              <li class="breadcrumb-item"><a href="admin">Home</a></li>
		              <li class="breadcrumb-item active">List Freelancer</li>
		            </ol>
		          </div><!-- /.col -->
		        </div><!-- /.row -->
		      </div><!-- /.container-fluid -->
		    </div>
		    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Freelancer</h3>

          <div class="card-tools">
            <div class="btn btn-outline-primary btn-sm">
                    <i class="fas fa-plus">
                <a href="<?php echo base_url();?>admin/add_kategori?>">Tambah</a>
                        </i>
                        </div>
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
                          id
                      </th>
                      <th >
                          Freelancer Name
                      </th>
                      <th >
                          UserName
                      </th>
                      <th >
                          Email
                      </th>
                      <th >
                      </th>
                  </tr>
              </thead>

              <tbody>
              	<?php 
              		$no = 1;
              		foreach($freelancer as $u){
              	 ?>
              	 <tr>
              	 	<td><?php echo $no++ ?></td>
              	 	<td><?php echo $u['id_freelancer'] ?></td>
                  <td><?php echo $u['nama'];?></td>
                  <td><?php echo $u['username'];?></td>
                  <td><?php echo $u['email'];?></td>
              	 	
              	 	<td class="project-actions text-right">
                        <div class="btn btn-outline-primary btn-sm">
              	 		<i class="fas fa-minus">
			      		<a href="<?php echo base_url();?>admin/freelancer/hapus/<?php echo $u['id_freelancer'];?>">Hapus</a>
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