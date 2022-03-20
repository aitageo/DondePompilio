<?php

/*
class DATABASE {
   private $host;
   private $user;
   private $password;
   private $db;
   private $charset;

  public function __construct(){
    $this->host = 'localhost';
    $this->db = 'donde_pompilio';
    $this->user = 'root';
    $this->password = '';
    $this->charset  = "utf8mb4";


}  

 public function connect (){
     try {
        $conexion ="mysql:host=" .$this->host. ";dbname=".$this->db.";charset=".$this->charset;
        $options = [
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,//para que maneje las exceptions
            PDO::ATTR_EMULATE_PREPARES=>false
        ];
        $pdo = new PDO($conexion,$this->user,$this->password,$options);
        echo "conexion exitosa";
        return $pdo;
 }catch(PDOException $e){
      echo "error de conexion". $e->getMessage();
 }


 }
}

*/


try {
     
    $conexion= new PDO('mysql:host=localhost;dbname=donde_pompilio','root','');
    // echo "conexion exitosa";
} catch (Exception $e) {
    die("error" .$e->getMessage());
    echo "linea del error " .$e->getLine();
   
}

?>


 
