<?php
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<body>

  <div class="position-relative overflow-hidden p-3 px-md-5 m-md-3 text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5 ">
      <h1 class="display-4 font-weight-normal">Les nouveautées</h1>
      <p class="lead font-weight-normal">StockPro, n&deg;1 du high-tech et du matériel informatique, élu Service Client de l'Année. Comparez et achetez en livraison rapide &agrave; domicile.</p>
      <a class="btn btn-warning" href="#">Découvrez</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    <img class="mac d-none d-md-block rellax" data-rellax-speed="4" src="assets/index/macbook.png" alt="">
    <img class="s10 d-none d-md-block " data-rellax-speed="-3" src="assets/index/s10.png" alt="">
  </div>



  <div class="container-fluid">
    <div class="row mt-3 px-xl-5">
      <div class="col-md-6 zoom mt-4">
        <img class="w-100 rellax d-none d-md-block" id="parralaximage" alt="..." src="assets/index/test.jpg" />
      </div>
      <div class="col-md-6">

        <div class="row">

          <div class="col-md-6 d-flex">
            <div class="card mt-2 mt-md-4 border-0 shadow-small  flex-fill">
              <img id="menuImg" class="card-img-top w-75 img-fluid mx-auto d-block" alt="..." src="assets/index/gghome1.png" onmouseover="onHover(this.id);" onmouseout="offHover(this.id);"/>
              <div class="card-block p-3">
                <h5 class="card-title">Découvrez Google Home.</h5>
                <p class="card-text">Google Home assistant vocal gris</p>
                <a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">149.99 &euro;</strong>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex">
            <div class="card mt-2 mt-md-4 border-0 shadow-small  flex-fill">
              <img class="card-img-top w-75 img-fluid mx-auto d-block"  alt="..." src="assets/index/phamtom.png" />
              <div class="card-block p-3">
                <h5 class="card-title">Classic Phantom</h5>
                <p class="card-text text-truncate">Ressentez la musique avec une puissance, une netteté et une clarté jamais atteintes.</p>
                <a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">1490 &euro;</strong>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex">
            <div class="card mt-2 mt-md-4 border-0 shadow-small flex-fill">
              <img id="menuImg" class="card-img-top w-50 img-fluid mx-auto d-block mt-4" alt="..." src="assets/index/airpods.png" onmouseover="onHover(this.id);" onmouseout="offHover(this.id);"/>
              <div class="card-block p-3">
                <h5 class="card-title">AirPods V2 <span class="btn btn-outline-warning px-2 py-0 small " style="font-size:0.6rem">New</span></h5>

                <p class="card-text">Avec boitier de charge sans fil</p>
                <a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">239 &euro;</strong>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex">
            <div class="card mt-2 mt-md-4 border-0 shadow-small flex-fill">
              <img id="menuImg" class="card-img-top w-50  img-fluid mx-auto d-block" alt="..." src="assets/index/p30pro.webp" onmouseover="onHover(this.id);" onmouseout="offHover(this.id);"/>
              <div class="card-block p-3">
                <h5 class="card-title">Huawei P30 Pro</h5>
                <p class="card-text">Aussi bon en photographie qu'en vrai</p>
                <a class="btn btn-warning" href="#">Achetez</a><strong class="float-right">999 &euro;</strong>
              </div>
            </div>
          </div>



        </div>
      </div>
    </div>
  </div>

  <h1 class="text-center mt-5">Nos catégories</h1>
  <div class="row mt-5 mx-lg-5">

    <div class="col-md col-12 mt-5 mt-md-0 mx-lg-5 d-flex">
      <div class="card border-0 shadow-small flex-fill categorie" id="INFORMATIQUE">
        <img src="assets/index/video_call.svg" class="card-img w-75 mx-auto d-block" style="" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center mt-5">INFORMATIQUE</h5>
        </div>
      </div>
    </div>

    <div class="col-md col-12 mt-5 mt-md-0 mx-lg-5 d-flex">
      <div class="card border-0 shadow-small flex-fill categorie" id="IMAGESON">
        <img src="assets/index/vr.svg" class="card-img w-75 mx-auto d-block" style="" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center mt-4">IMAGE & SON</h5>
        </div>
      </div>
    </div>

    <div class="col-md col-12 mt-5 mt-md-0 mr-md-3 mx-lg-5 d-flex" id="TEL">
      <div class="card border-0 shadow-small flex-fill categorie">
        <img src="assets/index/mobile_phone.svg" class="card-img w-75 mx-auto d-block" style="" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">TÉLÉPHONIE</h5>
        </div>
      </div>
    </div>
  </div>

  <div class="row mt-5 mx-lg-5">
    <div class="col-md col-12 mt-5 mt-md-0 mr-md-3 mx-lg-5 d-flex ">
      <div class="card border-0 shadow-small flex-fill categorie" id="OBJETSCO">
        <img src="assets/index/data_center.svg" class="card-img w-75 mx-auto d-block" style="" alt="...">
        <div class="card-body mt-2">
          <h5 class="card-title text-center mt-5">OBJETS CONNECTÉS</h5>
        </div>
      </div>
    </div>

    <div class="col-md col-12 mt-5 mt-md-0 mr-md-3 mx-lg-5 d-flex">
      <div class="card border-0 shadow-small flex-fill categorie" id="CONS">
        <img src="assets/index/game_time.svg" class="card-img w-75 mx-auto d-block mt-5" style="" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center mt-5">JEUX VIDÉO</h5>
        </div>
      </div>
    </div>

    <div class="col-md col-12 mt-5 mt-md-0 mr-md-3 mx-lg-5 d-flex">
      <div class="card border-0 shadow-small flex-fill categorie" id="OCCAS">
        <img src="assets/index/online_shopping.svg" class="card-img w-75 mx-auto d-block" style="" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center mb-2">RECONDITIONNÉS</h5>
        </div>
      </div>
    </div>
  </div>
  <h1 class="display-4 font-weight-normal text-center mt-5">Nouveautés</h1>
  <div class="row mt-5">
    <div class="col-md-6 col-12 px-0">
      <img src="assets/index/samsung8k.png" alt="" class="w-100">
    </div>
    <div class="col-md-6 col-12 bg-white px-0">
      <div class="center-block">
        <h3 class="text-center display-4 mt-5" >Entrez dans une nouvelle dimension,<br />
          QLED 8K,
          La réalité plus que parfaite.
        </h3>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class="row" >
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6 d-flex">
            <div class="card border-0 shadow-small mt-5 flex-fill">
              <div class="text-center">
                <div class="card-body">
                  <img class="w-75" src="assets/index/mavicpro.png" alt="">
                  <h5 class="card-title mt-2">Mavic Pro 2</h5>
                  <p class="card-text">Le dernier drone grand public emblématique de DJI.</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 d-flex">
            <div class="card border-0 shadow-small mt-5 flex-fill">
              <div class="text-center">
                <div class="card-body">
                  <img class="w-50 " src="assets/index/applew.png" alt="">
                  <h5 class="card-title mt-2">Apple Watch 4</h5>
                  <p class="card-text">Toute nouvelle version. <br/>
                    Libérez le meilleur de vous&#45;m&ecirc;me.</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 d-flex">
              <div class="card border-0 shadow-small mt-5 flex-fill">
                <div class="text-center">
                  <div class="card-body">
                    <img class="w-50 " src="assets/index/matex.png" alt="">
                    <h5 class="card-title mt-2">Huawei Mate X</h5>
                    <p class="card-text">Dites bonjour au tout premier téléphone 5G pliable le plus rapide au monde</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 d-flex">
              <div class="card border-0 shadow-small mt-5 flex-fill">
                <div class="text-center">
                  <div class="card-body">
                    <img class="w-75 " src="assets/index/xps.png" alt="">
                    <h5 class="card-title mt-2">Ultrabook Dell XPS 13"</h5>
                    <p class="card-text">Superbe &agrave; l&apos;intérieur comme &agrave; l&apos;extérieur.</p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <div class="col-md-6 px-0" >
          <img class="w-100" style="height:640px;" alt="..." src="assets/index/s10buds.webp" />
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col mt-5">
          <div class="card border-0 shadow-small">
            <h2 class="text-center mt-2">Pour toutes commandes passée avant minuit <i class="fas fa-stopwatch"></i></h2>
            <h3 class="text-center m-2">-25% sur tous les articles avec le code: CHARTREUX25</h3>
          </div>
        </div>
      </div>
    </div>
    <?php
    if(!isset($_COOKIE['rgpd'])):?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert" style="position:fixed; bottom:10px;left:50%; transform:translateX(-50%)">
      <strong>RGPD</strong> Acceptez vous l'utilisation des cookies ? <strong id="cookie">Oui</strong>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endif?>






</body>
<script src="vendor/rellax.min.js"></script>
<script>

$('#cookie').click(function(){
  document.cookie= 'rgpd=true';
  $('.alert').hide();
})
var rellax = new Rellax('.rellax', {
  speed:-5,
  vertical:true,
  horizontal: false
});

$(window).on('scroll', function(e){
  var rect = document.getElementById('parralaximage').getBoundingClientRect();
  console.log(rect.top);
  if(rect.top <= 240){
    rellax.destroy();
  }
});

</script>
<script type="text/javascript">
$('.categorie').click(function(){
  window.location.href="products/categorie/?categorie="+this.id;
});

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
#cookie{
  cursor:pointer;
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
.card-top{
  /*max-height: 270px;*/
  height:460px;
}
</style>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
