<?php

class Commande{
  private $bdd;

  public $comref;
  public $comdate;
  public $comprix;
  public $comcliid;
  public $comstatus = 'En traitement';


  public function __construct(){
    $this->bdd = new Crud;
  }

  public function save(){
    $array = array(tostring($comref), tostring($comdate), tostring($comprix), tostring($comstatus), tostring($comcliid));
    $rows = "COMRef, COMDate, COMPrix, COMStatus, COMCliId";
    $this->bdd->insert('commande', $array, $rows);
  }
}


?>
