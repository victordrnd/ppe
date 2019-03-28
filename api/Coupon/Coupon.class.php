<?php
  class Coupon {

    private $bdd;

    public function __construct(){
        $this->bdd = new Crud;
    }

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
