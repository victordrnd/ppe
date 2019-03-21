<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$panier = new Panier;

?>
<body>
  <h1 class="text-center mb-4">Votre panier</h1>
  <div class="row mx-md-5 mt-3 mx-2">
    <div class="col-md-8 col-12 p-3 shadow-small">
      <div>
        <ul class="list-group list-group-flush">

          <?php
          if(!empty($panier->getCart(true))){
            $productlist = $panier->getCart(true);
            $prixtotal = 0;
            foreach($productlist as $produit){
              $prixtotal += $produit['Productinfo']['PRODPrix'];
              ?>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-3">
                    <img src="https://launches-media.endclothing.com/EE3709_launches_thumbnail.jpg" class="w-100 mt-4 mt-md-0"/>
                  </div>
                  <div class="col-6">
                    <p class="mt-4 text-center "><?=$produit['Productinfo']['PRODLibelle']?></p>
                  </div>
                  <div class="col-1 col-md-2">
                    <input type="number" value="<?=$produit['number']?>" class="mt-4 form-groups border-0 w-50"/>
                  </div>
                  <div class="col-1">
                    <p class="mt-4 text-center ml-2 ml-md-0"><strong><?=$produit['Productinfo']['PRODPrix']?>&euro;</strong></p>
                  </div>
                </div>
              </li>
              <?php
            }
            $prixht = $prixtotal *0.8;
            $tva = $prixtotal - $prixht;
          }
          ?>
        </ul>
      </div>
    </div>
    <div class="col-md col-12 p-0 mt-4 mt-md-0 ml-md-3">
      <div class="shadow-small p-3">
        <h3>Récapitulatif</h3>
        <h6 class="mt-3">Sous total HT: <span class="float-right"><?=$prixht?>&euro;</span></h6>
        <p class="small"><strong>TVA : <span class="float-right"><?=$tva?>&euro;</span></strong></p>
        <h6 class="mt-5 border-top pt-3">Total : <span class="float-right"><?=$prixtotal?>&euro;</span></h6>
      </div>
      <form class="card p-0 mt-5 border-0 shadow-small">
        <div class="input-group">
          <input type="text" class="form-control border-0" placeholder="Code promo">
          <div class="input-group-append">
            <button type="submit" class="btn btn-secondary">Appliquer</button>
          </div>
        </div>
      </form>
      <!--<div class="shadow-small mt-4 p-2">
      <h6>Avez vous un code promo ?</h6>
      <input type="text" class="form-control  " />
    </div>-->
  </div>
</div>


</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
