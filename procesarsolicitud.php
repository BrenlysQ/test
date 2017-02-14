<?php 
		include('conexion.php');
		$conexion = conexion();


		header("Content-type: text/html; charset=utf8");
		
		date_default_timezone_set('America/Caracas');


		$solicitante = $_POST['name'];

		$dependencia = $_POST['dependencia'];

		$tipoSolicitud = $_POST['Solicitud'];

		$inicio = $_POST['inicio'];
		

		$sql = "INSERT INTO solicitante VALUES ('$solicitante','$dependencia', '$tipoSolicitud','$inicio')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

		if($_POST['Solicitud']=="Desarrollo")
		{
			header("location: Desarrollo.php" );
		}
	 	
	 	if($_POST['Solicitud']=="Soporte")
		{
			header("location: Soporte.php" );
		}

		if($_POST['Solicitud']=="Servicio")
		{
			header("location: Servicio.php" );
		}

		if($_POST['Solicitud']=="Evento")
		{
			header("location: Evento.php" );
		}

		mysqli_close($conexion);

 	?>