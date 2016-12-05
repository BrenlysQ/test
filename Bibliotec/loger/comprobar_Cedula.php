<?php
	session_start();
	
	include('../conexion.php');
	$conexion = conexion();

	
	
	header("Content-type: text/html; charset=utf8");

	$cedula = $_POST['cedula'];

	$sql ="SELECT  cedula FROM usuario where cedula ='$cedula'";

	$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());  

	if(mysqli_num_rows($resultado)>0)
	{	
		$_SESSION['dato']=$cedula;	
		header("Location:  ../datos/formulario.php");
	}
	else
	{
		echo"<script type='text/javascript'>
				alert('Disculpe, sólo estudiantes de FACYT pueden ingresar.');
				window.location='index.php';
			</script>";
	}
	mysqli_close($conexion);
?>
