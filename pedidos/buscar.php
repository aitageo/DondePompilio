<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Donde Pompilio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/practica10.css">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--jquery ui-->

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>  
  </head>
<body>

<?php
include("conexion.php");
if(isset($_POST['buscar'])){
    $pedido = $_POST['pedido'];
    $registro = $conexion->query("SELECT * FROM pedido WHERE id_pedido='$pedido'")->fetchAll(PDO::FETCH_OBJ); ?>

<?php foreach ($registro as $key): ?>


<div class='encabezado'>
  <h3>Resultados de la busqueda</h3>
  </div>
  <form action='buscar.php' method='post'>
  <input type='text'  name='nombre' value='<?php echo  $key->id_pedido?>'><br>
  <input type='text'  name='nombre' value='<?php echo  $key->fecha_pedido?>'><br>
  <input type='text'  name='telefono' value='<?php echo  $key->cantidad_menu?>'><br>
  <input type='text'  name='nombre' value='<?php echo  $key->FK_id_cedula_empleado?>'><br>
  <input type='text'  name='direccion'value='<?php echo  $key->FK_id_menu?>'><br>
  <input type='text' name='fecha' value='<?php echo  $key->FK_id_mesas?>'><br>
  </form>

<?php endforeach; ?>

<?php
};
?>
</body>
</html>