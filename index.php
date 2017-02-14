<HTML>
<HEAD>
<TITLE> Recepcion de solicitudes </TITLE>
<meta charset="utf-8">
<form action="procesarsolicitud.php" method="POST">
	
		<link rel="stylesheet" type="text/css" media="all" href="jquery-ui.min.css" />
	  	<script type="text/javascript" src="jquery_2.1.4.js"></script>
		<script type="text/javascript" src="jquery-ui.min.js"></script>
		<script type="text/javascript" src="espanol.js"></script>
		<script type="text/javascript" src="busquedas.js"></script>
  <h3><center> Recepcion de solicitudes</h3></center>
</HEAD>
<BODY>

	<p>Nombre del solicitante: <input type="tex" name="name"required></p> 
	<p>Dependencia:<input type="tex" name="dependencia"required></p>

	Fecha de la solicitud:
	 	<input size="25"  maxlength="50" name="inicio" id="inicio" class="fecha" />
	

	<p>Tipo de Solicitud:
		<SELECT NAME="Solicitud">
		<OPTION VALUE= "Desarrollo" SELECTED>Desarrollo
		<OPTION VALUE="Soporte">Soporte
		<OPTION VALUE="Servicio">Servicio
		<OPTION VALUE="Evento">Evento
		</SELECT>
	</p>

<p><input type="submit" value="Procesar"></p>

</BODY>
</HTML>
