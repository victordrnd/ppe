<?php
class Produit{
  private $bbd;

  public function __construct(){
      $this->bdd = new Crud;
  }

  public function getAll(){
    $produitinfo = $this->bdd->select('Produit', '*');
    foreach ($produitinfo as $index => $categorieinfo) {
      $details = $
    }
  }
}
 ?>
