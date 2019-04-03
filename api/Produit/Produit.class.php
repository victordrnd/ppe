<?php
/**
* Cette classe permet l'accès aux données de la table produit
*/
class Produit{






  private $bbd;







  public function __construct(){
    $this->bdd = new Crud;
  }






  /**
  * Permet d'obtenir la liste des produits existants
  * @param int $number
  * @return array
  */
  public static function getAll($number=null){
    $produitinfo = $this->bdd->select('produit', '*');
    $categorie = new Categorie;
    foreach ($produitinfo as $index => $categorieinfo) {
      $details = $categorie->getCategorieById($categorieinfo['PRODCatCode']);
      $produitinfo[$index]['Categorie'] = $details[0];
    }
    return $produitinfo;
  }




  /**
  * Permet d'obtenir des informations sur un produit
  * @param string $productid
  * @param boolean moreinfo
  */
  public function getProduitById($produitid, $moreinfo = null){
    $produitinfo = $this->bdd->select('produit', '*', 'PRODRef='.tostring($produitid));
    $categorie = new Categorie;
    $categorieinfo = $categorie->getCategorieById($produitinfo[0]['PRODCatCode']);
    $produitinfo[0]['Categorie'] = $categorieinfo[0];
    return $produitinfo;
  }




  /**
  * Permet d'obtenir la liste des produits appartenant à une catégorie
  * @param string $catcode
  * @param int $number
  * @return array
  */
  public function getProduitByCat($catcode, $number = null){
    if($number == null){
      $produitinfo = $this->bdd->select('produit','*', 'PRODCatCode='.tostring($catcode));
    }
    else{
      $produitinfo = $this->bdd->select('produit','*', 'PRODCatCode='.tostring($catcode).' LIMIT '.$number);
    }

    return $produitinfo;
  }






  /**
  * Permet d'upload une image d'un produit et la renomme
  * @param $image
  * @param string $id
  * @return void
  */
  public function upload($image, $id){
    $target = $_SERVER['DOCUMENT_ROOT'].'/assets/upload/produits/';
    $extensionAvailable = array('jpg', 'gif', 'png', 'jpeg');
    $taille =filesize($image['tmp_name']);
    $extension = pathinfo($image['name'], PATHINFO_EXTENSION);
    if(!in_array(strtolower($extension),$extensionAvailable)){
      return "Le fichier n'est pas une image";
    }
    if($taille > 4000000){
      return 'Le fichier est trop large, recommencez l&apos;opération';
    }
    $binaire = imagecreatefromstring(file_get_contents($image['tmp_name']));
    imagepng($binaire, $target.$id.'.png',0);
  }






  /**
  * Permet d'enregistrer un nouveau produit
  * @param string $ref
  * @param string $nom
  * @param int $prix
  * @param string $desc
  * @param string $cat
  */
  public function ajouter($ref, $nom,$prix, $desc, $cat){
    $rows = "PRODRef, PRODLibelle, PRODprix, PRODDesc, PRODCatCode";
    $ajout = $this->bdd->insert('produit', array(tostring($ref),tostring($nom),$prix,tostring($desc), tostring($cat)), $rows);
  }

}
?>
