<?php

include("db.php");

if(isset($_POST['nuevo'])){

$numero_cedula = $_POST['numero_cedula'];

$entero = intval($numero_cedula);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$cifrado = hash('sha512',$password);
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$id_cargo = $_POST['id_cargo'];


function validarUsuario ($numero_cedula){
    include 'db.php';
  $query = ("SELECT * FROM empleados where numero_cedula= $numero_cedula");
  $result = $conexion->prepare($query);
  $result->execute();
  if (empty($query)) {
  } else {
      echo "<script>alert('El usuario ya existe')</script>";
  }
  


};

$query = "INSERT INTO  empleados VALUES($entero,'$nombre','$cifrado','$apellido','$telefono','$direccion',$id_cargo)";
$result = $conexion->prepare($query);
$result->execute();
}
?>
<?php
echo "<script>alert('datos guardados')</script>";
?>
<?php
header('location:../usuarios.php');

?>
