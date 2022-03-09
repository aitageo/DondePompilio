<?php 

include("conexion.php");

if(isset($_POST['actualizar'])){
    $fecha_pedido= $_POST['start'];

    //original date is in format YYYY-mm-dd
    $timestamp = strtotime($fecha_pedido); 
    $newDate = date("m-d-Y", $timestamp );

    $pedido= $_POST['pedido'];
    $mesa= $_POST['mesa'];

    $mesero= $_POST['mesero'];
    $meseroInt = intval($mesero); 

    $select1= $_POST['select1'];
    $sel1= intval($select1);

    $cantidad1= $_POST['cantidad1'];

    
    $query = "UPDATE pedido SET id_pedido=$pedido,fecha_pedido='$newDate',cantidad_menu=$cantidad1,FK_id_cedula_empleado=$meseroInt,
    FK_id_menu=$sel1,FK_id_mesas=$mesa WHERE id_pedido='$pedido'";
    $result = $conexion->prepare($query);
    $result->execute();
}
?>
    <script>alert("Datos actualizados")</script>