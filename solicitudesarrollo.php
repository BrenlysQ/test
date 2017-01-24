<?php 
		include('../conexion.php');
		$conexion = conexion();

		header("Content-type: text/html; charset=utf8");

		$interfaz = $_POST['interfaz'];

		$bd = $_POST['bd'];

		$namesystem = $_POST['names'];

		$inicio = $_POST['inicio'];

 		$final = $_POST['final'];

 		$tipoP = $_POST['tipo'];

 		$descripcion = $_POST['descripcion'];

 		$namecontac = $_POST['contacto'];

 		$numcontac = $_POST['tlf'];

 		$namerespon = $_POST['responsable'];

 		$programador = $_POST['programador1'];

 		$programador2 = $_POST['programador2'];

 		$estatus = $_POST['estatus'];

 		$tipodep = $_POST['tipodep'];

		$sql = "INSERT INTO prestam VALUES ('$tipodeE','$descripcion','$audiovisual''$inicio','$final','$facilitador1','$facilitador2','$tipodep')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());

	echo "<script type='text/javascript'>
				alert('Solicitud Realizada exitosamente.');
		</script>";

	mysqli_close($conexion);
	?>
