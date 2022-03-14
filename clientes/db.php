<?php
try {
     
    $conexion= new PDO('mysql:host=localhost;dbname=donde_pompilio','root','');
    // echo "conexion exitosa";
} catch (Exception $e) {
    die("error" .$e->getMessage());
    echo "linea del error " .$e->getLine();
   
}
?>