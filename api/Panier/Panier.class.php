<?php
class Panier{


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


  public function getCart($moreinfo = false){
    if(isset($_SESSION['ProductsInCart'])){
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

}

?>
