<?php
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

$produit = new Produit;
$telinfo = $produit->getProduitByCat('TEL', 8);

//var_dump($telinfo);

$infooccasion = $produit->getProduitByCat('OCCAS', 8);

$infoson = $produit->getProduitByCat('IMAGESON', 8);

$infoinformatique = $produit->getProduitByCat('INFORMATIQUE', 8);

$infoconsole = $produit->getProduitByCat('CONS', 8);

$infoobjet = $produit->getProduitByCat('OBJETSCO', 8);
?>

<div class="row">
  <div class="col-md-8 col-12">

  </div>
  <div class="col-md-4 col-12">
    <div class="bs-component mt-4 mr-4">
          <div class="alert alert-dismissible alert-secondary">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>StockPro!</strong> -25% sur tous les articles avant minuit avec le code: <strong>CHARTREUX25</strong>
          </div>
        </div>
  </div>
</div>
<div class="">
  <h2  class="nav-link active d-md-block text-center display-4">TELEPHONIE</h2>
  <div class="container-fluid ">
    <div class="row pb-4">

      <?php
      foreach($telinfo as $telephone){
        ?>
        <div class="col-sm-1 col-md-3 d-flex">
          <div class="card border-0 shadow-small mt-3 flex-fill ">
            <div class="row m-2">
              <div class="offset-10 col-2">
                <span class="badge badge-secondary float-right">Dispo</span>
              </div>
            </div>


            <div class="card-img-top" id="<?=$telephone['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$telephone['PRODRef']?>.png"  class="d-block mx-auto w-50 mt-1" alt="">
            </div>

            <div class="card-body">
              <h6 class="card-title"><?=$telephone["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$telephone["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning px-1 addtocart" id="<?=$telephone['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto "><strong><?=$telephone["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>

    </div>
  </div>
</div>

<div class="row ">
  <div class="col my-4">
    <a href="categorie/?categorie=TEL" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus de téléphones</a>
  </div>
</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>


<div>
  <h2  class="nav-link active h6 d-none d-md-block text-center display-4">IMAGE & SON</h2>
  <div class="container-fluid">
    <div class="row pb-4">
      <?php
      foreach($infoson as $imageson){
        ?>

        <div class="col-sm-1 col-md-3 d-flex">
          <div class="card border-0 shadow-small mt-3 flex-fill" >
            <div class="card-img-top" id="<?=$imageson['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$imageson['PRODRef']?>.png" class="d-block mx-auto w-50 mt-1" alt="">
            </div>

            <div class="card-body">
              <h6 class="card-title"><?=$imageson["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$imageson["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning addtocart" id="<?=$imageson['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto px-0"><strong><?=$imageson["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col my-4">
    <a href="categorie/?categorie=IMAGESON" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus de produits</a>
  </div>
</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>

<div >
  <h2  class="nav-link active  h6 d-none d-md-block text-center display-4">INFORMATIQUE</h2>
  <div class="container-fluid">
    <div class="row pb-4">

      <?php
      foreach($infoinformatique as $informatique){
        ?>

        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <div class="card-img-top" id="<?=$informatique['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$informatique['PRODRef']?>.png" class="card-img-top" alt="">
            </div>

            <div class="card-body">
              <h6 class="card-title"><?=$informatique["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$informatique["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning addtocart" id="<?=$informatique['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto px-0"><strong><?=$informatique["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
      }
      ?>
    </div>
  </div>
</div>


  <div class="col my-4">
    <a href="categorie/?categorie=INFORMATIQUE" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus de produits</a>

</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>

<div>
  <h2  class="nav-link active color-dark h6 d-md-block text-center display-4  display-4">JEUX VIDEO</h2>
  <div class="container-fluid">
    <div class="row pb-4">

      <?php
      foreach($infoconsole as $console){
        ?>

        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <div class="card-img-top" id="<?=$console['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$console['PRODRef']?>.png" class="card-img-top" alt="">
            </div>
            <div class="card-body">
              <h6 class="card-title"><?= $console["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$console["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning addtocart" id="<?=$console['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto px-0"><strong><?=$console["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col my-4">
    <a href="categorie/?categorie=CONS" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus de produits</a>
  </div>
</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>


<div >
  <h2  class="nav-link active  h6 d-md-block text-center display-4">OBJETS CONNECTES</h2>
  <div class="container-fluid">
    <div class="row pb-4">

      <?php
      foreach($infoobjet as $objet){
        ?>

        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <div class="card-img-top" id="<?=$objet['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$objet['PRODRef']?>.png" class="card-img-top" alt="">
            </div>

            <div class="card-body">
              <h6 class="card-title"><?= $objet["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$objet["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning addtocart" id="<?=$objet['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto px-0"><strong><?=$objet["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col my-4">
    <a href="categorie/?categorie=OBJETSCO" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus d'objets connectés</a>
  </div>
</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>

<div >
  <h2  class="nav-link active color-dark h6 d-md-block text-center display-4 ">RECONDITIONNE</h2>

  <div class="container-fluid">
    <div class="row pb-4">
      <?php
      foreach($infooccasion as $occasion){
        ?>
        <div class="col-sm-1 col-md-3 d-flex">
          <div class="card border-0 shadow-small mt-3 flex-fill" >
            <div class="card-img-top" id="<?=$occasion['PRODRef']?>">
              <img src="../assets/upload/produits/<?=$occasion['PRODRef']?>.png" class="card-img-top" alt="">
            </div>

            <div class="card-body">
              <h6 class="card-title"><?= $occasion["PRODLibelle"]?></h6>
              <p class="text-muted small text-truncate"><?=$occasion["PRODDesc"] ?></p>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-8"><a href="#" class="btn btn-warning addtocart" id="<?=$occasion['PRODRef']?>">Ajoutez au panier</a></div>
                  <div class="col-4 mt-auto mb-auto px-0"><strong><?=$occasion["PRODPrix"]?> &euro;</strong></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>

<div class="row ">
  <div class="col my-4">
    <a href="categorie/?categorie=OCCAS" class="btn btn-warning  mr-5 w-25 d-block mx-auto">Voir plus d'occasions</a>
  </div>
</div>

<div class="row border-bottom border-warning w-50 d-block mx-auto"></div>

<script>
$('.addtocart').click(function(){
  $.ajax({
    type: 'GET',
    url: '../process/addtocart.php',
    data: {
      'productId': this.id,
    }
  });
  var numberinCart = $('#numberInCart').html();
  $('#numberInCart').html(parseInt($('#numberInCart').html()) + 1);
})

$('.card').children('.card-img-top').click(function(){
  window.location.href= "details/?ProduitId="+this.id;
})

</script>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
<style>

.card-img-top{
    cursor:pointer;
  }
</style>
