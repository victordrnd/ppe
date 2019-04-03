<?php
/**
* Cette classe permet l'accès aux données de la table catégorie
*/
class Categorie
{

  /**
  * @var object $bdd
  */
  private $bdd;







  public function __construct(){
    $this->bdd = new Crud;
  }






  /**
  * @param string $catid
  */
  public function getCategorieById($catid){
    return $this->bdd->select('categorie', '*','CATCode='.tostring($catid));
  }


}
?>
