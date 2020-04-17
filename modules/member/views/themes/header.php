<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>KeyJob</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url()?>assets/css/shop-homepage.css" rel="stylesheet">
  <link href="<?php echo base_url()?>assets/css/freelancer.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php echo base_url() ?>">KeyJob</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">How to buy</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url()?>member/tampil_cart">Cart</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h2 class="my-4">Welcome</h2>
        <h1 class="my-4"><?php echo ucfirst($this->session->userdata('nama')) ?></h1>
        <a href="<?php echo base_url()?>member/login/logout">Logout</a>
        <div class="list-group">
          <a href="<?php echo base_url()?>member" class="list-group-item">All Category</a>
          <?php
            foreach ($kategori as $row) {
          ?>
          <a href="<?php echo base_url()?>member/index/<?php echo $row['id_kategori'];?>" class="list-group-item"><?php echo $row['nama_kategori'];?></a>
          <?php } ?>
        </div>

        <div class="list-group">
          <a href="<?php echo base_url()?>member/tampil_cart" class="list-group-item"><strong><i class="glyphicon glyphiconshopping-cart"></i> Cart</strong></a>
          <?php 
            $cart= $this->cart->contents(); 
            // If cart is empty, this will show below message.
            if(empty($cart)) {
          ?>
          <a class="list-group-item">Empty</a>
          <?php
            }else {
              $grand_total = 0;
              foreach ($cart as $item){
                $grand_total+=$item['subtotal'];
          ?>
          <a class="list-group-item">
            <?php echo $item['name']; ?> (<?php echo $item['qty']; ?> x <?php echo number_format($item['price'],0,",","."); ?>)=<?php echo number_format($item['subtotal'],0,",","."); ?></a>
          <?php }?>
          <?php }?>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      