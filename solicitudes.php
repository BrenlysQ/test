<HTML>
<HEAD>
<TITLE> Recepcion de solicitudes </TITLE>
<meta http-equiv="content-type" content="text/html ; charset=utf-8">
</HEAD>
<BODY>
<form action="procesarsolicitud.php" method="POST">
  <h3><center> Recepcion de solicitudes</h3></center>

	<p>Nombre del solicitante: <input type="tex" name="name"></p> 
	<p>Dependencia:<input type="tex" name="dependencia"></p>

	<p>Tipo de Solicitud:
	<SELECT NAME="Solicitud" >
	<OPTION VALUE= "Desarrollo" SELECTED>Desarrollo
	<OPTION VALUE="Soporte">Soporte
	<OPTION VALUE="Servicio">Servicio
	<OPTION VALUE="Evento">Evento
	</SELECT>
</p>
<p><input type="submit" value="Procesar"></p>
</form>
</BODY>
</HTML>
