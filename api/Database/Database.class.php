<?php
class Database{
  private static $dbName = 'ppe';
  private static $dbHost = 'localhost';
  private static $dbUser = 'root';
  private static $dbPassword = '';
  private static $pdo = null;
  public function __construct(){
    die("La fonction d'initialisation est interdite");
  }
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
  public static function disconnect(){
    self::$pdo = null;
  }
}
function tostring($str){
 return '"'.$str.'"';
}
 ?>
