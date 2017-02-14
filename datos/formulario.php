
//html lang="es">

<head>
	<meta charset="utf-8">
  	<title>Formulario</title>
  	<form action="proceso_edit_prestamo.php"  method="post">
  	<link rel="stylesheet" type="text/css" media="all" href="jquery-ui.min.css" />
  	<script type="text/javascript" src="jquery_2.1.4.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
	<script type="text/javascript" src="espanol.js"></script>
	<script type="text/javascript" src="busquedas.js"></script>
</head>

<body>

		<p>Fecha de inicio de lectura: <input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" /></p>
		<p>Fecha de finalización de lectura: <input size="25"  maxlength="50" name="final" id="final" class="fecha"/></p>
</form>
	<p><input type="submit" value="Procesar"></p>

</body>
</html>