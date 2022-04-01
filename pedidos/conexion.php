<?php
try{
    $conexion= new PDO ("mysql:host=localhost;dbname=pompilio", "root","");
}
catch(Exception $e){
    die('error'.$e->getMessage());
    echo'error'.$e->getLine();

    
}
?>