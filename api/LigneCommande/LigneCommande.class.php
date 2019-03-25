<?php

class LigneCommande{
  public $LCprodref;
  public $LCprodqte;
  public $LCcomref;
  private $bdd;

  public function __construct(){
    $this->bdd = new Crud;
  }

  public function save(){
    $rows = "LIGNProdCode, LIGNComRef, LIGNQte";
    $array = array(tostring($this->LCprodref), tostring($this->LCcomref), $this->LCprodqte);
    $this->bdd->insert('lignecommande', $array, $rows);
  }
}
 ?>
