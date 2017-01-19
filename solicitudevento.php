
	<?php 
		include('../conexion.php');
		$conexion = conexion();

		header("Content-type: text/html; charset=utf8");

		$tipodeE = $_POST['tipodeE'];

		$descripcion = $_POST['descripcion'];

		//$audiovisual = $_POST['audiovisual'];

		$inicio = $_POST['inicio'];

 		$final = $_POST['final'];

 		$facilitador = $_POST['facilitador1'];

 		$facilitador2 = $_POST['facilitador2'];

 		$tipodep = $_POST['tipodep'];

		$sql = "INSERT INTO prestam VALUES ('$tipodeE','$descripcion','$audiovisual''$inicio','$final','$facilitador1','$facilitador2','$tipodep')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());

	echo "<script type='text/javascript'>
				alert('Solicitud Realizada exitosamente.');
		</script>";

	mysqli_close($conexion);
	?>

	/<?php
	

	//$idnuevo = explode("->",$libro);
	
	//$idlibro = $idnuevo[0];


	//?>*/	