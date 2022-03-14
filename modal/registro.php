<?php

include("db.php");

if(isset($_POST['register'])){

    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cifrado = hash('sha512',$password);


/*  function validarRegistro(){
   include 'db.php';
   if (isset($_POST['register'])) {
     
  
   $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  $sql = $conexion->prepare("Select * from registro where nombre= '$nombre' and email='$email'");
  $sql->execute();
  $pass_hash = $sql->fetch()->password;

  if (password_verify($password,$pass_hash)=== True) {
    echo "<script>alert('El usuario ya existe')</script>";
  }
};
  };

  validarRegistro();

if(isset($_POST["nombre_usuario"]) && isset($_POST["password"])){
  $nombreUsuario = $_POST["nombre_usuario"];
  $pass = $_POST["password"];
  $baseDeDatos->prepare("SELECT pass FROM usuarios WHERE nombre = ? LIMIT 1;");
  $baseDeDatos->execute([$nombreUsuario]);
  $passObtenida = $baseDeDatos->fetch()->pass;
  //Aquí comprobamos:
  if(password_verify($pass, $passObtenida) === TRUE){
    //Datos correctos
  }else{
    //Datos incorrectos
  }
}

*/
  try {

    $query = "INSERT INTO registro  VALUES('$nombre','$email','$password')";
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