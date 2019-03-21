<?php
class Panier{
  public function addToCart($productid){
    if(isset($_COOKIE['ProductsInCart'])){
      $array = json_decode($_COOKIE['ProductsInCart']);
      $array[] = $productid;
      $products = json_encode($array);
      setcookie('ProductsInCart', $products, time()+60*60*24*30);
    }
    else{
      $array[] = $productid;
      $products = json_encode($array);
      setcookie('ProductsInCart', $products, time()+60*60*24*30);
    }
    $_SESSION['NumberCart'] += 1;
  }


  public function getCart($moreinfo = false){
    if(isset($_COOKIE['ProductsInCart'])){
      $cart = array_count_values(json_decode($_COOKIE['ProductsInCart']));
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

}

?>
