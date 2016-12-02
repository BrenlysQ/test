<!DOCTYPE html>
<html>
<head>
	<title>HI</title>
</head>
<body>
	<?php 
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

 	?>
</body>
</html>