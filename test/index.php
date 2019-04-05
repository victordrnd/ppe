<?php
include '../includes/header.php';
$panier = new Panier;
$listpanier = $panier->getAll(true);
var_dump($listpanier);
//$json = json_encode($produitinfo);
//echo $json;
 ?>
