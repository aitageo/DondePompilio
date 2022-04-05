<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido</title>
    <!--Fuentes-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <!-------->
    <script src="js/jquery-3.6.0.min.js"></script>
    <!-------->
    <!---->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="css/pedidos.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!--barra de navegacion-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-black">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
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
                    <a class="nav-link" href="menu.php" id="login">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pedidos.php" id="login">Pedido</a>
                </li>
            </ul>
        </div>
    </nav>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
        header('location:login.html');
        echo "hola " . $_SESSION['usuario'];
    }
    ?>
    </header>
  <div class="boton-cargar">
      <button class="btn btn-primary" id="cargar">Cargar Empleado</button>
  </div>

    <div id="Mimodal" class="modal fade show" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content" style="margin-top: 200px;">
                <div style="width:100%" class="form-group">
                    <form action="pedidos/guardar.php" method="post">
                    <h4>Ingresa cedula y fecha</h4>
                    <hr>
                    <input type="text" id="cedula" placeholder="cedula" name="cedula" class="form-control" pattern="[0-9]{1,15}">
                    <input type="date" id="fecha" placeholder="fecha" name="fecha" class="form-control">
                    <button type="submit" formaction="pedidos/guardar.php"  name="guardar" class="btn btn-primary" id="close" data-dismiss="modal" aria-hidden="true">Guardar</button>
                    <button type="submit" formaction="pedidos/guardar.php"  name="guardar" class="btn btn-danger" id="close" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="contenedor form-group">
        <h1>Pedido</h1>
        <form action="" method="post">
            <div class="mesa">
                <input type="number" id="pedido" name="pedido" placeholder="Pedido" required min="1" max="100">
                <input type="number" id="mesa" name="mesa" placeholder="Mesa" required min="1" max="100">
            </div>
            <label for="" style="padding-top:10px; padding-right: 15px;">Menu</label>
            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <select class="form-control form-control-sm" id="select1" name="select1">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="1">Sancocho</option>
                    <option value="2">Tilapia</option>
                    <option value="3">Salmon</option>
                    <option value="4">Sierra</option>
                    <option value="5">Corvina</option>
                    <option value="6">Cazuela de mariscos</option>
                    <option value="7">Trucha</option>
                    <option value="8" name="Robalo">Robalo</option>
                    <option value="9">Gaseosa</option>
                    <option value="10">Limonada</option>
                    <option value="11">claro</option>
                    <option value="12">Mazamorra</option>
                </select>
                <input type="number" name="cantidad1" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <select class="form-control form-control-sm" id="select2" name="select2" placeholder="Elige una opcion">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="1">Sancocho</option>
                    <option value="2">Tilapia</option>
                    <option value="3">Salmon</option>
                    <option value="4">Sierra</option>
                    <option value="5">Corvina</option>
                    <option value="6">Cazuela de mariscos</option>
                    <option value="7">Trucha</option>
                    <option value="8">Robalo</option>
                    <option value="9">Gaseosa</option>
                    <option value="10">Limonada</option>
                    <option value="11">claro</option>
                    <option value="12">Mazamorra</option>
                </select>
                <input type="number" name="cantidad2" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>
            <div class="btn-group">

                <button type="submit" class="btn btn-primary" name="nuevo" formaction="pedidos/insertar.php" id="nuevo">Nuevo</button>
                <button type="submit" class="btn btn-primary" name="actualizar" id="actualizar" formaction="pedidos/update.php">Actualizar</button>
            </div>
        </form>
    </div>
    <div class="redireccion">
    <input type="button" onclick="window.location.href= 'pedidos/buscar_eliminar.php'" name="Eliminar" value="Eliminar y buscar" id="eliminar_usuario">
    <input type="button" onclick="window.location.href= 'cerrar_sesion.php'" value="Cerrar sesion" id="sesion">
    </div>
    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!------------------------------------------------------------------------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/pedidos.js"></script>
</body>

</html>