<?php 


include("db.php");

if(isset($_POST['actualizar'])){
    $numero_cedula = $_POST['numero_cedula'];
   $entero = intval($numero_cedula);
   $nombre = $_POST['nombre'];
   $apellido = $_POST['apellido'];
   $email = $_POST['email'];
   $telefono = $_POST['telefono'];
   $direccion = $_POST['direccion'];
   
    $query = "UPDATE clientes SET nombre='$nombre',apellido='$apellido',telefono='$telefono',direccion='$direccion',correo='$email' WHERE numero_cedula='$entero'";
    $result = $conexion->prepare($query);
    $result->execute();
    echo "<script>alert('Datos actualizados')";
    header('location:../clientes.php');


}
echo "<script>alert('Datos actualizados')";
?>|