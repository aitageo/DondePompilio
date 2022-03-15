<?php

include("conexion.php");

if(isset($_POST['nuevo'])){


$id_cargo = $_POST['id_cargo'];
$nombre_cargo= $_POST['nombre_cargo'];
$email = $_POST['mail'];
$password = $_POST['password'];
$cifrado = hash('sha512',$password);

try{
$query = "INSERT INTO  cargo VALUES($id_cargo,'$nombre_cargo','$email','$cifrado')";

$result = $conexion->prepare($query);
$result->execute();
header('location:../cargo.php');

} catch(Exception $e){
die("error".$e->getMessage());
echo"ha ocurrido un error" .$e->getLine();
}


}


?>