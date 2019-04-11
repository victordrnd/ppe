<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
include $_SERVER['DOCUMENT_ROOT'].'/api/autoload.php';
$panier = new Commande;
$panierinfo = $panier->getInfo($_GET['commandeid'],true);

?>
<div class="container mb-5 mt-4">
  <h1 class="text-center">Facture StockPro</h1>
  <div class="card mt-5">
    <div class="card-header">
      Facture
      <strong><?=substr($panierinfo[0]['COMRef'], 0, 8)?></strong>
      <span class="float-right"> <strong>Status:</strong> <span class="badge badge-warning">Validé</span></span>

    </div>
    <div class="card-body">
      <div class="row mb-4">
        <div class="col-sm-6">
          <div>
            <strong>StockPro</strong>
          </div>
          <div>58 Rue Pierre Dupont</div>
          <div>Lyon - 69004</div>
          <div>Email: support@stockpro.com</div>
          <div>Phone: +33 6 98 16 85 09</div>
        </div>

        <div class="col-sm-6">
          <div>
            <strong><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></strong>
          </div>
          <div><?=$panierinfo[0]['COMAdresse']?></div>
          <div><?=$panierinfo[0]['COMVille']?> - <?=$panierinfo[0]['COMCP']?></div>
          <div>Email: <?=$_SESSION['mail']?></div>
        </div>



      </div>

      <div class="table-responsive-sm">
        <table class="table table-striped">
          <thead>
            <tr>
              <th class="center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-hash"><line x1="4" y1="9" x2="20" y2="9"></line><line x1="4" y1="15" x2="20" y2="15"></line><line x1="10" y1="3" x2="8" y2="21"></line><line x1="16" y1="3" x2="14" y2="21"></line></svg></th>
              <th>Article</th>
              <th>Quantité</th>

              <th class="right">Total</th>
            </tr>
          </thead>
          <?php
          $i=0;
          foreach ($panierinfo['Products'] as $produit ):
            $i++;
            ?>


            <tbody>
              <tr>
                <td class="center"><?=$i;?></td>
                <td class="left strong"><b><?=$produit[0]['PRODLibelle']?></b></td>
                <td class="right" ><?=$produit['LIGNQte']?></td>
                <td class="right"><?=$produit[0]['PRODPrix']?>€</td>
              </tr>
            </tbody>
          <?php endforeach; ?>
        </table>
      </div>
      <div class="row">
        <div class="col-lg-4 col-sm-5">
          <button onclick="window.print()" class="btn btn-warning mt-5">Imprimer <i class="fas fa-print"></i></button>
        </div>

        <div class="col-lg-4 col-sm-5 ml-auto">
          <table class="table table-clear">
            <tbody>
              <tr>
                <td class="left">
                  <strong>Total HT</strong>
                </td>
                <td class="right">
                  <strong><?=$panierinfo[0]['COMPrix'] * 0.8?>&euro;</strong>
                </td>
              </tr>
              <tr>
                <td class="left">
                  <strong>Total TTC</strong>
                </td>
                <td class="right">
                  <strong><?=$panierinfo[0]['COMPrix']?>&euro;</strong>
                </td>
              </tr>
            </tbody>
          </table>

        </div>

      </div>

    </div>
  </div>
</div>
<?php

include $_SERVER['DOCUMENT_ROOT'].'/includes/footer/footer.php';
?>
