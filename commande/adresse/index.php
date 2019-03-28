<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$prixtotal = 0;
$panier = new Panier;
$panierinfo = $panier->getCart(true);
foreach($panierinfo as $produit){
  $prixtotal += $produit['Productinfo']['PRODPrix'] * $produit['number'];
}
if(isset($_SESSION['COUPONCode'])){
  $prixtotal *= (1 - ($_SESSION['COUPONReduction'] / 100));
}
$prixht = $prixtotal *0.8;
$tva = $prixtotal - $prixht;

?>
<body>
  <h1 class="text-center mt-5">Informations de livraison</h1>
  <div class="container mt-4">
    <div class="row">


      <div class="col-12 col-md-8">

        <form method="post" action="../paiement/">


        <div class="card shadow-small border-0 p-3">
          <h3>Adresse de livraison</h3>
          <label class="mt-3">Ville</label>
          <input type="text" class="form-control" name="ville" required/>
          <label class="mt-3">Code Postal</label>
          <input type="number" class="form-control" name="zip" required/>
          <label class="mt-3">Adresse</label>
          <textarea name="adresse" class="form-control" required></textarea>
        </div>
      </div>

      <div class="col-12 col-md-4">
        <h2>Récapitulatif</h2>
        <ul class="list-unstyled">
          <h6 class="mt-3">Sous total HT: <span class="float-right"><?=$prixht?>&euro;</span></h6>
          <p class="small"><strong>TVA : <span class="float-right"><?=$tva?>&euro;</span></strong></p>
          <h6 class="mt-5 border-top pt-3">Total : <span class="float-right"><?=$prixtotal?>&euro;</span></h6>
        </ul>
        <button type="submit" class="btn btn-warning w-100 mt-4">Procéder au paiement</button>
      </div>

      </form>
    </div>
  </div>
</body>
<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
