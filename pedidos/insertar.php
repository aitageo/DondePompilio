<?php
    include("conexion.php");

    include('guardar.php');
    if(isset($_POST['nuevo'])){
    $pedido= intval($_POST['pedido']);
    $mesa= intval($_POST['mesa']);
    $select1= intval($_POST['select1']);

    $cantidad1= $_POST['cantidad1'];
    $select2=  intval($_POST['select2']);
    
    $cantidad2=  intval($_POST['cantidad2']);


   $menu = intval($select1);
  try{     
    $query = "INSERT INTO detalle_pedido VALUES(id_detalle,$cantidad1,$cantidad2,$menu,$select2,$mesa,$pedido)";
    $result = $conexion->prepare($query);
    $result->execute(); // ejecutar el insert en el sql
    header('location:../pedidos.php');
    
    }catch(Exception $e){
        die("error" .$e->getMessage());
        echo "Ha ocurrido un error" .$e->getLine();
    }
 }
?>
<script>alert("Datos guardados")</script>
