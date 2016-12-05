<?php
	
	include('../conexion.php');
	$conexion = conexion();

	header("Content-type: text/html; charset=utf8");
	
	$libro = $_POST['libro'];
	$idnuevo = explode("->",$libro);
	
	$id_libro = $idnuevo[0];
	
	$inicio = $_POST['inicio'];
	$id_estudiante = $_POST['idestudiante'];
	
	$final = $_POST['final'];
	$id_adm = $_POST['id_adm'];


	$sql = "INSERT INTO prestamo VALUES (null,'$inicio','$final','$id_libro','$id_estudiante','$id_adm')";

	$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());

	echo"<script type='text/javascript'>
				alert('Se ha registrado su prestamo con éxito.');
				window.location='../loger/index.php';
			</script>";

	mysqli_close($conexion);
?>
