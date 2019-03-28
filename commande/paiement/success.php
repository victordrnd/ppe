<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$commande = new Commande;
$commandeinfo = $commande->getInfo(htmlspecialchars($_GET['token']), true);

?>
<body>

  <div class="container mt-5">

    <div class="row">
      <div class="col-12">
        <div class="card shadow-small border-0 p-3">
          <h2 class="text-center">Félicitation votre commande est validée  <i data-feather="check" style="width:40px"></i></h2>
          <h5 class="text-center"></h5>
          <ul class="list-group list-group-flush mt-5">
            <?php
            foreach($commandeinfo['Products'] as $produit){
              ?>
              <li class="list-group-item">
                <div class="row">
                  <div class="col-3">

                    <img src="../../assets/upload/produits/<?=$produit[0]['PRODRef']?>.png" class=" mt-4 mt-md-0 img-fluid w-25 mx-auto d-block"/>
                  </div>
                  <div class="col-6">
                    <p class="mt-4 text-center align-middle"><?=$produit[0]['PRODLibelle']?></p>
                  </div>
                  <div class="col-1 col-md-2">

                    <p class="mt-4">Quantité : <?=$produit['LIGNQte']?></p>
                  </div>
                </div></li>
                <?php
              }
              ?>
            </ul>
            <a href="../../client/" class="text-dark text-center mt-5 h6"> Accéder à mon espace client <i data-feather="chevron-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </body>

  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
  ?>
