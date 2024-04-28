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




  <script src="<?= base_url('template/js/bootstrap.bundle.min.js')?>" ></script>
  </body>
</html>