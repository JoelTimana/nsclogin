<?php 
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
	define('DB_SERVER', 'bmksmq0n6bncebmdi7kv-mysql.services.clever-cloud.com');
	define('DB_USUARIO', 'up9g7pnb94lexjjh');
	define('DB_PASSWORD', 'kjDZXSGwg2AvS6H99IEU');
    define('DB_NOMBRE', 'bmksmq0n6bncebmdi7kv');

    $conexionbd = mysqli_connect(DB_SERVER,DB_USUARIO,DB_PASSWORD,DB_NOMBRE);
 		
 		if ($conexionbd === false) {
 			die("ERROR EN LA CONEXION " . mysqli_connect_error());
 		
 		}


 ?>
