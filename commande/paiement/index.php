<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$prixtotal = 0;
$panier = new Panier;
$panierinfo = $panier->getCart(true);
foreach($panierinfo as $produit){
  $prixtotal += $produit['Productinfo']['PRODPrix'] * $produit['number'];
}
$prixht = $prixtotal *0.8;
$tva = $prixtotal - $prixht;
?>
<body>
  <div class="container mt-5">
    <div class="row">


      <div class="col-12 col-md-8">
        <div class="card shadow-small border-0 p-3">
          <h2>Paiement</h2>

          <label class="small text-muted text-center mx-auto d-block">(code : 4242 4242 4242 4242 le reste peu importe )</label>
          <form action="charge" method="post" class="mt-2" id="payment-form">
            <div id="card-element" class="uk-box-shadow-medium" style="margin-left:auto;margin-right:auto;display:block;">
              <!-- A Stripe Element will be inserted here. -->
            </div>
            <div id="card-errors" role="alert" style="text-align:center;color:#fa755a !important" class="text-danger"></div>
            <button type="submit" name="submit" style="margin-left:auto;margin-right:auto;display:block;margin-bottom:20px;">Autoriser le paiement </button>
          </form>
          <p class="text-center">ou payez avec Apple Pay</p>
          <div class="apple-pay">
            <a href="" class="btn btn-dark w-100 p-0"><i class="fab fa-apple-pay fa-2x"></i></a>
          </div>

        </div>
      </div>

      <div class="col-12 col-md-4">
        <h2>Récapitulatif</h2>
        <ul class="list-unstyled">
          <h6 class="mt-3">Sous total HT: <span class="float-right"><?=$prixht?>&euro;</span></h6>
          <p class="small"><strong>TVA : <span class="float-right"><?=$tva?>&euro;</span></strong></p>
          <h6 class="mt-5 border-top pt-3">Total : <span class="float-right"><?=$prixtotal?>&euro;</span></h6>
        </ul>
      </div>
    </div>
  </div>
</body>


<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
<script src="https://js.stripe.com/v3/"></script>
<script>
var stripe = Stripe('pk_test_xk7nPQcNZGpXtniL0jxmrgCm');
var elements = stripe.elements();
var style = {
  base: {
    color: '#32325d',
    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
    fontSmoothing: 'antialiased',
    fontSize: '16px',
    '::placeholder': {
      color: '#aab7c4'
    }
  },
  invalid: {
    color: '#fa755a',
    iconColor: '#fa755a'
  }
};
var card = elements.create('card', {style: style});
card.mount('#card-element');
card.addEventListener('change', function(event) {
  var displayError = document.getElementById('card-errors');
  if (event.error) {
    displayError.textContent = event.error.message;
  } else {
    displayError.textContent = '';
  }
});
</script>

<style>
form button {
  border: none;
  border-radius: 4px;
  outline: none;
  text-decoration: none;
  color: #212529;
  background:#ffc107;
  white-space: nowrap;
  display: inline-block;
  height: 40px;
  line-height: 40px;
  padding: 0 14px;
  box-shadow: 0 4px 6px rgba(50, 50, 93, .11), 0 1px 3px rgba(0, 0, 0, .08);
  border-radius: 4px;
  font-size: 15px;

  letter-spacing: 0.025em;
  text-decoration: none;
  -webkit-transition: all 150ms ease;
  transition: all 150ms ease;
  margin-top: 28px;
  width:100%;
}
input,
.StripeElement {
  height: 40px;
  padding: 10px 12px;
  color: #32325d;
  background-color: white;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
  box-shadow: 0 1px 3px 0 #cfd7df;
}
input:focus,
.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.coupon:focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}
.StripeElement--invalid {
  border-color: #fa755a;
}
.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
}


</style>
