<?php

class Categorie
{
  private $bdd
  public function __construct(){
      $this->bdd = new Crud;
  }
  public function getCategorieById($catid){
    return $this->bdd->select('categorie', '*','CATCode='.tostring($catid));
  }
}
?>
