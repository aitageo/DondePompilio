<?php 


include("db.php");

if(isset($_POST['actualizar'])){
    $numero_cedula = $_POST['numero_cedula'];
    $entero = intval($numero_cedula);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $id_cargo = $_POST['id_cargo'];

    
    $query = "UPDATE empleados SET nombre='$nombre',password='$password',apellido='$apellido',telefono='$telefono',direccion='$direccion',FK_id_cargo='$id_cargo' WHERE numero_cedula='$entero'";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Datos actualizados')";
    header('location:../usuarios.php');


}
?>|