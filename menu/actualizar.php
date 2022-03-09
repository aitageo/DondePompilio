<?php 


include("db.php");

if(isset($_POST['actualizar'])){
    $id_menu = $_POST['id_menu'];
    $nombre_menu = $_POST['nombre_menu'];
  

    
    $query = "UPDATE menu SET id_menu=$id_menu,nombre_menu='$nombre_menu' WHERE id_menu=$id_menu";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Datos actualizados')";
    header('location:../menu.html');


}
?>|