<?php
include '../includes/header.php';
$panier = new Panier;
if(isset($_GET['productId']) && isset($_GET['number'])){
  $panier->addQtyFromCart($_GET['productId'], $_GET['number']);
}
?>
