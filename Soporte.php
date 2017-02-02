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
		

	</head>
<body>
	<p> Tipo de equipo:
		<input TYPE="radio" NAME="tipodee" VALUE="Desktop" CHECKED>Desktop
		<input TYPE="radio" NAME="tipodee" VALUE="Laptop">Laptop
		<input TYPE="radio" NAME="tipodee" VALUE="Periferico">Periferico
		<input TYPE="radio" NAME="tipodee" VALUE="Otro">otro
		<input TYPE="tex" NAME="otroCual">
	</p>

	<p>Descripcion:
		<TEXTAREA COLS="50" ROWS="4" NAME="descripcion"required></TEXTAREA>
	</p>

	<p>Diagnostico:
		<TEXTAREA COLS="50" ROWS="4" NAME="diagnostico"required></TEXTAREA>
	</p>

	<p>Ubicacion : 
		<input type="tex" name="ubicacion"required>
	</p> 

	<p>Serial o inventario: 
		<input type="tex" name="serial"required>
	</p>

	<p>Técnico que lo recibe: 
		<input type="tex" name="Trecibe"required>
	</p>
	
	<p>Técnico que lo repara: 
		<input type="tex" name="Trepara"required>
	</p>
	
	<p>Fecha de entrada:
		 <input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" />
	</p>

	<p>Fecha de salida: 
		<input size="25"  maxlength="50" name="final" id="final" class="fecha"/>
	</p>

	<p>Trabajo realizado:
		<INPUT TYPE="radio" NAME="trealizado" VALUE="mantenimiento" CHECKED>mantenimiento
		<INPUT TYPE="radio" NAME="trealizado" VALUE="cambio_pieza">campio de pieza
		<INPUT TYPE="radio" NAME="trealizado" VALUE="formateo">formateo
		<INPUT TYPE="radio" NAME="trealizado" VALUE="Otro">otro
		<INPUT type="tex" name="otroCual">
	</p>
				
	<p>Por UST: 
		<input type="tex" name="ust"required>
	</p>

	<p>Autorizado Por: 
		<input type="tex" name="autorizado"required>
	</p>  

	<p>Por PIPSUC: 
		<input type="tex" name="pipsuc"required>
	</p> 

	<p><input type="submit" value="Finalizar Solicitud"></p>

</body>
</html>