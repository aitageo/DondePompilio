<?php 


include("db.php");

if(isset($_POST['actualizar'])){
    $nombre_menu = $_POST['nombre_menu'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
  

    
    $query = "UPDATE menu SET nombre_menu='$nuevo_nombre' WHERE nombre_menu='$nombre_menu'";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Datos actualizados')";
    header('location:actualizando.php');


}
?>|