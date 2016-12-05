<?php
	session_start();
	include('../conexion.php');
	$conexion = conexion();


	
	header("Content-type: text/html; charset=utf8");

	$usuario = $_POST['usuario'];
	$contraseña = $_POST['pass'];

	$sql ="SELECT  usuario FROM admin where usuario ='$usuario'";

	$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());  

	$sql_ ="SELECT  contrasena FROM admin where contrasena ='$contraseña'"; 

	$resultado_ = mysqli_query($conexion,$sql_) or die(mysqli_error());  

	if((mysqli_num_rows($resultado)>0) && (mysqli_num_rows($resultado_)>0))
	{	
		$_SESSION['dato_usuario']=$usuario;	
		header("Location:  ../loger/index.php");
	}
	else
	{
		echo"<script type='text/javascript'>
				alert('Disculpe, su usuario o contraseña son incorrecto.');
				window.location='index.php';
			</script>";
	}
	mysqli_close($conexion);
?>
