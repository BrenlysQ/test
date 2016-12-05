<?php
	session_start();
    unset ($_SESSION["dato_usuario"]);
    session_unset();
    session_destroy();
    header('Location: Loger_admi/index.php');
?>