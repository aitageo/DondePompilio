<?php
    include("conexion.php");

    // setiar el boton (Eliminar) en el front
    if(isset($_POST['eliminar'])){
        // obtener el valor de los inputs deacuerdo a la vista asociada
        $pedido= $_POST['pedido'];

    // Consulta sql para eliminar segun el # pedido
    try{   
        $query = " UPDATE pedido SET activo=0 where id= '$pedido'";
        $delete = $conexion->prepare($query); //variable metodo= prepara el archivo conexion.php segun la consulta sql que se esta reali
        $delete->execute(); //ejecuta la 
        header('location:../pedidos.php');
        }catch(Exception $f){
            die("error" .$f->getMessage());
            echo "Ha ocurrido un error" .$f->getLine();
        }
    }
?>
<script>alert("Datos eliminados")</script>


