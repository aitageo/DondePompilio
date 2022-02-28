<?php

include("db.php");

if(isset($_POST['register'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cifrado = hash('sha512',$password);

  try {

    $query = "INSERT INTO registro  VALUES('$nombre','$email','$cifrado')";
    $result = $conexion->prepare($query);//hay que poner comillas a las variables tipo string que raro//
    $result->execute();
    echo "<script>alert('Registro exitoso')</script>";
    header('location:../login.html');
    
  }catch(Exception $e){
      die("error" .$e->getMessage());
      echo "ocurrio un error" .$e->getLine();
  }

}


?>