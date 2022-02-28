<?php
include("db.php");
include("registro.php");

if(isset($_POST['iniciar_sesion'])){
$email = $_POST['email'];
$password = $_POST['password'];

$cifrado = hash('sha512',$password);

try {
$query = "SELECT  email, password FROM registro where email='$email' and password='$cifrado'";
$result = $conexion->prepare($query);
$result->execute();
header('location:../usuarios.php');
$filas=$result->rowCount();
if($filas) {
  header("location:../usuarios.php");

}}catch(Exception $e){
  echo "Ha ocurrido un error" .$e->getLine();

}
}

?>