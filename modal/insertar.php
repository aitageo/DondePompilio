<?php

use function PHPSTORM_META\type;

include("db.php");

if(isset($_POST['nuevo'])) {
$numero_cedula = intval($_POST['numero_cedula']);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$id_cargo = $_POST['id_cargo'];


$data = array();


function validarUsuario ($numero_cedula){
    echo gettype($numero_cedula);
    include 'db.php';
    global $nombre,$apellido,$password,$telefono,$direccion,$id_cargo;
  $query = "SELECT * FROM empleados where numero_cedula = '$numero_cedula'";
  echo $query;
  $result = $conexion->prepare($query);
  $result->execute();
  if ($result->rowCount() < 1) {
    echo "hola";
    $query = "INSERT INTO  empleados VALUES('$numero_cedula','$nombre','$password','$apellido','$telefono','$direccion',$id_cargo)";
    $result = $conexion->prepare($query);
    $result->execute();
    echo 'datos guardados';
    $data = json_encode('datos guardados');
  } 
  else {
      $json_error = json_encode('El usuario ya existe');
      header('location:../usuarios.php');
      echo $json_error;
  }
  

}
validarUsuario($numero_cedula);

}


?>
