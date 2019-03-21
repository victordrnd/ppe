<?php
header('Content-type: text/html; charset=ISO-8859-1');
$root = '';
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';

$tel = new Produit;
$telinfo = $tel->getProduitByCat('TEL');
//var_dump($telinfo);
?>
<div  class="nav-link active color-dark h6 d-none d-md-block" style="text-align: center; margin-bottom: 50px; font-size: 2em;">
  T&eacute;l&eacute;phonie
</div>
<div class="container-fluid">
  <div class="row">

    <?php
    foreach($telinfo as $telephone){
      ?>
      <div class="col-sm-1 col-md-3">
        <div class="card border-0 shadow-small mt-3" >
          <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="card-img-top" alt="">
          <div class="card-body">
            <h6 class="card-title"><?=$telephone["PRODLibelle"]?></h6>
            <p class="text-muted small text-truncate"><?=$telephone["PRODDesc"] ?></p>
            <a href="#" class="btn btn-warning">Ajoutez au panier</a>
          </div>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
