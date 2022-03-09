<?php

include("db.php");

if(isset($_POST['eliminar'])){

    $id_menu = $_POST['id_menu'];
    $nombre_menu = $_POST['nombre_menu'];
   
    

    $query = "DELETE FROM menu where id_menu=$id_menu";
    $result = $conexion->prepare($query);
    $result->execute();
    if($result){
        header('location:../menu.html');
    }else {
        echo "No se pudo borrar";
    }


}

?>