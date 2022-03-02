<?php

include("conexion.php");

if(isset($_POST['eliminar'])){


$id_cargo = $_POST['id_cargo'];
$nombre_cargo= $_POST['nombre_cargo'];
$email = $_POST['mail'];
$password = $_POST['password'];
$cifrado = hash('sha512',$password);


$query = "DELETE FROM cargo where id_cargo= $id_cargo";
$result = $conexion->prepare($query);
$result->execute();



}


?>