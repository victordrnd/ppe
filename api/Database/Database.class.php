<?php
/**
* Classe qui permet de se connecter à la base de donnée
*/
class Database{



  /**
  * @var string $dbName
  */
  private static $dbName = 'ppe';






  /**
  * @var string $dbHost
  */
  private static $dbHost = 'localhost';






  /**
  * @var string $dbUser
  */
    private static $dbUser = 'root';









  /**
  * @var string $dbPassword
  */
  private static $dbPassword = '';







  /**
  * @var object $pdo
  */
  private static $pdo = null;







  public function __construct(){
    die("La fonction d'initialisation est interdite");
  }



  /**
  * Permet l'instatiation de l'objet PDO
  */
  public static function connect(){
    if (null == self::$pdo){
      try{
        self::$pdo = new PDO("mysql:host=".self::$dbHost.";"."dbname=".self::$dbName.";charset=latin1", self::$dbUser, self::$dbPassword);
      }
      catch(PDOException $e){
        die($e->getMessage());
      }
    }
    return self::$pdo;
  }





  /**
  * Permet de détruire l'objet self::$pdo
  */
  public static function disconnect(){
    self::$pdo = null;
  }



}



function tostring($str){
  return '"'.$str.'"';
}
?>
