<?php
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
	<script type="text/javascript" src="jquery-ui.js"></script>
	<script type="text/javascript" src="espanol.js"></script>
	<script type="text/javascript" src="busquedas.js"></script>
</head>

<body>
	<?php 

		session_start();

		$dato = $_SESSION['dato_usuario'];

		header("Content-type: text/html; charset=utf8");
		
		$sql ="SELECT * FROM admin where usuario ='$dato'";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error()); 

		$row = mysqli_fetch_array($resultado, MYSQLI_ASSOC);

		
		mysqli_close($conexion);
	?>

	<form action="procesarlibro.php" method="post">

		<input value='<?php echo $row['id'];?>'   name="id_adm"  type='hidden'/>

		<p>Título: <input size="25"  maxlength="50" name="titulo" id="titulo" required/></p>

		<p>Autor: <input size="25"  maxlength="50" name="autor" id="autor" required/></p>
		
		<p>ISBM: <input size="25"  maxlength="50" name="isbm" id="isbm" required/></p>

	    <button type='submit'>Agregar Libro</button>
	</form>


</body>
</html>