<?php
include $_SERVER['DOCUMENT_ROOT'].'/includes/header.php';
if(isset($_POST['ville'])){
  $panier = new Panier;
  var_dump($panier->getCart(true));
}
 ?>
