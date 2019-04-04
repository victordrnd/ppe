<?php
include '../includes/header.php';
$produit = new Produit;
$produitinfo = $produit->getProduitByCat('TEL');
//var_dump($produitinfo);
$json = json_encode($produitinfo);
echo $json;
 ?>
