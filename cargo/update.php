<?php
	include_once 'conexion.php';
/**AQUI TRAEMOS LOS DATOS QUE REQUERIMOS PARA HACER LA MODIFICACION */
	if(isset($_GET['id_cargo'])){
		$id_cargo=(int) $_GET['id_cargo'];

		$buscar_id=$conexion->prepare('SELECT * FROM cargo WHERE id_cargo=:id_cargo  LIMIT 1');
		$buscar_id->execute(array(
			':id_cargo'=>$id_cargo));
		$resultado=$buscar_id->fetch();
	}else{
		header('Location: index.php');
	}


	if(isset($_POST['guardar'])){
		$nombre_cargo=$_POST['nombre_cargo'];
       
		$id_cargo=(int) $_GET['id_cargo'];

		if(!empty($nombre_cargo)){

				$consulta_update=$con->prepare(' UPDATE cargo SET  
					nombre_cargo=:nombre_cargo
				
					WHERE id_cargo=:id_cargo;'
				);
				$consulta_update->execute(array(
					':nombre_cargo' =>$nombre_cargo,
					':id_cargo' =>$id_menu
           
				));
				header('Location: index.php');
			
		}else{
			echo "<script> alert('Los campos estan vacios');</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>EDITAR USUARIO</title>
	<link rel="stylesheet" href="css/estiloo.css">
</head>
<body>
	<script>
        // Funcion para limitar el numero de caracteres de un textarea o input
        // Tiene que recibir el evento, valor y número máximo de caracteres
        function limitar(e, contenido, caracteres)
        {
            // obtenemos la tecla pulsada
            var unicode=e.keyCode? e.keyCode : e.charCode;
 
            // Permitimos las siguientes teclas:
            // 8 backspace
            // 46 suprimir
            // 13 enter
            // 9 tabulador
            // 37 izquierda
            // 39 derecha
            // 38 subir
            // 40 bajar
            if(unicode==8 || unicode==46 || unicode==13 || unicode==9 || unicode==37 || unicode==39 || unicode==38 || unicode==40)
                return true;
 
            // Si ha superado el limite de caracteres devolvemos false
            if(contenido.length>=caracteres)
                return false;
 
            return true;
        }
   

  

         function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }



        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }



    function validarNumero(e) {
    tecla = (document.all) ? e.keyCode : e.which;
    if (tecla==8) return true; 
    patron =/[0-9]/;
    te = String.fromCharCode(tecla); 
    return patron.test(te); 
}
	</script>

	<!-- aqui esta la ventana modal de confirmación -->

    <script type="text/javascript">
      function validar(){
        var form = document.form;

        if(form.documento.value==0){
          alert("El campo documento está vacío")
          form.documento.value="";
          form.documento.focus();
          return false;
        }
        if(form.usuario.value==0){
          alert("El campo usuario está vacío")
          form.usuario.value="";
          form.usuario.focus();
          return false;
        }
        if(form.password.value==0){
          alert("El campo password está vacío")
          form.password.value="";
          form.password.focus();
          return false;
        }
        if(form.privilegio.value==0){
          alert("El campo privilegio está vacío")
          form.privilegio.value="";
          form.privilegio.focus();
          return false;
        }
        if(form.fecha_regristro.value==0){
          alert("El campo fecha de registro está vacío")
          form.fecha_regristro.value="";
          form.fecha_regristro.focus();
          return false;
        }

        alert("Usuario editado con éxito")
        form.guardar();
      }
    </script>
<!-- AQUI ENCONTRAMOS EL FORMULARIO CON LOS DATOS QUE VAN A SER MODIFICADOS -->
<div class="contenedor">
		<h2>Editar Servicios</h2>
		<form action="" method="post">
			<div class="form-group">
				<input type="text" name="nombre_cargo" value="<?php if($resultado) echo $resultado['nombre_cargo']; ?>" class="input__text">
			</div>
			
			<div class="btn__group">
				<a href="index.php" class="btn btn__danger">Cancelar</a>
				<input type="submit" name="guardar" value="Guardar" class="btn btn__primary">
			</div>
		</form>
	</div>
</body>
</html>


