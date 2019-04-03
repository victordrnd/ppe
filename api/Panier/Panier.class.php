<?php
/**
* Permet l'accès aux données du panier d'un client
*/
class Panier{



  /**
  * Permet l'ajout d'un produit au panier
  * @param string $productid
  * @return array
  */
  public function addToCart($productid){
    if(isset($_SESSION['ProductsInCart'])){
      $array = json_decode($_SESSION['ProductsInCart']);
      $array[] = $productid;
      $_SESSION['ProductsInCart'] = json_encode($array);
    }
    else{
      $array[] = $productid;
      $_SESSION['ProductsInCart'] = json_encode($array);
    }
    $_SESSION['NumberCart'] += 1;
  }




  /**
  *Permet d'obtenir le panier d'un utilisateur
  * @param boolean $moreinfo
  * @return array
  */
  public function getCart($moreinfo = false){
    if(isset($_SESSION['ProductsInCart']) && !empty($_SESSION['ProductsInCart'])){
      $cart = array_count_values(json_decode($_SESSION['ProductsInCart']));
      while (list ($id, $val) = each ($cart)) {

        $array[] = array("ProductId" => $id, "number" => $val);
      }
      if($moreinfo){
        foreach($array as $index => $produit){
          $product = new Produit;
          $productinfo = $product->getProduitById($produit['ProductId']);
          $array[$index]['Productinfo'] = $productinfo[0];
        }
      }

      return $array;
    }
    else{
      return;
    }
  }





  /**
  * Permet de retirer un produit du Panier
  * @param string $productid
  * @return void
  */
  public function removeFromCart($productid){
    if(isset($_SESSION['ProductsInCart'])){
      $array = json_decode($_SESSION['ProductsInCart']);
      $array = array_values(array_diff($array, array($productid)));
      if(count($array) == 0){
        unset($_SESSION['ProductsInCart']);
        $_SESSION['NumberCart'] = 0;
      }
      else{
        $_SESSION['NumberCart'] = count($array);
        $_SESSION['ProductsInCart'] = json_encode($array);
      }
    }
  }




    /**
    * Permet de retirer une certaine quantité d'un produit du Panier
    * @param string $productid
    * @param int $number
    * @return void
    */
  public function removeQtyFromCart($productid, $number){
    $cart = json_decode($_SESSION['ProductsInCart']);
    $countofthisproduct = count(array_keys($cart, $productid));
    if($countofthisproduct < $number){
      $number = $countofthisproduct;
    }
    for($i=1; $i <= $number;$i++){
      $index = array_search($productid, $cart);
      unset($cart[$index]);
    }
    if(count($cart) < 0){
      unset($_SESSION['NumberCart']);
      unset($_SESSION['ProductsInCart']);
    }
    else{
      $_SESSION['NumberCart'] = count($cart);
      $_SESSION['ProductsInCart'] = json_encode(array_values($cart));
    }

  }



  /**
  * Permet d'ajouter une certaine quantité d'un produit au Panier
  * @param string $productid
  * @param int $number
  * @return void
  */
  public function addQtyFromCart($productid,$number){
    $cart = json_decode($_SESSION['ProductsInCart']);
    for($i=1;$i<=$number;$i++){
      $this->addToCart($productid);
    }
  }

}

?>
