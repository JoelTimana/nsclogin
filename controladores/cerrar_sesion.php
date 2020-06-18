<?php
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
    session_start();

    $_SESSION = array();

    session_destroy();

    header("location: ../index.php");

    exit;
    




?>