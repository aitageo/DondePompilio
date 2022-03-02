<?php
	include_once 'conexion.php';

	$sentencia_select=$conexion->prepare('SELECT *FROM cargo ORDER BY id_cargo DESC');
	$sentencia_select->execute();
	$resultado=$sentencia_select->fetchAll();

	// metodo buscar
	if(isset($_POST['btn_buscar'])){
		$buscar_text=$_POST['buscar'];
		$select_buscar=$conexion->prepare('
			SELECT * FROM cargo WHERE id_cargo LIKE :campo OR nombre_cargo LIKE :campo;'
		);

		$select_buscar->execute(array(
			':campo' =>"%".$buscar_text."%"
		));

		$resultado=$select_buscar->fetchAll();

	}

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	
</head>
<body>

	<div class="contenedor">
		<h2>REGISTRO DE USUARIOS</h2>
		<div class="barra__buscador">
			<form action="" class="formulario" method="post">
				<input type="text" name="buscar" placeholder="Codigo ID usuario o Documento" 
				value="<?php if(isset($buscar_text)) echo $buscar_text; ?>" class="input__text">
				<input type="submit" class="btn" name="btn_buscar" value="Buscar">
				<a href="insertar.php" class="btn btn__nuevo">Registrar Usuario</a>
				<a href="../pdff/index.php" class="btn btn__nuevo">Reporte</a>
				<a href="../vista/usuario.php" class="btn btn__nuevo">Volver</a>
			
			
			</form>
		</div>
		<table>
			<tr class="head">
				<td>ID cargo</td>
				<td>nombre_cargo</td>
                <td>email</td>
				<td>contraseña</td>
				
				<td colspan="2">Acción</td>
			</tr>
			<?php foreach($resultado as $fila):?>
				<tr>
					<td><?php echo $fila['id_cargo'];?></td>
					<td><?php echo $fila['nombre_cargo'];?></td>
                    <td><?php echo $fila['email'];?></td>
                   
					
					<td><a href="update.php?id_menu=<?php echo $fila['id_cargo']; ?>"  class="btn__update" >Editar</a></td>
					<td><a href="delete.php?id_menu=<?php echo $fila['id_cargo'];?>"class="btn__delete">Eliminar</a></td>

				</tr>
			<?php endforeach ?>
		</table>
	</div>

	
</body>
</html>