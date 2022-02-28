<?php

include("db.php");

if(isset($_POST['eliminar'])){

    $numero_cedula = $_POST['numero_cedula'];
    $entero = intval($numero_cedula);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $id_cargo = $_POST['id_cargo'];
    

    $query = "DELETE FROM empleados where numero_cedula='$entero'";
    $result = $conexion->prepare($query);
    $result->execute();
    if($result){
        header('location:../usuarios.php');
    }else {
        echo "No se pudo borrar";
    }


}

?>