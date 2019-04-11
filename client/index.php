<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
$commande = new Commande;
$commandelist = $commande->getByUser($_SESSION['id'], 6);
//var_dump($commandelist);
//print("<pre>".print_r($commandelist,true)."</pre>");
?>
<body>
  <h1 class="text-center mt-5">Mon espace client</h1>
  <div class="row m-md-5 m-2">

    <div class="col-12 col-md-9 mx-0 mx-md-4">
      <div class="card shadow-small border-0 p-4">
        <h4 class="text-center">Mes commandes StockPro</h4>

        <div class="row mt-5">
          <div class="col-12">
            <table class="table table-borderless w-100 text-center table-hover table-responsive-md">
              <thead>
                <tr>
                  <th scope="col-4 text-center">#</th>
                  <th scope="col-4">Date</th>
                  <th scope="col-4">Prix</th>
                  <th scope="col-4">Statut</th>

                </tr>
              </thead>
              <tbody>
                <!-- <i class="fas fa-file-invoice"></i> -->
                <?php
                $number = 0;
                foreach($commandelist as $commande){
                  $number++;
                  ?>
                  <tr id="<?=$commande['COMRef']?>" class="tr">
                    <th class="text-center" scope="row"><?=substr($commande['COMRef'], 0, 8)?></th>
                    <td><?=$commande['COMDate']?></td>
                    <td><?=$commande['COMPrix']?> €</td>
                    <td><?=$commande['COMStatus']?></td>
                    <td><i class="fas fa-file-invoice"></i></td>

                  </tr>
                  <?php
                }
                ?>
              </tbody>
            </table>
            <?php
            if($number == 0){
            echo '<h6 class="text-center">Vous n&apos;avez pas de commande en cours</h6>';
            }
             ?>
          </div>
        </div>
      </div>
    </div>

    <div class="col-12 col-md mt-5 mt-md-0">
      <h4>Bonjour <?=$_SESSION['prenom'].' '.$_SESSION['nom']?> <a class="text-right float-right mt-2 text-dark" href="../process/logout.php"><i data-feather="log-out"></i></a></h6>
        <ul class="list-group list-group-flush">
          <li class="list-group-item h6 py-4"><i data-feather="truck" style="width:30px" class="mr-3"></i> Suivi de vos livraisons</li>
          <li class="list-group-item h6 py-4"><i data-feather="package" style="width:30px" class="mr-3"></i> Retourner un article</li>
          <li class="list-group-item h6 py-4"><i data-feather="file-minus" style="width:30px" class="mr-3"></i> Accédez à vos factures</li>
          <li class="list-group-item h6 py-4"><i data-feather="hard-drive" style="width:30px" class="mr-3"></i> Faire réparer un article</li>
        </ul>

      </div>

    </div>
  </body>
<script>

$('.tr').click(function(){
  window.location.href='commande/?id='+this.id;
})
</script>
  <?php
  include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
  ?>
