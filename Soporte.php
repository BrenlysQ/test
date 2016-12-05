<!DOCTYPE html>
<html>
<head>
	<form action="solicitudsoporte.php" method="POST">
	<h2><center>Datos del Equipo</center></h2>
	<p> Tipo de equipo:
	<INPUT TYPE="radio" NAME=estatus VALUE="Desktop" CHECKED>Desktop
	<INPUT TYPE="radio" NAME=estatus VALUE="Laptop">Laptop
	<INPUT TYPE="radio" NAME=estatus VALUE="Periferico">Periferico
	<INPUT TYPE="radio" NAME=estatus VALUE="Otro">otro<p>Descripcion:</p><TEXTAREA COLS=“50" ROWS=“4" NAME="descripcion"required></TEXTAREA>
	<p>Ubicacion : <input type="tex" name="ubicacion"required></p> 
	<p>Serial o inventario: <input type="tex" name="serial"required></p>
	Fecha de Salida:<input type="date" name="Fechas">&nbsp;
	Fecha de Retorno:<input type="date" name="FechaE">
	<p>Por UST: <input type="tex" name="ust"required></p>
	<p>Autorizado Por: <input type="tex" name="autorizado"required></p>  
	<p>Por PIPSUC: <input type="tex" name="pipsuc"required></p> 




</head>
<body>

</body>
</html>