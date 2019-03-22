<?php
include '../includes/header.php';
//if(isset($_POST['productId'])){
  $panier = new Panier;
  $panier->addToCart($_POST['productId']);
//}
 ?>
