<?php
  /**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */
 
 	 include "../controladores/login-bd.php";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login | IESP NSC</title>
	<link rel="stylesheet" href="../css/estilos.css">
	<link rel="icon" href="../img/logoicono.ico">
	<link rel="stylesheet" href="../icon/style.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1-0">

</head>
<body>
	<div class="container-all">
		<div class="ctn-form">
			
			<img src="../img/logo.png" alt="" class="logo_nsc">

			<h1 class="titulo">Iniciar Sesiòn</h1>

			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
			
				<div class="email line-input">
                <label class="lnr lnr-envelope"></label>
				    <input type="text" placeholder="Email" name="email">
				    <span class="msg-error"><?php echo $email_error; ?></span>
                </div>
                
                <div class="password line-input">
                <label class="lnr lnr-lock"></label>
				<input type="password" placeholder="Contraseña" name="password">
				<span class="msg-error"><?php echo $password_error; ?></span>
                </div>

				<?php if(!empty($error)): ?>
            		<div class="mensaje">
                <?php echo $error; ?>
            		</div>
			            <?php endif; ?>

				<input type="submit" value="Iniciar">

			</form>

			<span class="text-footer">¿Aùn no te haz registrado?
				<a href="registro.php">Registrate</a>
			</span>

		</div>

		<div class="ctn-text">
			
			<h1 class="titulo-descripcion"><b>IESP Nuestra Señora del Carmen</b></h1>
			<p class="texto-descripcion">Somos el primer instituto licenciado en el norte del pais MINEDU RM Nº325-2018</p>

		</div>

    </div>
    
    <script src="../js/jquery.js"></script>
    <script src="../js/script.js"></script>
    
</body>
</html>