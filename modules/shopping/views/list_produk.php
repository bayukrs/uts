        <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?php echo base_url()?>images/tamplate/gambar1.jpeg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo base_url()?>images/tamplate/gambar2.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?php echo base_url()?>images/tamplate/gambar3.jpeg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
        
        <div class="row">
           <?php
            foreach ($produk as $row) {
          ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">
              <a href="#"><img class="card-img-top" src="<?php echo base_url() . 'images/'.$row['gambar']; ?>" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#"><?php echo $row['nama_produk'];?></a>
                </h4>
                <h5>Rp. <?php echo number_format($row['harga'],0,",",".");?></h5>
                <p class="card-text"><?php echo $row['deskripsi'];?></p>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                <a href="<?php echo base_url();?>shopping/detail_produk/<?php echo $row['id_produk'];?>" class="btn btn-sm btn-default"><i class="glyphicon glyphicon-search"></i> Buy
                </a>
                <input type="hidden" name="id" value="<?php echo $row['id_produk']; ?>" />
                <input type="hidden" name="nama" value="<?php echo $row['nama_produk']; ?>" />
                <input type="hidden" name="harga" value="<?php echo $row['harga']; ?>" />
                <input type="hidden" name="gambar" value="<?php echo $row['gambar']; ?>" />
                <input type="hidden" name="qty" value="1" />
                <button type="submit" class="btn btn-sm btnsuccess"><i class="glyphicon glyphicon-shopping-cart"></i>add to cart</button>
              </div>
            </form>
            </div>
          </div>
            <?php 
          }
         ?>
        </div>
        
        <!-- /.row -->