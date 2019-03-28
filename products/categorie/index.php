<?php
include  $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$produit = new Produit;

//Récupération du code dans l'url
if(isset($_GET['categorie'])) {
  $cat = $_GET['categorie'];
  //Chercher dans la bdd les info de cette categorie grace à l'Api
  $categorie = new Categorie;
  $categorieinfo = $categorie->getCategorieById($cat);
  $catlibelle = $categorieinfo[0]['CATLibelle'];

  $info = $produit->getProduitByCat($cat);
  //Select all products de catcode
}
else{
  exit;
}
?>
<body>

  <div class="">
    <h2  class="nav-link active d-md-block text-center display-4"><?= $catlibelle ?></h></h2>
    <div class="container-fluid ">
      <div class="row pb-4">

        <?php

        foreach($info as $chaqueproduit){
          ?>
          <div class="col-sm-1 col-md-3 d-flex">
            <div class="card border-0 shadow-small mt-3 flex-fill">
              <div class="row m-2">
                <div class="offset-10 col-2">
                  <span class="badge badge-secondary float-right">Dispo</span>
                </div>
              </div>


              <div class="card-img-top">
                <img src="../../assets/upload/produits/<?=$chaqueproduit['PRODRef']?>.png" class="d-block mx-auto w-50 mt-1" alt="">
              </div>

              <div class="card-body">
                <h6 class="card-title"><?=$chaqueproduit["PRODLibelle"]?></h6>
                <p class="text-muted small text-truncate"><?=$chaqueproduit["PRODDesc"] ?></p>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-8"><a href="#" class="btn btn-warning px-1 addtocart" id="<?=$chaqueproduit['PRODRef']?>">Ajoutez au panier</a></div>
                    <div class="col-4 mt-auto mb-auto "><strong><?=$chaqueproduit["PRODPrix"]?> &euro;</strong></div>
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
</body>

<script>

<script>
$('.addtocart').click(function(){
  $.ajax({
    type: 'GET',
    url: '../../process/addtocart.php',
    data: {
      'productId': this.id,
    }
  });
  var numberinCart = $('#numberInCart').html();
  $('#numberInCart').html(parseInt($('#numberInCart').html()) + 1);
})


</script>
</script>
