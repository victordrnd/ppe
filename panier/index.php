<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
?>
<body>
  <h1 class="text-center mb-4">Votre panier</h1>
  <div class="row mx-md-5 mt-3 mx-2">
    <div class="col-md-8 col-12 p-3 shadow-small">
      <div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Cras justo odio</li>
          <li class="list-group-item">Dapibus ac facilisis in</li>
          <li class="list-group-item">Morbi leo risus</li>
          <li class="list-group-item">Porta ac consectetur ac</li>
          <li class="list-group-item">Vestibulum at eros</li>
        </ul>
      </div>
    </div>
    <div class="col-md col-12 p-0 mt-4 mt-md-0 ml-md-3">
      <div class="shadow-small p-3">
        <h3>Récapitulatif</h3>
        <h6 class="mt-3">Sous total : <span class="float-right">54€</span></h6>
        <p class="small"><strong>TVA : <span class="float-right">10€</span></strong></p>
        <h6 class="mt-5 border-top pt-3">Total : <span class="float-right">64€</span></h6>
      </div>
      <form class="card p-2 mt-5 border-0 shadow-small">
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Promo code">
          <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Appliquer</button>
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
