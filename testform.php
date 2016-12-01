<HTML>
<HEAD>
<TITLE> Recepcion de solicitudes </TITLE>
<meta http-equiv="content-type" content="text/html ; charset="iso-8859-1" ">
</HEAD>
<BODY>
<h1> Rellena los campos(form.html)</h1>
<form action="analisis.php" method="post">
Nombre del solicitante:
<input type="tex" name="name">
Dependencia:
<input type="tex" name="dependencia">
Tipo de Solicitud:
<SELECT NAME=“Tipo de solicitud">
<OPTION VALUE= “Sistema" SELECTED>Sistema
<OPTION VALUE=“Soporte">Soporte
<OPTION VALUE=“Servicio">Servicio
<OPTION VALUE=“Evento">Evento
</SELECT>
<?PHP
$solicitud = $_REQUEST[‘solicitud’];
print ($solicitud);
?>
<input type="submit">
</form>
</BODY>
</HTML>