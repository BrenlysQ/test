<?php

	header("Content-type: text/html; charset=utf8");
	
	date_default_timezone_set('America/Caracas');
	
	
	$inicio = $_POST['inicio'];
	$final = $_POST['final'];


	$fecha_inicio = new DateTime($inicio);
	$fecha_final = new DateTime($final);

	$dia_ini = $fecha_inicio->format('d');
	$dia_fina = $fecha_final->format('d');

	$año_ini = $fecha_inicio->format('y');
	$año_fina = $fecha_final->format('y');

	$mes_ini = $fecha_inicio->format('m');
	$mes_fina = $fecha_final->format('m');

	if (($año_fina-$año_ini) < 0) 
	{
		echo "Ingrese un año correcto.";
				echo "<script type='text/javascript'>
							//alert('solicitud registrada con éxito.');
							window.location='./formulario.php;
					</script>";
	}else
	{
		if (($mes_fina-$mes_ini) < 0) 
		{
			echo"Ingrese un mes correcto.";
				echo "<script type='text/javascript'>
							//alert('solicitud registrada con éxito.');
							window.location='./formulario.php;
					</script>";
		}else
		{
			if (($dia_fina-$dia_ini) < 0) 
			{
				echo"Ingrese un día correcto.";
				echo "<script type='text/javascript'>
							//alert('solicitud registrada con éxito.');
							window.location='./formulario.php;
					</script>";
			}else
			{

				echo "solicitud exitosa..";
				echo "<script type='text/javascript'>
							//alert('solicitud registrada con éxito.');
							window.location='./formulario.php';
					</script>";
			}

		}
	}

		
?>
