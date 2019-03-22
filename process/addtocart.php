<?php
include '../includes/header.php';
if(isset($_GET['productId'])){
  $panier = new Panier;
  $panier->addToCart($_GET['productId']);
}
 ?>
