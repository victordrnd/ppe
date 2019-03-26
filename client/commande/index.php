<?php
include '../../includes/header.php';
$commande = new Commande;
$commandeinfo = $commande->getInfo(htmlspecialchars($_GET['id']), true );
//var_dump($commandeinfo);
?>
<body>
  <h2 class="text-center mt-5 ">Commande n°<?=substr($commandeinfo[0]['COMRef'], 0, 8)?></h2>
  <div class="container">
    <a href="../" class="text-dark"><i data-feather="chevron-left"></i></a>
  </div>
  <div class="row m-5">
    <div class="col-12 col-md-8">
      <div class="card shadow-small border-0 mx-5 p-3">

        <div class="row px-3">
          <div class="col">
            <h2>Détails</h2>
          </div>
          <div class="col">
            <span class="badge badge-warning float-right mt-3 p-2"><?=$commandeinfo[0]['COMStatus']?></span>
          </div>
        </div>

        <div class="row">
          <ul class="list-group list-group-flush mt-3 w-100">
            <?php
            foreach($commandeinfo['Products'] as $produit){
              ?>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-4">

                    <img src="../../assets/upload/produits/<?=$produit[0]['PRODRef']?>.png" class=" mt-4 mt-md-0 img-fluid w-25 mx-auto d-block"/>
                  </div>
                  <div class="col-6">
                    <p class="mt-5 text-center align-middle"><?=$produit[0]['PRODLibelle']?></p>
                  </div>
                  <div class="col-2">

                    <p class="mt-5">Quantité : <?=$produit['LIGNQte']?></p>
                    <input type="number" value="<?=$produit['number']?>" class="mt-4 form-groups border-0 w-25"/>
                  </div>
                </div></li>
                <?php
              }
              ?>
            </ul>
        </div>

      </div>
    </div>


    <div class="col-12 col-md-4">
      <h2>Récapitulatif</h2>
      <ul class="list-unstyled mb-5">
        <h6 class="mt-3">Sous total HT: <span class="float-right"><?=$commandeinfo[0]['COMPrix'] * 0.8?>&euro;</span></h6>
        <p class="small"><strong>TVA : <span class="float-right"><?=$commandeinfo[0]['COMPrix'] * 0.2?>&euro;</span></strong></p>
        <h6 class="mt-5 border-top pt-3">Total : <span class="float-right"><?=$commandeinfo[0]['COMPrix']?>&euro;</span></h6>
      </ul>
      <div class="mt-5">
        <h2 class="mt-3">Livraison</h2>
        <ul class="list-unstyled mt-3">
          <h6 class="mt-3">Ville: <span class="float-right">Lyon</span></h6>
          <h6>Code Postal : <span class="float-right">69002</span></h6>
          <h6>Adresse : <span class="float-right">8 rue paume</span></h6>
          <h6>Date estimée : <span class="float-right"><?=date('Y-m-d', strtotime($commandeinfo[0]['COMDate']. ' + 3 days'));?></span></h6>
        </ul>
      </div>

    </div>
  </div>
</body>
<?php
include '../../includes/footer/footer.php';
?>
