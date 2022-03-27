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
        <!---->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/pedidos.css">
        <link rel="stylesheet" href="css/style.css">
        <!--jquery-->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <!--jquery ui-->
    
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
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
    </header>
    <?php
    session_start();
    if (!isset($_SESSION['usuario'])) {
       header('location:login.html');
       echo "hola ". $_SESSION['usuario'];
    }
   ?>
    <div class="contenedor form-group">
        <h1>Pedido</h1>
        <form action="" method="post">

            <div class="labelyfecha">
                <div class="fecha">
                    <label for="" id="fecha" name="fecha_pedido">Fecha pedido</label>
                </div>

                <div class="date">
                    <input type="date" id="start" name="start" value="2021-01-01" min="1800-01-01" max="3000-12-31" required>
                </div>
            </div>

            <div class="mesa">
                <input type="number" id="pedido" name="pedido" placeholder="Pedido" required>
                <input type="number" id="mesa" name="mesa" placeholder="Mesa" required>
                <input type="text" id="mesero" name="mesero" placeholder="Mesero" required>
            </div>

            <label for="" style="padding-top:15px; padding-right: 30px;">Menu</label>
            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select1[]">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="1">Sancocho</option>
                    <option value="2">Tilapia</option>
                    <option value="3">Salmon</option>
                    <option value="4">Sierra</option>
                    <option value="5" >Corvina</option>
                    <option value="5">Cazuela de mariscos</option>
                    <option value="6">Trucha</option>
                    <option value="7">Robalo</option>
                    <option value="8">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad1" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select2" placeholder="Elige una opcion">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="sancocho">Sancocho</option>
                    <option value="tilapia">Tilapia</option>
                    <option value="salmon">Salmon</option>
                    <option value="sierra">Sierra</option>
                    <option value="corvina" >Corvina</option>
                    <option value="casuela_mariscos">Casuela de mariscos</option>
                    <option value="trucha">Trucha</option>
                    <option value="robalo">Robalo</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad2" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select3">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="sancocho">Sancocho</option>
                    <option value="tilapia">Tilapia</option>
                    <option value="salmon">Salmon</option>
                    <option value="sierra">Sierra</option>
                    <option value="corvina" >Corvina</option>
                    <option value="casuela_mariscos">Casuela de mariscos</option>
                    <option value="trucha">Trucha</option>
                    <option value="robalo">Robalo</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad3" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select4">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="sancocho">Sancocho</option>
                    <option value="tilapia">Tilapia</option>
                    <option value="salmon">Salmon</option>
                    <option value="sierra">Sierra</option>
                    <option value="corvina" >Corvina</option>
                    <option value="casuela_mariscos">Casuela de mariscos</option>
                    <option value="trucha">Trucha</option>
                    <option value="robalo">Robalo</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad4" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select5">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="sancocho">Sancocho</option>
                    <option value="tilapia">Tilapia</option>
                    <option value="salmon">Salmon</option>
                    <option value="sierra">Sierra</option>
                    <option value="corvina" >Corvina</option>
                    <option value="casuela_mariscos">Casuela de mariscos</option>
                    <option value="trucha">Trucha</option>
                    <option value="robalo">Robalo</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad5" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>

            <div class="menu">
                <label for="" style="padding-top:15px; padding-right: 30px;"></label>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <select class="form-control form-control-sm" id="select" name="select6">
                    <option disabled selected>Selecciona una opción</option>
                    <option value="sancocho">Sancocho</option>
                    <option value="tilapia">Tilapia</option>
                    <option value="salmon">Salmon</option>
                    <option value="sierra">Sierra</option>
                    <option value="corvina" >Corvina</option>
                    <option value="casuela_mariscos">Casuela de mariscos</option>
                    <option value="trucha">Trucha</option>
                    <option value="robalo">Robalo</option>
                    <option value="gaseosa">Gaseosa</option>
                    <option value="limonada">Limonada</option>
                    <option value="claro">claro</option>
                    <option value="mazamorra">Mazamorra</option>
                </select>
                <input type="number" name="cantidad6" placeholder="Cantidad" id="cantidad" min="1" max="100">
            </div>



            <div class="btn-group">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
                <button type="submit" class="btn btn-primary" name="nuevo" formaction="pedidos/insertar.php" id="nuevo">Nuevo</button>
                <button type="submit" class="btn btn-primary" name="actualizar" formaction="pedidos/update.php">Actualizar</button>
                <button type="submit" class="btn btn-primary" name="buscar" formaction="pedidos/buscar.php">Buscar</button>
                <button type="submit" class="btn btn-danger" name="eliminar" formaction="´pedidos/eliminar.php" id="eliminar">Eliminar</button>

            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
       <!------------------------------------------------------------------------------------------>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script> 
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="js/pedidos.js"></script>
</body>

</html>