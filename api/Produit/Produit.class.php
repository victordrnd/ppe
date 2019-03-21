<?php
class Produit{
  private $bbd;

  public function __construct(){
    $this->bdd = new Crud;
  }

  public static function getAll(){
    $produitinfo = $this->bdd->select('produit', '*');
    $categorie = new Categorie;
    foreach ($produitinfo as $index => $categorieinfo) {
      $details = $categorie->getCategorieById($categorieinfo['PRODCatCode']);
      $produitinfo[$index]['Categorie'] = $details[0];
    }
    return $produitinfo;
  }

  public function getProduitById($produitid){
    $produitinfo = $this->bdd->select('produit', '*', 'PRODRef='.tostring($produitid));
    if(!empty($productinfo)){
      $categorie = new Categorie;
      $categorieinfo = $categorie->getCategorieById($produitinfo[0]['PRODCatCode']);
      $produitinfo[0]['Categorie'] = $categorieinfo[0];
    }

    return $produitinfo;
  }
  public function getProduitByCat($catcode){
    $produitinfo = $this->bdd->select('produit','*', 'PRODCatCode='.tostring($catcode));
    return $produitinfo;
  }

}
?>
