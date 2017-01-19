<?php

	include('./conexion.php');
	$conexion = conexion();
?>
	<head>
		<meta charset="utf-8">
		<form action="solicitudevento.php" method="POST">
			<h2><center>Datos del Evento</center></h2>

		<link rel="stylesheet" type="text/css" media="all" href="jquery-ui.min.css" />
	  	<script type="text/javascript" src="jquery_2.1.4.js"></script>
		<script type="text/javascript" src="jquery-ui.min.js"></script>
		<script type="text/javascript" src="espanol.js"></script>
		<script type="text/javascript" src="busquedas.js"></script>
		

</head>
<body>
	<p> Tipo de Evento:
		<input TYPE="radio" NAME="tipodeE" VALUE="Foro" CHECKED>Foro
		<input TYPE="radio" NAME="tipodeE" VALUE="Conferencia">Conferencia
		<input TYPE="radio" NAME="tipodeE" VALUE="Taller">Taller
		<input TYPE="radio" NAME="tipodeE" VALUE="Otro">otro
		
		
	<p>Descripcion:
		<TEXTAREA COLS="50" ROWS="4" NAME="descripcion"required></TEXTAREA>
	</p>

	<p>Requiere Audio-visual:
		<INPUT TYPE="radio" NAME=audiovisual VALUE="si" CHECKED>si
		<INPUT TYPE="radio" NAME=audiovisual VALUE="no">no
	</P>
	
	<p>Fecha de Inicio:
		 <input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" />
	</p>

	<p>Fecha de Culminacion: 
		<input size="25"  maxlength="50" name="final" id="final" class="fecha"/>
	</p>
				
	<p>Facilitador (es):
		<input type="tex" name="facilitador1"required>
		<input type="text" name="facilitador2" required>		
	</p>

	<p> Tipo de Participacion:
		<input TYPE="radio" NAME="tipodep" VALUE="presencial" CHECKED>presencial
		<input TYPE="radio" NAME="tipodep" VALUE="a_distancia">a_distancia
		<input TYPE="radio" NAME="tipodep" VALUE="Otro">otro
	</p>

	<p><input type="submit" value="Finalizar Solicitud"></p>
	
</body>
</html>