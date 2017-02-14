<HTML>
<HEAD>
<TITLE> Recepcion de solicitudes </TITLE>
<meta http-equiv="content-type" content="text/html ; charset=utf-8">
</HEAD>
<BODY>
<form action="procesarsolicitud.php" method="POST">
  <?php 
		include('conexion.php');
		$conexion = conexion();

		header("Content-type: text/html; charset=utf8");


		$solicitante = $_POST['name'];

		$dependencia = $_POST['dependencia'];

		$tipoSolicitud = $_POST['Solicitud'];

		

		$sql = "INSERT INTO solicitantes VALUES ('$solicitante','$dependencia', '$tipoSolicitud')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error($conexion));

		mysqli_close($conexion);

		echo "si";

		
	?>
</HTML>
