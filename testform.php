<HTML>
<HEAD>
<TITLE> Recepción de solicitudes </TITLE>
<meta http-equiv="content-type" content="text/html ; charset=utf-8">
</HEAD>
<BODY>
<//form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <h3><center> Recepcion de solicitudes</h3></center>
	<p>Nombre del solicitante: <input type="tex" name="name"></p> 

<p>Dependencia:<input type="tex" name="dependencia"></p>

<?php

if($var = $_POST['Solicitud'] || $var==null)
{
	if($var == "Desarrollo"){
	    $sU = "selected";
	}
	if($var == "Soporte"){
	    $sD = "selected";
	}
	if($var == "Servicio"){
	    $sD = "selected";
	}
	if($var == "Evento"){
	    $sD = "selected";
	}
}
?>
<form id="form" name ="form" method="post" action="procesarsolicitud.php">
Tipo de Solicitud:
<SELECT NAME="Solicitud" onChange="document.form.submit();">
<OPTION VALUE= "Desarrollo" SELECTED>Desarrollo
<OPTION VALUE="Soporte">Soporte
<OPTION VALUE="Servicio">Servicio
<OPTION VALUE="Evento">Evento
</SELECT>
<p><input type="submit" value="Procesar"></p>
</form>
</BODY>
</HTML>
