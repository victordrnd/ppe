<?php
if(isset($_POST['submit'])){
  $result = $gateway->transaction()->sale([
  'amount' => '10.00',
  'paymentMethodNonce' => "Credit Card",
  'options' => [
    'submitForSettlement' => True
  ]
]);

if ($result->success) {
  // See $result->transaction for details
} else {
  // Handle errors
}
}


 ?>
 <div class="demo-frame">
  <form action="/" method="post" id="cardForm" >
    <label class="hosted-fields--label" for="card-number">Card Number</label>
    <div id="card-number" class="hosted-field"></div>

    <label class="hosted-fields--label" for="expiration-date">Expiration Date</label>
    <div id="expiration-date" class="hosted-field"></div>

    <label class="hosted-fields--label" for="cvv">CVV</label>
    <div id="cvv" class="hosted-field"></div>

    <label class="hosted-fields--label" for="postal-code">Postal Code</label>
    <div id="postal-code" class="hosted-field"></div>

    <div class="button-container">
    <input type="submit" name="submit" class="button button--small button--green" value="Purchase" id="submit"/>
    </div>
  </form>
</div>

<script src="https://js.braintreegateway.com/web/3.43.0/js/client.js"></script>
<script src="https://js.braintreegateway.com/web/3.43.0/js/hosted-fields.js"></script>

<script>
var form = document.querySelector('#cardForm');
var authorization = 'sandbox_g42y39zw_348pk9cgf3bgyw2b';

braintree.client.create({
  authorization: authorization
}, function(err, clientInstance) {
  if (err) {
    console.error(err);
    return;
  }
  createHostedFields(clientInstance);
});

function createHostedFields(clientInstance) {
  braintree.hostedFields.create({
    client: clientInstance,
    styles: {
      'input': {
        'font-size': '16px',
        'font-family': 'courier, monospace',
        'font-weight': 'lighter',
        'color': '#ccc'
      },
      ':focus': {
        'color': 'black'
      },
      '.valid': {
        'color': '#8bdda8'
      }
    },
    fields: {
      number: {
        selector: '#card-number',
        placeholder: '4111 1111 1111 1111'
      },
      cvv: {
        selector: '#cvv',
        placeholder: '123'
      },
      expirationDate: {
        selector: '#expiration-date',
        placeholder: 'MM/YYYY'
      },
      postalCode: {
        selector: '#postal-code',
        placeholder: '11111'
      }
    }
  }, function (err, hostedFieldsInstance) {
    var teardown = function (event) {
      event.preventDefault();
      alert('Submit your nonce to your server here!' + JSON.stringify(clientInstance));
      hostedFieldsInstance.teardown(function () {
        createHostedFields(clientInstance);
        form.removeEventListener('submit', teardown, false);
      });
    };

    form.addEventListener('submit', teardown, false);
  });
}





</script>
<style>
.hosted-field {
  height: 50px;
  box-sizing: border-box;
  width: 100%;
  padding: 12px;
  display: inline-block;
  box-shadow: none;
  font-weight: 600;
  font-size: 14px;
  border-radius: 6px;
  border: 1px solid #dddddd;
  line-height: 20px;
  background: #fcfcfc;
  margin-bottom: 12px;
  background: linear-gradient(to right, white 50%, #fcfcfc 50%);
  background-size: 200% 100%;
  background-position: right bottom;
  transition: all 300ms ease-in-out;
}

.hosted-fields--label {
  font-family: courier, monospace;
  text-transform: uppercase;
  font-size: 14px;
  display: block;
  margin-bottom: 6px;
}

.button-container {
  display: block;
  text-align: center;
}

.button {
  cursor: pointer;
  font-weight: 500;
  line-height: inherit;
  position: relative;
  text-decoration: none;
  text-align: center;
  border-style: solid;
  border-width: 1px;
  border-radius: 3px;
  -webkit-appearance: none;
  -moz-appearance: none;
  display: inline-block;
}

.button--small {
  padding: 10px 20px;
  font-size: 0.875rem;
}

.button--green {
  outline: none;
  background-color: #64d18a;
  border-color: #64d18a;
  color: white;
  transition: all 200ms ease;
}

.button--green:hover {
  background-color: #8bdda8;
  color: white;
}

.braintree-hosted-fields-focused {
  border: 1px solid #64d18a;
  border-radius: 1px;
  background-position: left bottom;
}

.braintree-hosted-fields-invalid {
  border: 1px solid #ed574a;
}

.braintree-hosted-fields-valid {
}

#cardForm {
  max-width: 50.75em;
  margin: 0 auto;
  padding: 1.875em;
}
</style>
