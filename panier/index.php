<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$panier = new Panier;
//unset($_SESSION['ProductsInCart']);
//unset($_SESSION['NumberCart']);
//echo $_SESSION['ProductsInCart'];
if(isset($_POST['coupon'])){
  $coupon = new Coupon;
  $coupon = $coupon->retrieve($_POST['coupon']);
  if(!empty($coupon[0]) && !Is_string($coupon)){
    $_SESSION['COUPONCode'] = $coupon['COUPONCode'];
    $_SESSION['COUPONReduction'] = $coupon['COUPONReduction'];
  }
  else{
    $error = $coupon;
  }
}
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

                    <img src="../assets/upload/produits/<?=$produit['ProductId']?>.png" class="mt-4 my-auto img-fluid w-50 mx-auto d-block"/>
                  </div>
                  <div class="col-6">
                    <p class="mt-4 text-center align-middle"><?=$produit['Productinfo']['PRODLibelle']?></p>
                  </div>
                  <div class="col-1 col-md-2">

                    <span class="delete" id="<?=$produit['Productinfo']['PRODRef']?>" style="cursor:pointer"><i data-feather="trash" class="mr-5 text-warning"></i></span>
                    <input type="number" value="<?=$produit['number']?>" min="1" data-id="<?=$produit['Productinfo']['PRODRef']?>" data-init-value="<?=$produit['number']?>" data-prix="<?=$produit['Productinfo']['PRODPrix']?>" class="mt-4 form-groups border-0 w-25 number"/>
                  </div>
                  <div class="col-1">
                    <p class="mt-4 text-center ml-2 ml-md-0 font-weight-bold prix-<?=$produit['Productinfo']['PRODRef']?>"><?=$produit['Productinfo']['PRODPrix'] * $produit['number']?>&euro;</p>
                  </div>
                </div>
              </li>
              <?php
            }

            if(isset($coupon['COUPONCode'])){
              $prixtotal *= (1 - ($coupon['COUPONReduction'] / 100));
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
        <h6 class="mt-3">Sous total HT: <span class="float-right" id="prixHT"><?=$prixht?>&euro;</span></h6>
        <p class="small"><strong>TVA : <span class="float-right" id="tva"><?=$tva?>&euro;</span></strong></p>
        <?php
        if(isset($coupon['COUPONCode'])){
          echo '<p class="small"><strong>Réduction : <span class="float-right">'.$coupon['COUPONReduction'].'%</span></strong></p>';
        }
        ?>
        <h6 class="mt-5 border-top pt-3">Total : <span class="float-right" id="prixTotal"><?=$prixtotal?>&euro;</span></h6>
      </div>
      <?php
      if(isset($error)){
        echo '<div class="alert alert-warning mt-2" role="alert">
        Le coupon n&apos;existe pas.
        </div>';
      }
      ?>
      <form class="card p-0 mt-5 border-0 shadow-small w-100" method="post" action="">

        <div class="input-group">
          <input type="text" class="form-control border-0" name="coupon" placeholder="Code promo">
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
//gestion des quantités

$('.number').change(function(){
  var initvalue = $(this).attr('data-init-value');
  var prodid = $(this).attr('data-id');
  var PrixUnit = $(this).attr('data-prix');
  var prixProd= $('.prix-'+prodid).html();
  var prixTotal = $('#prixTotal').html();
  prixTotal = parseInt(prixTotal.substring(0, prixTotal.length-1));
  if(this.value > initvalue){
    //add to cart
    var number = this.value - initvalue;
    $.ajax({
      type: 'GET',
      url: '../process/addQtyFromCart.php',
      data: {
        'productId': prodid,
        'number': number
      }
    });

    //Gestion du prix de la ligne
    prixProd = parseInt(prixProd.substring(0, prixProd.length-1));
    var newprixProd = prixProd + parseInt(PrixUnit * number);

    //Gestion du prix total
    var newprixTotal = prixTotal + parseInt(PrixUnit * number);


  }


  else if(this.value < initvalue){
    //remove from cart
    var number = initvalue - this.value;
    $.ajax({
      type: 'GET',
      url: '../process/removeQtyFromCart.php',
      data: {
        'productId': prodid,
        'number': number
      }
    });
    //gestion du prix de la ligne
    prixProd = parseInt(prixProd.substring(0, prixProd.length-1));
    var newprixProd = prixProd - (parseInt(PrixUnit *number) );

    //Gestion du prix total
    var newprixTotal = prixTotal - parseInt(PrixUnit * number);


  }
  $('.prix-'+prodid).html(newprixProd + '€');
  $('#prixTotal').html(newprixTotal + '€');
  //Gestion de la tva et prix HT
  var tva = $('#tva').html();
  tva = parseInt(tva.substring(0, tva.length-1));
  tva = newprixTotal * 0.2;
  tva = Math.round( tva * 10 ) / 10;
  $('#tva').html(tva +'€');


  var prixHT =$('#prixHT').html();
  prixHT = parseInt(prixHT.substring(0, prixHT.length-1));
  prixHT = newprixTotal * 0.8;
  prixHT = Math.round( prixHT * 10 ) / 10;
  $('#prixHT').html(prixHT +'€');

  this.setAttribute('data-init-value', this.value);
});


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
