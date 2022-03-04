<?php
    include("conexion.php");

    // setiar el boton (Nuevo) en el front
    if(isset($_POST['nuevo'])){
    // obtener el valor de los inputs deacuerdo a la vista asociada

    $fecha_pedido= $_POST['start'];

    //original date is in format YYYY-mm-dd
    $timestamp = strtotime($fecha_pedido); 
    $newDate = date("m-d-Y", $timestamp );
    echo "The new date is $newDate.";

    $pedido= $_POST['pedido'];
    $mesa= $_POST['mesa'];

    $mesero= $_POST['mesero'];
    $meseroInt = intval($mesero);  

    $select1= $_POST['select1'];
    $sel1= intval($select1);

    $cantidad1= $_POST['cantidad1'];
    /*$select2= $_POST['select2'];
    $cantidad2= $_POST['cantidad2'];
    $select3= $_POST['select3'];
    $cantidad3= $_POST['cantidad3'];
    $select4= $_POST['select4'];
    $cantidad4= $_POST['cantidad4'];
    $select5= $_POST['select5'];
    $cantidad5= $_POST['cantidad5'];
    $select6= $_POST['select6'];
    $cantidad6= $_POST['cantidad6'];*/

    /* iteracion variables del select del menu
    for ($i=0; $i <count($select1) ; $i++) { 
        $sel1 = $select1[$i]; // imprime la variable del select de acuerdo al index(posicion)
    }*/
    
    try{     
    $query = "INSERT INTO pedido VALUES($pedido,'$newDate',$cantidad1,$meseroInt,$sel1,$mesa)";
    $result = $conexion->prepare($query);
    $result->execute(); // ejecutar el insert en el sql
    }catch(Exception $e){
        die("error" .$e->getMessage());
        echo "Ha ocurrido un error" .$e->getLine();
    }
 }
?>
<script>alert("Datos guardados")</script>
