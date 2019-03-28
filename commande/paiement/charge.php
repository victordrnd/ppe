<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/api/autoload.php';
if(isset($_POST['ville']) && !empty($_SESSION['ProductsInCart'])){
  $panier = new Panier;
  $commande = new Commande;

  //var_dump($panier->getCart(true));
  $comref = md5(uniqid(rand(), true));
  $prixtotal = 0;

  //On sauvegarde chaque ligne du panier
  foreach ($panier->getCart(true) as $lignepanier) {
    $prixtotal += $lignepanier['Productinfo']['PRODPrix'] * $lignepanier['number'];
  }
  if(isset($_SESSION['COUPONCode'])){
    $prixtotal *= (1 - ($_SESSION['COUPONReduction'] / 100));
  }
  //var_dump($panier->getCart(true));
  //on sauvegarde la commande
  $commande->comref = $comref;
  $commande->comprix = $prixtotal;
  $commande->comcliid = $_SESSION['id'];
  $commande->comville = htmlspecialchars($_POST['ville']);
  $commande->comcp = htmlspecialchars($_POST['zip']);
  $commande->comadresse = htmlspecialchars($_POST['adresse']);
  $commande->save();


  foreach ($panier->getCart(true) as $lignepanier) {
    $lignecommande = new LigneCommande;
    $lignecommande->LCprodref = $lignepanier['ProductId'];
    $lignecommande->LCprodqte = $lignepanier['number'];
    $lignecommande->LCcomref = $comref;
    $lignecommande->save();
  }
  unset($_SESSION['COUPONCode']);
  unset($_SESSION['COUPONReduction']);
  unset($_SESSION['ProductsInCart']);
  unset($_SESSION['NumberCart']);
  header('location:success.php?token='.$comref);


}
?>
