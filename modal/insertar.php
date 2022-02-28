<?php

include("db.php");

if(isset($_POST['nuevo'])){

$numero_cedula = $_POST['numero_cedula'];

$entero = intval($numero_cedula);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$password = $_POST['password'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];
$id_cargo = $_POST['id_cargo'];

$query = "INSERT INTO  empleados VALUES($entero,'$nombre','$password','$apellido','$telefono','$direccion',$id_cargo)";
$result = $conexion->prepare($query);//hay que poner comillas a las variables tipo string que raro//
$result->execute();
}
?>
<?php
echo "<script>alert('datos guardados')</script>";
?>
<?php
header('location:../usuarios.php');

?>
