<!DOCTYPE html>
<html>
	<head>
		<form action="solicitudesarrollo.php" method="POST">
		<h2><center>Requerimientos de su sistema</center></h2>
	

	</head>

	<body>
		Interfaz:
			<INPUT TYPE="radio" NAME=interfaz VALUE="si" CHECKED>si
			<INPUT TYPE="radio" NAME=interfaz VALUE="no">no


		Manejo de Bases de datos:
			<input type="radio" NAME=bd VALUE="si" CHECKED>si
			<input type="radio" NAME=bd VALUE="no">no

		Nombre del sistema:
		 	<input type="tex" name="names"required>
		</p> 

		<p>Tipo (uso): 
			<input type="tex" name="tipo"required>
		</p> 

		<p>Descripcion:
			<TEXTAREA COLS="50" ROWS="4" NAME="descripcion"required>
			</TEXTAREA>
		</p>

		<p>Nombre del contacto: 
			<input type="tex" name="contacto"required>
 
		   Numero del contacto:
			 <input type="tex" name="tlf"required>
		</p> 

		<p>Responsable del Proyecto(Coordinador): 
			<input type="tex" name="responsable"required>
		</p> 

		<p>Programadores:
			<input type="tex" name="programador1"required>
			<input type="text" name="programador2" required>
			<input type="text" name="programador3">
			<input type="text" name="programador4">
		</p>

		<p>Estatus:
			<INPUT TYPE="radio" NAME=estatus VALUE="recibido" CHECKED>recibido
			<INPUT TYPE="radio" NAME=estatus VALUE="en proceso">en proceso
			<INPUT TYPE="radio" NAME=estatus VALUE="finalizado">finalizado
			<INPUT TYPE="radio" NAME=estatus VALUE="conforme">conforme
		</p>

		<p>Ruta de acceso: 
			<input type="tex" name="ruta"required>
		</p>

		<p>Requerimientos funcionales:
			<ENCTYPE="multipart/form-data">
				<INPUT TYPE="file" NAME="fichero"required>
		</p>

		<p>Requerimientos no funcionales:
			<ENCTYPE="multipart/form-data">
			<INPUT TYPE="file" NAME="fichero2"required>
		</p>

		<p><input type="submit" value="Finalizar Solicitud"></p>

	</body>
</html>