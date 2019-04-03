<?php
/**
* Permet l'accès aux données de la table LigneCommande
*/
class LigneCommande{




  /**
  *@var string $LCprodred
  */
  public $LCprodref;







  /**
  * @var int $LCprodqte
  */
  public $LCprodqte;






  /**
  * @var string $LCcomref
  */
  public $LCcomref;





  private $bdd;

  public function __construct(){
    $this->bdd = new Crud;
  }


  /**
  *Cette procédure  permet la sauvegarde d'une ligne d'une commande.
  * @return void
  */
  public function save(){
    $rows = "LIGNProdCode, LIGNComRef, LIGNQte";
    $array = array(tostring($this->LCprodref), tostring($this->LCcomref), $this->LCprodqte);
    $this->bdd->insert('lignecommande', $array, $rows);
  }



  /**
  * Cette fonction permet d'obtenir les informations d'une ligne de commande
  * @param string $comref
  * @return array
  */
  public function getAll($comref){
    $lignescommande = $this->bdd->select('lignecommande', '*', 'LIGNComRef='.tostring($comref));
    return $lignescommande;
  }
}
 ?>
