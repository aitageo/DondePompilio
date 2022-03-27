<?php
include("db.php");
include("registro.php");

if(isset($_POST['iniciar_sesion'])){
$email = htmlspecialchars(addslashes($_POST['email']));
$password = htmlspecialchars(addslashes($_POST['password']));


try {
$query = "SELECT * FROM registro where email='$email'";
$result = $conexion->prepare($query);
$result->execute();

$registro=$result->fetch(PDO::FETCH_ASSOC);
echo $registro['password'] ."<br>";
echo $registro['email'] ."<br>";
echo $password;

//esta funcion password_verify solo funciona con el algoritmo por defecto bcript de la funcion password_hash
if (password_verify($password, $registro['password'])) {
  session_start();//inicio de sesion 
  $_SESSION['usuario']= $_POST['email'];
  header("location:../usuarios.php");
  echo $registro['password'];


}else {
  header("location:../login.html");
}


}catch(Exception $e){
  echo "Ha ocurrido un error: <br> linea  " .$e->getLine();

}
}




?>
