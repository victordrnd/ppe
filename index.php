<?php

include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

?>
<body>
  <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 font-weight-normal">Les nouveautées</h1>
      <p class="lead font-weight-normal">StockPro, n°1 du high-tech et du matériel informatique, élu Service Client de l'Année. Comparez et achetez en livraison rapide à domicile.</p>
      <a class="btn btn-outline-primary" href="#">Découvrez</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    ``<img class="mac" src="assets/index/macbook.png" alt="">
    <img class="s10" src="assets/index/s10.png" alt="">
  </div>
</body>
<style media="screen">
.mac {
  position: absolute;
  right: 5%;
  bottom: 10%;
  width:474px;
  height:374px;
  transform: rotate(30deg);
}
.s10 {
    position: absolute;
    width: 250px;
    right: auto;
    bottom: 0;
    left: 5%;
    transform: rotate(-30deg);
  }
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
