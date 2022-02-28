<?php 
if(isset($_POST['actulizar'])){
    echo "hola";
    $numero_cedula = $_POST['numero_cedula'];
    $entero = intval($numero_cedula);
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $password = $_POST['password'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $id_cargo = $_POST['id_cargo'];
    echo $id_cargo;
    echo "saludo";

    
    $query = "UPDATE `empleados` SET `numero_cedula`='$entero',`nombre`='$nombre',`password`='$password',`apellido`='$apellido',`telefono`='$telefono',`direccion`='$direccion',`FK_id_cargo`='$id_cargo' WHERE numero_cedula='$entero'";
    $result = $conexion->prepare($query);
    $result->execute();


}
?>