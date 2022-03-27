<?php

include("db.php");

if(isset($_POST['nuevo'])){

$nombre_cargo= $_POST['nombre_cargo'];
$email = $_POST['email'];
$password = password_hash($_POST['password'],PASSWORD_DEFAULT);

try{
$query = "INSERT INTO  cargo VALUES(id_cargo,'$nombre_cargo','$email','$password')";

$result = $conexion->prepare($query);
$result->execute();
header('location:../cargo.php');

} catch(Exception $e){
die("error".$e->getMessage());
echo"ha ocurrido un error" .$e->getLine();
}


}


?>