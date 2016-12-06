<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<form action="solicitudsoporte.php" method="POST">
		<h2><center>Datos del Equipo</center></h2>

	<link rel="stylesheet" type="text/css" media="all" href="jquery-ui.min.css" />
  	<script type="text/javascript" src="jquery_2.1.4.js"></script>
	<script type="text/javascript" src="jquery-ui.min.js"></script>
	<script type="text/javascript" src="espanol.js"></script>
	<script type="text/javascript" src="busquedas.js"></script>
	</style>

</head>
<body>
	<p> Tipo de equipo:
	<INPUT TYPE="radio" NAME=tipodeE VALUE="Desktop" CHECKED>Desktop
	<INPUT TYPE="radio" NAME=tipodeE VALUE="Laptop">Laptop
	<INPUT TYPE="radio" NAME=tipodeE VALUE="Periferico">Periferico
	<INPUT TYPE="radio" NAME=tipodeE VALUE="Otro">otro<p>
	Descripcion:</p><TEXTAREA COLS="50" ROWS="4" NAME="descripcion"required></TEXTAREA>
	<p>Ubicacion : <input type="tex" name="ubicacion"required></p> 
	<p>Serial o inventario: <input type="tex" name="serial"required></p>
	
	<p>Fecha de salida: <input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" /></p>
	<p>Fecha de retorno: <input size="25"  maxlength="50" name="final" id="final" class="fecha"/></p>
				
	<p>Por UST: <input type="tex" name="ust"required></p>
	<p>Autorizado Por: <input type="tex" name="autorizado"required></p>  
	<p>Por PIPSUC: <input type="tex" name="pipsuc"required></p> 
	<p><input type="submit" value="Finalizar Solicitud"></p>

</body>
</html>