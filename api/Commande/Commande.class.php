<?php

class Commande{
  private $bdd;

  public $comref;
  public $comprix;
  public $comcliid;
  public $comstatus = 'En traitement';


  public function __construct(){
    $this->bdd = new Crud;
  }

  public function save(){
    $date = date('Y-m-d');
    echo $date;
    $array = array(tostring($this->comref),"('".$date."')", tostring($this->comprix), tostring($this->comstatus), tostring($this->comcliid));
    $rows = "COMRef, COMDate, COMPrix, COMStatus, COMCliId";
    $this->bdd->insert('commande', $array, $rows);
  }
}


?>
