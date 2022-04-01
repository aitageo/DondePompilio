<?php

use LDAP\Result;

include_once 'conexion.php';

if (isset($_POST['guardar'])) {
    $cedula =  intval($_POST['cedula']);
    $fecha = $_POST['fecha'];

$mensaje_succes = "Guardado con exito";
$mensaje_error = "Este empleado no existe"; 

$query = "SELECT * FROM empleados where numero_cedula = '$cedula'";
$result = $conexion->prepare($query);
$result->execute();
$registro=$result->fetch(PDO::FETCH_ASSOC);
if (empty($registro['numero_cedula'])) {
    //echo '<script>alert("Este empleado no existe")</script>';
    header('location:../pedidos.php',$mensaje_error);
} 
else {
    $sentencia = "INSERT INTO pedido values(id,'$fecha','$cedula',activo) ";
    $result = $conexion->prepare($sentencia);
    $result->execute();
    $id = $result->fetch(PDO::FETCH_ASSOC);
    $id_pedido = $id['id'];
    //echo '<script>alert("Guardado con exito")</script>';
    header('location:../pedidos.php',$mensaje_succes);
}


}
?>