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
            $display = 'd-block';
            foreach($productlist as $produit){
              $prixtotal += $produit['Productinfo']['PRODPrix'] * $produit['number'];
              ?>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-3">

                    <img src="../assets/upload/produits/<?=$produit['ProductId']?>.png" class="mt-4 my-auto img-fluid w-25 mx-auto d-block"/>
                  </div>
                  <div class="col-6">
                    <p class="mt-4 text-center align-middle"><?=$produit['Productinfo']['PRODLibelle']?></p>
                  </div>
                  <div class="col-1 col-md-2">

                    <span class="delete" id="<?=$produit['Productinfo']['PRODRef']?>"><i data-feather="trash" class="mr-5 text-warning"></i></span>
                    <input type="number" value="<?=$produit['number']?>" min="1" class="mt-4 form-groups border-0 w-25"/>
                  </div>
                  <div class="col-1">
                    <p class="mt-4 text-center ml-2 ml-md-0"><strong><?=$produit['Productinfo']['PRODPrix'] * $produit['number']?>&euro;</strong></p>
                  </div>
                </div>
              </li>
              <?php
            }
            $prixht = $prixtotal *0.8;
            $tva = $prixtotal - $prixht;
          }
          else{
            $prixht = 0;
            $tva = 0;
            $prixtotal = 0;
            $display = 'd-none';
            ?>
            <li class="list-group-item">
              <div class="row text-center">
                <div class="alert alert-light text-center col-12" role="alert">
                  Votre panier est vide.
                </div>
              </div>
            </li>
            <li class="list-group-item">
            </li>
            <?php
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
      <form class="card p-0 mt-5 border-0 shadow-small w-100">
        <div class="input-group">
          <input type="text" class="form-control border-0" placeholder="Code promo">
          <div class="input-group-append">
            <button type="submit" class="btn btn-warning">Appliquer</button>
          </div>
        </div>
      </form>
      <div class="mt-5">
        <a class="btn btn-warning w-100 <?=$display?>" href="../commande">Passer Commande <i data-feather="shopping-bag"></i></a>
      </div>
    </div>
  </div>


</body>
<script>
$('.delete').click(function(){
  $.ajax({
    type: 'GET',
    url: '../process/removefromcart.php',
    data: {
      'productId': this.id,
    }
  });
  location.reload();
})
</script>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
