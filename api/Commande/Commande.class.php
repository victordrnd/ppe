<?php
/**
* Cette classe permet la gestion des commandes
*/
class Commande{




  /**
  *@var object $bdd
  */
  private $bdd;





  /**
  *@var string $comref
  */
  public $comref;







  /**
  *@var double $comprix
  */
  public $comprix;





  /**
  *@var string $comcliid
  */
  public $comcliid;





  /**
  *@var string $comville
  */
  public $comville;





  /**
  *@var int $comcp
  */
  public $comcp;






  /**
  *@var string $comadresse
  */
  public $comadresse;





  public $comstatus = 'En traitement';


  public function __construct(){
    $this->bdd = new Crud;
  }

  /**
  * Procédure qui permet la sauvegarde d'une commande
  */
  public function save(){
    $date = date('Y-m-d');
    $array = array(tostring($this->comref),"('".$date."')", tostring($this->comprix), tostring($this->comstatus), tostring($this->comville), $this->comcp, tostring($this->comadresse), tostring($this->comcliid));
    $rows = "COMRef, COMDate, COMPrix, COMStatus, COMVille, COMCP, COMAdresse, COMCliId";
    $this->bdd->insert('commande', $array, $rows);
  }



  /**
  * Permet d'obtenir des informations sur une commande existante.
  * @param string $comref
  * @param boolean $moreinfo
  * @return array
  */
  public function getInfo($comref, $moreinfo = null){
    $commande = $this->bdd->select('commande', '*', 'COMRef='.tostring($comref));
    if($moreinfo!=null){
      $ligne = new LigneCommande;
      $lignescommande = $ligne->getAll($comref);
      //var_dump($lignescommande);
      $commande['Products'] = $lignescommande;
      $produit = new Produit;
      foreach($lignescommande as $index => $product){
        $productinfo = $produit->getProduitById($product['LIGNProdCode']);
        $commande['Products'][$index][0] = $productinfo[0];
      }
    }
    return $commande;
  }







  /**
  * Permet d'obtenir la liste des commandes d'un client
  * @param string $userid
  * @param int $limit
  * @return array
  */
  public function getByUser($userid, $limit=null){
    if($limit != null){
      return $this->bdd->select('commande', '*', 'COMCliId='.tostring($userid).'ORDER BY COMDate DESC LIMIT '.$limit);
    }
    else{
      return $this->bdd->select('commande', '*', 'COMCliId='.tostring($userid));
    }
  }



}


?>
