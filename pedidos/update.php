<?php 

include("conexion.php");

if(isset($_POST['actualizar'])){
    $pedido= $_POST['pedido'];
    $mesa= $_POST['mesa'];
    $select1= intval($_POST['select1']);
    echo "este es el select 1:  ". $select1 ."<br>";
    $select2= intval($_POST['select2']);
    echo "este es el select 2: ". $select2 . "<br>";
    $cantidad1= $_POST['cantidad1'];
    $cantidad2= $_POST['cantidad2'];
    echo "esta es la cantidad 2: " .$cantidad2. "<br>";
    echo "esta es la cantidad 1: " .$cantidad1. "<br>";
    
    $query = "UPDATE detalle_pedido SET cantidad_menu=$cantidad1,cantidad2=$cantidad2,
    FK_id_menu=$select1,menu2=$select2,FK_id_mesas=$mesa WHERE FK_id_pedido='$pedido'";
    $result = $conexion->prepare($query);
    $result->execute();

}

?>
    <script>alert("Datos actualizados")</script>

    <?php header('location:../pedidos.php'); ?>