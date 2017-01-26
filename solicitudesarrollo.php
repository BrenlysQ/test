<?php 
		include('conexion.php');
		$conexion = conexion();

		header("Content-type: text/html; charset=utf8");

		$interfaz = $_POST['interfaz'];

		$bd = $_POST['bd'];

 		$nombresystem = $_POST['names'];

 		$tiposystem = $_POST['tipo'];

 		$descripcion = $_POST['descripcion'];

 		$namecontac = $_POST['contacto'];

 		$numcontac = $_POST['tlf'];

 		$namerespon = $_POST['responsable'];

 		$programador = $_POST['programador1'];

 		$programador2 = $_POST['programador2'];

 		$estatus = $_POST['estatus'];

 		$ruta_acces = $_POST['ruta'];

		$requerimentf = $_POST['fichero'];

 		$requerimentnf = $_POST['fichero2'];

 		$sql = "INSERT INTO desarrollo VALUES ('$interfaz','$bd','$descripcion','$nombresystem','$tiposystem','$namecontac','$numcontac','$namerespon','$programador','$programador2','$estatus','$ruta_acces','$requerimentf','$requerimentnf')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

	echo "<script type='text/javascript'>
				alert('Solicitud Realizada exitosamente.');
		</script>";

	mysqli_close($conexion);
	?>
