<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
if(isset($_POST['ville'])){
  $panier = new Panier;
  $commande = new Commande;

  var_dump($panier->getCart(true));
  $comref = md5(uniqid(rand(), true));
  $prixtotal = 0;

  //On sauvegarde chaque ligne du panier
  foreach ($panier->getCart(true) as $lignepanier) {
    $prixtotal += $lignepanier['Productinfo']['PRODPrix'] * $lignepanier['number'];
  }
  //on sauvegarde la commande
  $commande->comref = $comref;
  $commande->comprix = $prixtotal;
  $commande->comcliid = $_SESSION['id'];
  $commande->save();


  foreach ($panier->getCart(true) as $lignepanier) {
    $lignecommande = new LigneCommande;
    $lignecommande->LCprodref = $lignepanier['ProductId'];
    $lignecommande->LCprodqte = $lignepanier['number'];
    $lignecommande->LCcomref = $comref;
    $lignecommande->save();
  }
  unset($_SESSION['ProductInCart']);
  unset($_SESSION['NumberCart']);
  echo '<meta http-equiv="refresh" content="0;URL=success.php">';


}
?>
