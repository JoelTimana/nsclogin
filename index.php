<?php 
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
	session_start();

     if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true ) {
		header("location: vista/bienvenida.php");
	}else{
        header("location: vista/login.php");
    }


?>

