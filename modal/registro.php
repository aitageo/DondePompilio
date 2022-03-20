<?php

include_once("db.php");

if(isset($_POST['register'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    //$cifrado = hash('sha512',$password);
     $cifrado = password_hash($password,PASSWORD_DEFAULT);


  try {

    $query = "INSERT INTO registro  VALUES(id,'$nombre','$email','$cifrado')";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Registro exitoso')</script>";
    header('location:../login.html');
    
  }catch(Exception $e){
      die("error" .$e->getMessage());
      echo "ocurrio un error" .$e->getLine();
  }

}


?>