<?php
/**
* Permet l'accès aux données de la table coupon
*/
  class Coupon {

    private $bdd;

    public function __construct(){
        $this->bdd = new Crud;
    }



    /**
    * Permet de vérifier si le coupon est valide
    * @param string $couponcode
    * @return array
    */
    public function retrieve($couponcode){
      if(!empty($couponcode)){
        $couponretrieved = $this->bdd->select('coupon','*','COUPONCode='.tostring($couponcode));

        if(!empty($couponretrieved)){
          return $couponretrieved[0];
        }
        else{
          return "Ce coupon n'existe pas";
        }
      }
    }


  }
 ?>
