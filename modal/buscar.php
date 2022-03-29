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
    <link rel="stylesheet" href="../css/buscar.css">
    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!--jquery ui-->

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>  
  </head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <a class="navbar-brand" href="../index.html"><img src="../img/dondePompilio.png" alt="" srcset="" id="logo"></a>
          <ul class="navbar-nav mr-auto">
          
            <li class="nav-item active">
              <a class="nav-link" href="#">Cargo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../usuarios.php" id="login">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html" id="login">Pedido</a>
              </li>
          </ul>
        </div>
      </nav>
    </div>

<?php
include("db.php");
if(isset($_POST['buscar'])){
    $numero_cedula = intval($_POST['numero_cedula']);
$registro = $conexion->query("SELECT *FROM empleados WHERE numero_cedula='$numero_cedula'")->fetchAll(PDO::FETCH_OBJ); 

if(empty($registro)){
   $mensaje = "<script>alert('no se encontro nada')</script>";
   header("location:../usuarios.php",$mensaje);
}
?>



<?php foreach ($registro as $key): ?>
  <br>
  <br>
  <br>
  <div class="latabla">
  <table class="table table-sm table-dark">
  <thead>
    <tr>
      <th scope="col">Numero de cedula</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Telefono</th> 
      <th scope="col">Direccion</th>
      <th scope="col">Cargo</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php echo  $key->numero_cedula?></td>
      <td><?php echo  $key->nombre?></td>
      <td><?php echo  $key->apellido?></td>
      <td><?php echo  $key->telefono?></td>
      <td><?php echo  $key->direccion?></td>
      <td><?php echo  $key->FK_id_cargo?></td>
    </tr>
  </tbody>
</table>

  </div>

    <?php endforeach; ?>

<?php
};
?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!------------------------------------------------------------------------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src=""></script>
</body>
</html>
