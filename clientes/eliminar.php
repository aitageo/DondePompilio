<?php

include("db.php");

if(isset($_POST['eliminar'])){

    $numero_cedula = $_POST['numero_cedula'];

    $entero = intval($numero_cedula);
   
    

    $query = "DELETE FROM clientes where numero_cedula='$entero'";
    $result = $conexion->prepare($query);
    $result->execute();
    if($result){
        header('location:../clientes.php');
    }else {
        echo "No se pudo borrar";
    }


}

?>