<?php

include("db.php");

if(isset($_POST['eliminar'])){

$email = $_POST['email'];
try {

$query = "DELETE FROM cargo WHERE email='$email'";
$result = $conexion->prepare($query);
$result->execute();
if ($result->rowCount()> 0) {
    echo "borrado exitoso";
    header('location: ../cargo.php');
} else {

    echo "no se pudo borrar";
    header('location: ../cargo.php');
}

}catch(Exception $e){
    echo "borrado"; 
   
    }
    finally {
     $second_query = $conexion->query("UPDATE cargo SET activo=1 where email= '$email' ");
     $second_query->execute();
    
    }
}



?>