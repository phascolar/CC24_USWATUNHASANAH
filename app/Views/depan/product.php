<?php
foreach ($product as $prdk){
?>
  <!-- detail -->
  <div class="container mt-5">
    <div class="row row-container">
      <div class="row">
        <div class="col-lg-5 p-2">
          <img src="<?= $prdk('product_IMG')?>" alt="" style="width: 100%;">
        </div>
        <div class="col-lg-5 pt-3">
          <div class="row p-2">
            <h2 class="mb-3"><?= $prdk('product_name')?></h2>
          <p><?= $prdk('product_detail')?></p>
          <h5>Jumlah Produk: 145</h5>
          <h4><?= $prdk('product_price')?></h4>
          </div>
          
          <div class="row p-2"> 
            <button  class="btn btn-success d-grid mt-5 mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Keranjang</button>
            <button  class="btn btn-dark d-grid mb-5 " data-bs-toggle="modal" data-bs-target="#exampleModal">Chekout</button></div>
          
        </div>
       
      </div>

    </div>
  </div>

  <!-- Button trigger modal -->
  <?php
}
?>

<!-- Modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Chekout Barang</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <img src="gambar/j1.jpg" alt="" style="width: 100%;">
      <select class="form-select mt-2" aria-label="Default select example" style="width: 100px;">
        <option selected>pilih Ukuran</option>
        <option value="1">41</option>
        <option value="2">42</option>
        <option value="3">43</option>
      </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cencel</button>
        <button type="button" class="btn btn-dark">Bayar</button>
      </div>
    </div>
  </div>
</div>
 
