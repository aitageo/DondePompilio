<?php 


include("db.php");

if(isset($_POST['actualizar'])){
    $nombre_cargo= $_POST['nombre_cargo'];
    $nuevo_nombre = $_POST['nuevo_nombre'];

    $query = "UPDATE cargo SET nombre_cargo='$nuevo_nombre' and activo=1 WHERE nombre_cargo='$nombre_cargo'";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "Datos actualizados";
    header('location:../cargo.php');


}
?>|