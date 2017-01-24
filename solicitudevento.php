
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

		$sql = "INSERT INTO evento VALUES ('$tipodeE','$descripcion','$audiovisual''$inicio','$final','$facilitador1','$facilitador2','$tipodep')";

		$resultado = mysqli_query($conexion,$sql) or die(mysqli_error());

	echo "<script type='text/javascript'>
				alert('Solicitud Realizada exitosamente.');
		</script>";

	mysqli_close($conexion);
	?>

	/<?php
	

	//$idnuevo = explode("->",$libro);
	
	//$idlibro = $idnuevo[0];

	//https://programarenphp.wordpress.com/2010/10/30/insertar-datos-del-formulario-a-tu-base-de-datos-en-php/

	// http://www.uterra.com/base_datos_mysql/codigo_mysql.php?ref=guardar_datos_en_una_base_de_datos


	//http://www.aprenderaprogramar.com/index.php?option=com_content&view=article&id=615:php-insert-into-values-insertar-datos-registros-filas-en-base-de-datos-mysql-ejemplos-y-ejercicio-cu00843b&catid=70:tutorial-basico-programador-web-php-desde-cero&Itemid=193

	/*$consulta="insert into Alumnos values ('$Nombre1','$Nombre2','$Apellido1','$Apellido2','$Acudiente','$Nacido','$Codigo','$Sexo','$Grado','$Ingreso','$index')";
		
		$resultado=mysqli_query($connect,$consulta);*/
	//http://www.webtaller.com/construccion/lenguajes/php/lecciones/insertar-contenido-formulario-base-datos-mysql-php.php

		//http://www.aprenderaprogramar.com/foros/index.php?topic=2302.0
	
		//http://www.pablin.com.ar/computer/cursos/phpmysql/masregistrosbd.htm
		//https://codigofacilito.com/videos/insertar_datos_en_mysql_mediante_php
		//http://soporte.miarroba.es/17452/2933728-como-mandar-datos-via-formulario-a-una-base-de-datos-con-php-o-lo-q-sea/
		?>*/	

	