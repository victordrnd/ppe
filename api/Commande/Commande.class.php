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
    $array = array(tostring($this->comref),"('".$date."')", tostring($this->comprix), tostring($this->comstatus), tostring($this->comcliid));
    $rows = "COMRef, COMDate, COMPrix, COMStatus, COMCliId";
    $this->bdd->insert('commande', $array, $rows);
  }

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
