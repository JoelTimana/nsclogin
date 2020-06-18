<?php
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
	session_start();
	if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {

		header("location: index.php");
	}

?>

<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
			<title>Bienvenido | IESP NSC</title>
			<link rel="stylesheet" href="../css/estilos.css">
			<link rel="icon" href="../img/logoicono.ico">

			<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1-0">
	</head>
		<body>

		<div class="ctn-bienvenida">
		<img src="../img/logo.png" alt="" class="logo-bienvenida">
		<h1 class="titulo-bienvenida">Bienvenido a <b>IESP NUESTRA SEÑORA DEL CARMEN</b></h1>
		<a href="/nsc_login/controladores/cerrar_sesion.php" class="cerrar-sesion">Cerra Sesión</a> 

	</div>

</body>
</html>