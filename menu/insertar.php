<?php

include("db.php");

if(isset($_POST['nuevo'])){

$nombre_menu = $_POST['nombre_menu'];


$query = "INSERT INTO  menu VALUES(id_menu,'$nombre_menu')";
$result = $conexion->prepare($query);
$result->execute();
}
?>
<?php
echo "<script>alert('datos guardados')</script>";
?>
<?php
header('location:../menu.php');

?>
