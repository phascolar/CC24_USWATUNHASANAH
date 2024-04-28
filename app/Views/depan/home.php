<?= renderSection('layout/template') ?>
<?= section('template')?>  
  <!-- slider -->
  <div class="container mt-5">
    <div id="carouselExampleRide" class="carousel slide mt-5" data-bs-ride="true">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?= base_url('template/gambar/lombauntag.png')?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('template/')?>" class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="<?= base_url('template/')?>" class="d-block w-100" alt="...">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
  </div>
  <!-- akhir slider -->
  <!-- user -->
  <div class="container mt-5">
    <div class="user">
        <div class="row row-container text-center p-2">
            <div class="col-lg-4">
                <a href="">
                    <img src="<?= base_url('template/gambar/7.png')?>" alt="" width="120">
                </a>
                <h3>Ardhie Nurdianto</h3>
                <p>User Managemen</p>
            </div>
            <div class="col-lg-4">
                <a href="">
                <img src="<?= base_url('template/gambar/6.png')?>" alt="" width="120">
                </a>
                <h3>Keranjang</h3>
                <p>User Managemen</p>
            </div>
            <div class="col-lg-4">
                <a href="">
                <img src="<?= base_url('template/gambar/8.png')?>" alt="" width="120">
                </a>
                <h3>Riwayat Pembelian</h3>
                <p>User Managemen</p>
            </div>
        </div>
    </div>
  </div>
<!-- akhir user -->

<!-- produck -->
<div class="container">
    <div class="row row-container mb-2 mt-5 text-center p-3">
<h3>Produk</h3>
    </div>
    <div class="row row-container p-2">

<?php
foreach ($product as $prdk){
?>
<div class="col-lg-2 col-md-2 col-sm-4 col-6 text-center mt-2">
    <div class="card" >
        <img src="<?= $prdk('product_img')?>" class="card-img-top" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title"><?= $prdk('product_name')?></h5>
          <p class="card-text"><?= $prdk('product_price')?></p>
          <form action="<?= base_url('')?>">
            <a href="<?= $prdk('product_id')?>" class="btn btn-dark d-grid">keranjang</a>
          </form>
        </div>
    </div>
</div>
<?php
}
?>


    </div>
</div>
<?= endSection()?>  