<?php
$url = $_SERVER['REQUEST_URI'];
if(!isset($_SESSION['NumberCart'])){
  $_SESSION['NumberCart'] = 0;
}

if($url == '/commande/' && isset($_SESSION['id'])){
    header('location:adresse');
}

if(strpos($url, 'client') && !isset($_SESSION['id'])){
    http_response_code(403);
    die();
    //header('location:../');
}

if($url == '/commande/' &&  empty($_SESSION['ProductsInCart'])){
    http_response_code(403);
    die();
    //header('location:../');
}

?>
