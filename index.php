<?php
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

?>
<body>

  <div class="position-relative overflow-hidden p-3 px-md-5 m-md-3 text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5 ">
      <h1 class="display-4 font-weight-normal">Les nouveaut&eacute;es</h1>
      <p class="lead font-weight-normal">StockPro, n&deg;1 du high-tech et du mat&eacute;riel informatique, &eacute;lu Service Client de l'Ann&eacute;e. Comparez et achetez en livraison rapide &agrave; domicile.</p>
      <a class="btn btn-warning" href="#">D&eacute;couvrez</a>
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
            <div class="card mt-2 mt-md-4 border-0 shadow-small card-height">
              <img id="menuImg" class="card-img-top w-100" alt="..." src="assets/index/gghome1.png" onmouseover="onHover(this.id);" onmouseout="offHover(this.id);"/>
              <div class="card-block p-3">
                <h5 class="card-title">
                  D&eacute;couvrez Google Home.
                </h5>
                <p class="card-text">
                  Google Home assistant vocal gris
                </p>
                <p><a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">149.99 &euro;</strong></p>
              </div>
            </div>
          </div>

          <div class="col-md-6 ">
            <div class="card mt-2 mt-md-4 border-0 shadow-small card-height">
              <img class="card-img-top"  alt="..." src="assets/index/phamtom.png" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Classic Phantom
                </h5>
                <p class="card-text">
                  Ressentez la musique avec une puissance, une nettet&eacute; et une clart&eacute; jamais atteintes.
                </p>
                <p><a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">1490 &euro;</strong></p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mt-2 mt-md-4 border-0 shadow-small card-height">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description produit
                </p>
                <p>
                  <a class="btn btn-warning" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card mt-2 mt-md-4 border-0 shadow-small card-height">
              <img class="card-img-top" alt="..." src="assets/index/test.jpg" />
              <div class="card-block p-3">
                <h5 class="card-title">
                  Card title
                </h5>
                <p class="card-text">
                  Description produit
                </p>
                <p>
                  <a class="btn btn-warning" href="#">Action</a> <a class="btn" href="#">Action</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <h1 class="text-center mt-5">Nos cat&eacute;gories</h1>
  <div class="row mt-5">
    <div class="col-md col-12 mt-5 mt-md-0 ml-md-3">
      <a class="text-dark" href="#"><div class="card border-0 shadow-small">
        <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
        <div class="card-img-overlay ">
          <h5 class="card-title">INFORMATIQUE</h5>
          <p class="card-text text-dark">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </a>
  </div>
  <div class="col-md col-12 mt-5 mt-md-0">
    <a class="text-dark"href="#"> <div class="card border-0 shadow-small ">
      <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title">IMAGE & SON</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </div>
</a>
<div class="col-md col-12 mt-5 mt-md-0 mr-md-3">
  <a class="text-dark" href="#"><div class="card border-0 shadow-small">
    <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">T&Eacute;L&Eacute;PHONIE & AUTO</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</a>
</div>
</div>
<div class="row mt-5">
  <div class="col-md col-12 mt-5 mt-md-0 ml-md-3">
    <a class="text-dark" href="#"><div class="card border-0 shadow-small">
      <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
      <div class="card-img-overlay">
        <h5 class="card-title">OBJET CONNECT&Eacute; & DOMOTIQUE</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
    </div>
  </a>
</div>
<div class="col-md col-12 mt-5 mt-md-0">
  <a class="text-dark" href="#">  <div class="card border-0 shadow-small">
    <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">JEUX VID&Eacute;O</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</a>
</div>
<div class="col-md col-12 mt-5 mt-md-0 mr-md-3">
  <a class="text-dark" href="#">  <div class="card border-0 shadow-small border-rounded">
    <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img" style="" alt="...">
    <div class="card-img-overlay">
      <h5 class="card-title">RECONDITIONN&Eacute; & OCCASION</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</a>
</div>
</div>
<h1 class="display-4 font-weight-normal text-center mt-5">Nouveaut&eacute;s</h1>
<div class="row mt-5">
  <div class="col-md-6 col-12 px-0">
    <img src="assets/index/samsung8k.png" alt="" class="w-100">
  </div>
  <div class="col-md-6 col-12 bg-white px-0">
    <div class="center-block">
      <h3 class="text-center display-4 mt-5" >Entrez dans une nouvelle dimension,<br />
        QLED 8K,
        La r&eacute;alit&eacute; plus que parfaite.
      </h3>
    </div>
  </div>
</div>
<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <div class="row">
        <div class="col-md-6">
          <div class="card border-0 shadow-small mt-5 card-height2">
            <div class="card border-0 text-center">
              <div class="card-body">
                <img class="w-75" src="assets/index/mavicpro.png" alt="">
                <h5 class="card-title mt-2">Mavic Pro 2</h5>
                <p class="card-text">Le dernier drone grandd public embl&eacute;matique de DJI.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="card border-0 shadow-small mt-5 card-height2">
            <div class="card border-0 text-center">
              <div class="card-body">
                <img class="w-50 " src="assets/index/applew.png" alt="">
                <h5 class="card-title mt-2">Apple Watch 4</h5>
                <p class="card-text">Toute nouvelle version. <br/>
                  Lib&eacute;rez le meilleur de vous&#45;m&ecirc;me.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-small mt-5 card-height2">
            <div class="card border-0 text-center">
              <div class="card-body">
                <img class="w-50 " src="assets/index/matex.png" alt="">
                <h5 class="card-title mt-2">Huawei Mate X</h5>
                <p class="card-text">Dites bonjour au tout premier t&eacute;l&eacute;phone 5G pliable le plus rapide au monde</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card border-0 shadow-small mt-5 card-height2">
            <div class="card border-0 text-center">
              <div class="card-body">
                <img class="w-75 " src="assets/index/xps.png" alt="">
                <h5 class="card-title mt-2">Ultrabook Dell XPS 13"</h5>
                <p class="card-text">Superbe &agrave; l&apos;int&eacute;rieur comme &agrave; l&apos;ext&eacute;rieur.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 px-0">
      <img class="w-100" alt="..." src="assets/index/s10buds.webp" />
    </div>
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
<script type="text/javascript">
function onHover(id)
{

  document.getElementById(id).src = 'assets/index/gghome2.png';
  //$("#" + id).attr('src', 'assets/index/gghome2.png');
}

function offHover(id)
{
  document.getElementById(id).src = 'assets/index/gghome1.png';
  //$("#"+id).attr('src', 'assets/index/gghome1.png');
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
.card-height{
  height: 30rem;
}
.card-height2{
  height: 20rem;
}
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
