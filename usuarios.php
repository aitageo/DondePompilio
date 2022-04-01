<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donde Pompilio</title>
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

<!--Pruebas -->

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>-->

    <!---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/menu.css">
    <!--jquery-
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
-->
    <!--jquery ui

    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>

-->  </head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
          <ul class="navbar-nav ">
          <a href="index.html"><img src="img/dondePompilio.png" alt="" srcset="" id="logo"></a>
            <li class="nav-item active">
              <a class="nav-link" href="cargo.php">Cargo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clientes.php">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="usuarios.php" id="login">Empleados</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="menu.php" id="menu">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pedidos.php" id="pedidos">Pedido</a>
              </li>
          </ul>
        </div>
      </nav>
    </div>
    <?php
     session_start();
     if (!isset($_SESSION['usuario'])) {
        header('location:login.html');
     }
    ?>
  
    <div class="contenedor">
        <h1>Empleados</h1>
        <form action="" method="post">
            <input type="text" id="numero_cedula" name="numero_cedula" placeholder="Numero de cedula"  required maxlength="15" minlength="7" pattern="[0-9]{1,15}">
            <input type="text" id="nombre" name="nombre" placeholder="Nombre">
            <input type="text" id="apellido"  name="apellido" placeholder="apellido" id="apellido">
            <input type="password" id="password"  name="password" id="password" placeholder="contraseña" required>
            <input type="text"  id="telefono" name="telefono" placeholder="telefono" id="telefono">
            <input type="text"  id="direccion" name="direccion" placeholder="direccion" id="direccion" >
            <input type="number" id="cargo" name="id_cargo" id="cargo" placeholder="Numero Cargo" min="1" max="100" required>

            <div class="btn-group">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                  <button type="submit" class="btn btn-primary" name="nuevo" formaction="./modal/insertar.php" id="nuevo">Nuevo</button>
                  <button type="submit" class="btn btn-primary" name="actualizar" formaction="./modal/actualizar.php" id="actualizar">Actualizar</button>
         
           </div>  
        </form>
    </div>
    <div class="redireccion">
    <input type="button" onclick="window.location.href= 'modal/buscar_eliminar.php'" name="Eliminar" value="Eliminar y buscar" id="eliminar_usuario">
    <input type="button" onclick="window.location.href= 'cerrar_sesion.php'" value="Cerrar sesion" id="sesion">
    </div>
   
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

   <!------------------------------------------------------------------------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
    crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script src="js/usuarios.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>