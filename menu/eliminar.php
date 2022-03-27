<?php

include("db.php");

if(isset($_POST['eliminar'])){

    $nombre_menu = $_POST['nombre_menu'];
   
    

    $query = "DELETE FROM menu where nombre_menu='$nombre_menu'";
    $result = $conexion->prepare($query);
    $result->execute();
    if($result){
        header('location:../menu.php');
    }else {
        echo "No se pudo borrar";
    }


}

?>