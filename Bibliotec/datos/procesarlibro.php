<?php

	include('../conexion.php');
	$conexion = conexion();

	header("Content-type: text/html; charset=utf8");
	
	$titulo = $_POST['titulo'];
	$autor = $_POST['autor'];
    $isbm = $_POST['isbm'];
    $id_adm = $_POST['id_adm'];
	
	$sql = "INSERT INTO libro VALUES (null,'$titulo','$isbm','$autor','$id_adm')";

	$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());

	echo"<script type='text/javascript'>
				alert('Libro agregado con éxito.');
				window.location='formulario.php';
		</script>";

	mysqli_close($conexion);

?>
