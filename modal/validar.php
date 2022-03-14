<?php
include("db.php");
include("registro.php");

if(isset($_POST['iniciar_sesion'])){
$email = htmlspecialchars($_POST['email']);
$password = htmlspecialchars($_POST['password']);

$cifrado = hash('sha512',$password);

try {
$query = "SELECT * FROM registro where email='$email' and password='$password'";
$result = $conexion->prepare($query);
$result->execute();
$filas=$result->rowCount();
echo $filas;
if($filas !=0) {
  session_start();//inicio de sesion 
  $_SESSION['usuario']= $_POST['email'];
  header("location:../usuarios.php");
  echo "hola";

}else {
  header("location:../login.html");
}
}catch(Exception $e){
  echo "Ha ocurrido un error: <br> linea  " .$e->getLine();

}
}

?>