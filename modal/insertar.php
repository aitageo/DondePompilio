<?php

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
    include 'db.php';
    global $nombre,$apellido,$password,$telefono,$direccion,$id_cargo,$data;
  $query = "SELECT * FROM empleados where numero_cedula = '$numero_cedula'";
  $result = $conexion->prepare($query);
  $result->execute();
  if ($result->rowCount() < 1) {
    $query = "INSERT INTO  empleados VALUES('$numero_cedula','$nombre','$password','$apellido','$telefono','$direccion',$id_cargo)";
    $result = $conexion->prepare($query);
    $result->execute();
    //echo 'datos guardados';
    $data['exito'] = 'datos guardados';
    //header('location:../usuarios.php');
  } 
  else {
      $data['error'] = 'El usuario ya existe jo';
      //header('location:../usuarios.php');
 
  }
   echo json_encode($data);

}
validarUsuario($numero_cedula);

}

?>


