<?php
	$servidor="localhost";
	$usuario="root";
	$clave="";
	$baseDeDatos="formulario";

	$enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

	if(!$enlace){
		echo"Error en la conexion con el servidor";
	}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"> 
        <title>Formulario</title>
        <link rel="stylesheet" type="text/css" href="estilos.css">
    </head>
    <body style="background-image: url(1.png);">
	<div class="contenedor">
		<form action="" class="formulario" id="formulario" name="formulario" method="POST">
			<div class="contenedor-inputs">
				<input type="text" name="nombre" placeholder="Nombre">
				<input type="text" name="apellido" placeholder="Apellido">
                <div class="abajo"></div>
                <br><br>
				<div class="terminos">
					<input type="checkbox" name="terminos" id="terminos">
					<label for="terminos">Acepto Terminos y Condiciones</label>
				</div>

				<ul class="error" id="error"></ul>
			</div>

			<input type="submit" class="btn" name="registrarse" value="Registrate">
		</form>
		</div>
	</div>
	<script src="formulario.js"></script>
</body>
</html>
<?php
	if(isset($_POST['registrarse'])){
		$nombre =$_POST['nombre'];
		$apellido =$_POST['apellido'];
		$id= rand(1,99);

	$insertarDatos = "INSERT INTO datos VALUES('{$nombre}', '{$apellido}', '{$id}')";

	$ejecutarInsertar = mysqli_query($enlace, $insertarDatos);

	if(!$ejecutarInsertar)
		{
		echo"Error En la linea de sql";
		}
	}
?>