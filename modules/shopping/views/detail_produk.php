
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">
        <form method="post" action="<?php echo base_url();?>shopping/tambah" method="post" accept-charset="utf8">

        <div class="card mt-4">
          <img class="card-img-top img-fluid" src="<?php echo base_url() .'images/'.$detail['gambar']; ?>" alt="">
          <div class="card-body">
            <h3 class="card-title"><?php echo $detail['nama_produk'];?></h3>
            <h4>Rp. <?php echo number_format($detail['harga'],0,",",".");?></h4>
            <p>Waktu Pengerjaan</p>
            <p class="card-text"><?php echo $detail['waktu_pengerjaan'];?> Hari</p>
            <span class="text-warning">&#9733; &#9733; &#9733; &#9733; &#9734;</span>
            4.0 stars
          </div>
        </div>
        <!-- /.card -->

        <div class="card card-outline-secondary my-4">
          <div class="card-header">
            <h4>About Job</h4>
          </div>
          <div class="card-body">
            <h5>Deskripsi</h5>
            <p><?php echo $detail['deskripsi'] ?></p>
            <hr>
            <h5>Benefit</h5>
            <p><?php echo $detail['benefit'] ?></p>
            <hr>
            <input type="hidden" name="id" value="<?php echo $detail['id_produk']; ?>" />
            <input type="hidden" name="nama" value="<?php echo $detail['nama_produk']; ?>" />
            <input type="hidden" name="harga" value="<?php echo $detail['harga']; ?>" />
            <input type="hidden" name="gambar" value="<?php echo $detail['gambar']; ?>" />
            <input type="hidden" name="qty" value="1" />
            <button class="btn btn-success">Add to Cart</button>
          </div>
        </div>
        <!-- /.card -->
      </form>

      </div>
      <!-- /.col-lg-9 -->

    </div>

  </div>
  <!-- /.container -->

