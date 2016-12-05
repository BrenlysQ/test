<?php
	session_start();
	include('../conexion.php');
	$conexion = conexion();
?>
<html lang="es">

<head>
	<meta charset="utf-8">
  	<title>Formulario</title>

  	<link rel="stylesheet" type="text/css" media="all" href="jquery-ui.min.css" />
  	<script type="text/javascript" src="jquery_2.1.4.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
	<script type="text/javascript" src="espanol.js"></script>
	<script type="text/javascript" src="busquedas.js"></script>
</head>

<body>
	<?php 

		

		$dato = $_SESSION['dato'];
		$usuario = $_SESSION['dato_usuario'];

		header("Content-type: text/html; charset=utf8");	


		$sql ="SELECT * FROM usuario where cedula ='$dato'";
		$sql_ ="SELECT * FROM admin where usuario ='$usuario'";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error()); 
		$resultado_ = mysqli_query($conexion,$sql_) or die(mysqli_error());

		$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);
		$row_ = mysqli_fetch_array($resultado_, MYSQLI_ASSOC);
		$carrera = utf8_encode($row['carrera']);

		
		mysqli_close($conexion);
	?>
		
		<p>Nombre: <input size="25" value='<?php echo $row['nombre'];?>' maxlength="50"  name="nombre" id="nombre" disabled/>
		
		</p>

		<p>Número de teléfono: <input size="25"  value=<?php echo $row['telefono'];?> maxlength="50" name="telefono" id="telefono"  disabled/></p>

		<p>Correo electrónico: <input size="25" value=<?php echo $row['correo'];?>  maxlength="50" name="correo" id="correo"  disabled/></p>

		<p>Cédula <input size="25"  value=<?php echo $row['cedula'];?> maxlength="50" name="cedula" id="cedula"  disabled/></p>

		<p>Carrera: <input size="25"  value=<?php echo $carrera;?> maxlength="50" name="carrera" id="carrera"  disabled/></p>
		
		
		<br> 
	<form action="ProcesarFormulario.php" method="post">	
		<input value='<?php echo $row['id'];?>'   name="idestudiante"  type='hidden'/>
		<input value='<?php echo $row_['id'];?>'   name="id_adm"  type='hidden'/>
		<p>Libros: <input size="25"  value='' maxlength="50" name="libro" id="libro" class='buscarlibros' placeholder="Buscar"/></p>
		<p>Fecha de inicio de lectura: <input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" /></p>
		<p>Fecha de finalización de lectura: <input size="25"  maxlength="50" name="final" id="final" class="fecha"/></p>

		<button type='submit'>Prestar</button>
		<a href="formulariolibro.php">Agregar libro</a>
	</form>
		


</body>
</html>