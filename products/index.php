<?php
header('Content-type: text/html; charset=ISO-8859-1');
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$produit = new Produit;
$telinfo = $produit->getProduitByCat('TEL');

$infooccasion = $produit->getProduitByCat('OCCAS');

$infoson = $produit->getProduitByCat('IMAGESON');

$infoinformatique = $produit->getProduitByCat('INFORMATIQUE');

$infoconsole = $produit->getProduitByCat('CONS');

$infoobjet = $produit->getProduitByCat('OBJETSCO');
?>

<div>
<h2  class="nav-link active color-dark h6 d-none d-md-block text-center display-4">TELEPHONIE</h2>
  <div class="container-fluid">
    <div class="row">

      <?php
      foreach($telinfo as $telephone){
        ?>
        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <div class="card-img-top">
              <img src="../assets/upload/produits/<?=$telephone['PRODRef']?>.png" class="d-block mx-auto w-50" alt="">
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

<div class="bg-dark">
  <h2  class="nav-link active color-dark h6 d-none d-md-block text-center display-4 text-white">IMAGE & SON</h2>
  <div class="container-fluid">
    <div class="row">
      <?php
      foreach($infoson as $imageson){
        ?>

        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
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


<h2  class="nav-link active color-dark h6 d-none d-md-block text-center display-4">INFORMATIQUE</h2>
<div class="container-fluid">
  <div class="row">

    <?php
    foreach($infoinformatique as $informatique){
      ?>

      <div class="col-sm-1 col-md-3">
        <div class="card border-0 shadow-small mt-3" >
          <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
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


<div class="bg-dark">
  <h2  class="nav-link active color-dark h6 d-md-block text-center display-4 text-white display-4">JEUX VIDEO</h2>
  <div class="container-fluid">
    <div class="row">

      <?php
      foreach($infoconsole as $console){
        ?>

        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
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

<h2  class="nav-link active color-dark h6 d-md-block text-center display-4">OBJETS CONNECTES</h2>
<div class="container-fluid">
  <div class="row">

    <?php
    foreach($infoobjet as $objet){
      ?>

      <div class="col-sm-1 col-md-3">
        <div class="card border-0 shadow-small mt-3" >
          <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
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

<div class="bg-dark">
  <h2  class="nav-link active color-dark h6 d-md-block text-center display-4 text-white">OCCASIONS</h2>

  <div class="container-fluid">
    <div class="row">
      <?php
      foreach($infooccasion as $occasion){
        ?>
        <div class="col-sm-1 col-md-3">
          <div class="card border-0 shadow-small mt-3" >
            <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
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
<script>
$('.addtocart').click(function(){
  $.ajax({
    type: 'POST',
    url: '../process/addtocart.php',
    data: {
      'productId': this.id,
    }
  });
})


</script>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
