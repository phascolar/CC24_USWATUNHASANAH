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
<!-- keranjang -->
<div class="container mt-5">
<div class="row">
<?php
foreach ($product as $prdk){
?>
    <div class="keranjang">
        <div class="row row-container rounded mt-2 mb-2">
            <div class="col-lg-3 col-md-3 p-3">
                <img src="<?= $prdk('product_img')?>" alt="" style="width: 100%;">
            </div>
            <div class="col-lg-7 col-md-7 p-3">
                <h5><?= $prdk('product_name')?></h5>
                <p class="mt-2"><?= $prdk('product_detail')?></p>
                <button class="btn btn-dark">Beli</button>
            </div>
        </div>
        <div class="row row-container rounded mt-2 mb-2">
            <div class="col-lg- p-3">
                <h5><?= $prdk('product_name')?></h5>
                <p class="mt-2"><?= $prdk('product_detail')?></p>
                <button class="btn btn-dark">Beli</button>
            </div>
        </div>
      
    </div>
    <?php }?>
</div>
  </div>
  <script src="<?= base_url('template/js/bootstrap.bundle.min.js')?>" ></script>
  </body>
</html>