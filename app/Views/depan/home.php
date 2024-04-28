<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="<?= base_url('css/bootstrap.min.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('template/css/style.css')?>">
  </head>
  <body>
   <!-- navbar -->
   <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <div class="container">
        <img src="<?= base_url('template/gambar/2.png')?>" alt="Bootstrap" width="50" height="54">
      <a class="navbar-brand m-2" href="#">Tok<strong>Line</strong></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <form class="d-flex ms-auto" role="search" name="keyword">
            <input class="form-control me-2" type="search" name="keyword" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?base_url('')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?base_url('keranjang')?>">keranjang</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?base_url('dashboard')?>">admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" aria-disabled="true">discount</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhirnav -->
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
<script src="<?= base_url('template/js/bootstrap.bundle.min.js')?>" ></script>
  </body>
</html>