<?php
$url = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['NumberCart'])){
  $_SESSION['NumberCart'] = 0;
}

if($url == '/commande/' && isset($_SESSION['id'])){
    header('location:adresse');
}

?>
