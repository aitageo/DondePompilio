<?php

include("db.php");

if(isset($_POST['nuevo'])){

$numero_cedula = $_POST['numero_cedula'];

$entero = intval($numero_cedula);
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$direccion = $_POST['direccion'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];



/*
function validarUsuario(){
    include 'db.php';
    global $entero;

  $query = ("SELECT * FROM clientes where numero_cedula= $entero");
  $result = $conexion->prepare($query);
  $result->execute();
  if ($query) {
    echo "<script src='js/clientes.js/validarUsuario()'></script>";
    header('location:../clientes.php');
  }

};

//llamado a funcion;
ValidarUsuario();

*/
$query = "INSERT INTO  clientes VALUES($entero,'$nombre','$apellido','$direccion','$email','$telefono')";
$result = $conexion->prepare($query);
$result->execute();
}
?>
<?php
echo "<script src='js/clientes.js'></script>";
?>
<?php
header('location:../clientes.php');

?>

