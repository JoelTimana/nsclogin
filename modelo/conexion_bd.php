<?php 
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
	define('DB_SERVER', 'localhost');
	define('DB_USUARIO', 'root');
	define('DB_PASSWORD', '');
    define('DB_NOMBRE', 'nsc_login');

    $conexionbd = mysqli_connect(DB_SERVER,DB_USUARIO,DB_PASSWORD,DB_NOMBRE);
 		
 		if ($conexionbd === false) {
 			die("ERROR EN LA CONEXION " . mysqli_connect_error());
 		
 		}


 ?>