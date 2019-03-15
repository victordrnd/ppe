<?php

include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

?>
<body style="user-select:none;">

  <div class="position-relative overflow-hidden p-3 px-md-5 m-md-3 text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5 ">
      <h1 class="display-4 font-weight-normal">Les nouveautées</h1>
      <p class="lead font-weight-normal">StockPro, n°1 du high-tech et du matériel informatique, élu Service Client de l'Année. Comparez et achetez en livraison rapide à domicile.</p>
      <a class="btn btn-outline-primary" href="#">Découvrez</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    <img class="mac d-none d-md-block rellax" data-rellax-speed="4" src="assets/index/macbook.png" alt="">
    <img class="s10 d-none d-md-block " data-rellax-speed="-3" src="assets/index/s10.png" alt="">
  </div>



  <div class="container-fluid">
    <div class="row mt-3">
      <div class="col-md-6 zoom mt-4">
        <img class="w-100 rellax d-none d-md-block" id="parralaximage" alt="..." src="assets/index/test.jpg" />
      </div>
      <div class="col-md-6">
        <div class="row">

          <div class="col-md-6">
            <div class="card mt-2 mt-md-4 border-0 shadow-small">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description prod
                </p>
                <p>
                  <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="card mt-2 mt-md-4 border-0 shadow-small">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description produit
                </p>
                <p>
                  <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mt-2 mt-md-4 border-0 shadow-small">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description produit
                </p>
                <p>
                  <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mt-2 mt-md-4 border-0 shadow-small">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description produit
                </p>
                <p>
                  <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h1 class="text-center">Nos catégories</h1>
  <div class="card mt-2 mt-md-4 border-0 shadow-small">
    <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
    <div class="card-block p-3">
      <h5 class="card-title">
        Card title
      </h5>
      <p class="card-text">
        Description produit
      </p>
      <p>
        <a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
      </p>
    </div>
  </div>

</body>
<script src="vendor/rellax.min.js"></script>
<script>
var rellax = new Rellax('.rellax', {
  speed:-5,
  vertical:true,
  horizontal: false
});

window.setInterval(stopparralax,200);
function stopparralax(){
  var rect = document.getElementById('parralaximage').getBoundingClientRect();
  console.log(rect.top);
  if(rect.top <= 170){
    rellax.destroy();
  }
}

</script>
<style media="screen">
.rellax{
}
.mac {
  position: absolute;
  right: 0%;
  top: 10%;
  width:474px;
  height:374px;
  transform: rotate(30deg);
}
.s10 {
  position: absolute;
  width: 200px;
  right: auto;
  bottom: 23%;
  left: 12%;
  transform: rotate(-30deg);
}
.zoom {
  transition: transform .2s;
  margin: 0 auto;
}

.zoom:hover {
  transition:0.3s;
}
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
