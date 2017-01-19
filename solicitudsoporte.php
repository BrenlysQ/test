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
			
	}else
	{
		if (($mes_fina-$mes_ini) < 0) 
		{
			echo"Ingrese un dia correcto.";
				
		}else
		{
			if (($dia_fina-$dia_ini) < 0) 
			{
				echo"Ingrese un mes correcto.";
				
			}else
			{

				echo "<script type='text/javascript'>
				alert('Solicitud Realizada exitosamente.');
		</script>";
			}

		}
	}

		
?>