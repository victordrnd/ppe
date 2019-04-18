<?php
session_start();
include $_SERVER['DOCUMENT_ROOT'].'/api/autoload.php';
include $_SERVER['DOCUMENT_ROOT'].'/api/composer/vendor/autoload.php';

if(isset($_POST['ville']) && !empty($_SESSION['ProductsInCart'])){
  $panier = new Panier;
  $commande = new Commande;
  $comref = md5(uniqid(rand(), true));
  $prixtotal = 0;

  //On sauvegarde chaque ligne du panier
  foreach ($panier->getCart(true) as $lignepanier) {
    $prixtotal += $lignepanier['Productinfo']['PRODPrix'] * $lignepanier['number'];
  }
  if(isset($_SESSION['COUPONCode'])){
    $prixtotal *= (1 - ($_SESSION['COUPONReduction'] / 100));
  }
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

  $commande = new Commande;
  $panierinfo = json_encode($commande->getInfo($comref, true));
  $_SESSION['panierinfo_to_send'] = $panierinfo;
  //echo $panierinfo;
  /*$url = 'http://178.128.166.86/ppe/';
  file_get_contents($url.'?panierinfo='.urlencode($panierinfo).'&nom='.$_SESSION['nom'].'&prenom='.$_SESSION['prenom'].'&mail='.$_SESSION['mail']);
  */

  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("stockpro@victordurand.fr", "StockPro");
  $email->setSubject("Votre commande a été pris en compte.");
  $email->addTo($_SESSION['mail'], $_SESSION['prenom'].' '.$_SESSION['nom']);
  $email->addContent("text/plain", "Stockpro votre commande a été passée avec succès.");
  $email->addContent("text/html", file_get_contents($_SERVER['DOCUMENT_ROOT'].'/email/order.php'));
  $sendgrid = new \SendGrid('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');
  try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
  } catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
  }

  unset($_SESSION['COUPONCode']);
  unset($_SESSION['COUPONReduction']);
  unset($_SESSION['ProductsInCart']);
  unset($_SESSION['NumberCart']);
  unset($_SESSION['panierinfo_to_send']);
  header('location:success.php?token='.$comref);
}

?>
