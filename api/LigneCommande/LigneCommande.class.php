<?php

class LigneCommande{
  public $LPprodref;
  public $LPprodqte;
  public $LPcomref;
  private $bdd;

  public function __construct(){
    $this->bdd = new Crud;
  }

  public function save(){

    $this->bdd->insert('lignecommande');
  }
}
 ?>
