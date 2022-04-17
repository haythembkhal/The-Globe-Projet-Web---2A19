<?php
class config {
  private static $pdo = NULL;

  public static function getConnexion() {

    $servername='localhost';
    $username='root';
    $password='';
    $dbname='The_Globe';
   if (!isset (self::$pdo)) {
        try{
            self::$pdo=new PDO(
            "mysql:host=$servername; dbname=$dbname",
            $username,
            $password,
            [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
            //echo"Connected successfully";
        }
        catch(PDOException $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    return self::$pdo;
    }
}
?>