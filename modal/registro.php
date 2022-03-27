<?php

include_once("db.php");

if(isset($_POST['register'])){

    $nombre =  htmlspecialchars(addslashes($_POST['nombre']));
    $email = htmlspecialchars(addslashes($_POST['email']));
    $password = htmlspecialchars(addslashes($_POST['password']));
    //$cifrado = hash('sha512',$password);
     $cifrado = password_hash($password,PASSWORD_DEFAULT);



    $verificarCorreo = $conexion->prepare("SELECT * FROM registro where email = '$email'");
    $verificarCorreo->execute();
    if ($verificarCorreo->rowCount()> 0) {
      echo "<script>alert('Este correo ya existe')";
             header('location:../login.html');
             exit();
    }
    
    $verificarUsuario = $conexion->prepare("SELECT * FROM registro where nombre = '$nombre'");
    $verificarUsuario->execute();
    if($verificarUsuario->rowCount()> 0){
      echo '<script>alert("Este usuario ya existe")';
             header('location:../login.html');
             exit();
    }


    $query = "INSERT INTO registro  VALUES(id,'$nombre','$email','$cifrado')";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Registro exitoso')</script>";
    header('location:../login.html');



    


  }




?>