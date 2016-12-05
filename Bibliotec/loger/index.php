 <?php 
  session_start();
  if(!isset($_SESSION["dato_usuario"]))
  { 
     header('Location: ../Loger_Admi/index.php'); 
  }
?>
<html lang="es">

	<head>
		<title>Inicio</title>
  		<meta charset="utf-8">
  	</head>

  	<body>
      <h4>Acceda al menú de usuario.</h4>
      <form action="comprobar_Cedula.php" method="post">
        
  		  <p>Ingrese su cédula: <input size="25"  maxlength="50"  name="cedula" id="cedula" required/></p>
  		
  		  <button type='submit'>Ingresar</button>

	      <button type='reset'>Borrar</button>
      </form>
      <h4>Aquí iría agregar nuevo usuario</h4>

      <a href="../cerrar_session.php">Cerrar sessión</a>
  	</body>
</html>




