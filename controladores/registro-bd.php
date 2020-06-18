<?php 
/**
 * CODIGO DE FUENTE NSC LOGIN
 *
 * @package	nsc_login
 * @author	Joel Changano Timana
  -----------------------------------------------------------------------------------------------------------------
 */

	require_once "../modelo/conexion_bd.php";

	$nombre = $apellido = $carrera = $ciclo = $email = $password = "";
	$nombre_error= $apellido_error= $carrera_error= $ciclo_error= $email_error = $password_error = "";

	//validad caracteres de los inputs

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(empty(trim($_POST["nombre"])))  {
			$nombre_error = "Por favor, ingrese un nombre" ;

		}else{

			$sql = "SELECT id FROM usuarios WHERE nombre=?";
				if ($stmt = mysqli_prepare($conexionbd, $sql)) {
					mysqli_stmt_bind_param($stmt,"s", $param_nombre);

					$param_nombre = trim($_POST["nombre"]);
					$nombre=trim($_POST["nombre"]);
					
				}else{
						echo "Algo salió mal, intentalo de nuevo";
					}
		}
		

		if (empty(trim($_POST["apellido"])))  {
			$apellido_error = "Por favor, ingrese un apellido";

		}else{

			$sql = "SELECT id FROM usuarios WHERE apellidos=?";
				if ($stmt = mysqli_prepare($conexionbd,$sql)) {
					mysqli_stmt_bind_param($stmt,"s",$param_apellido);

					$param_apellido = trim($_POST["apellido"]);
					$apellido=trim($_POST["apellido"]);
					}else{
						echo "Algo salió mal, intentalo de nuevo";
				}
		}


		if (empty(trim($_POST["carrera"])))  {
			$carrera_error = "Por favor, ingrese una carrera";

		}else{

			$sql = "SELECT id FROM usuarios WHERE carrera=?";
				if ($stmt = mysqli_prepare($conexionbd,$sql)) {
					mysqli_stmt_bind_param($stmt,"s",$param_carrera);

					$param_carrera = trim($_POST["carrera"]);
					$carrera=trim($_POST["carrera"]);
					
					}else{
						echo "Algo salió mal, intentalo de nuevo";
				}
		}

		if (empty(trim($_POST["ciclo"])))  {
			$ciclo_error = "Por favor, ingrese un ciclo";

		}else{

			$sql = "SELECT id FROM usuarios WHERE ciclo=?";
				if ($stmt = mysqli_prepare($conexionbd,$sql)) {
					mysqli_stmt_bind_param($stmt,"s",$param_ciclo);

					$param_ciclo = trim($_POST["ciclo"]);

					$ciclo=trim($_POST["ciclo"]);
						
					}else{
						echo "Algo salió mal, intentalo de nuevo";
				}
		}

		if (empty(trim($_POST["email"])))  {
			$email_error = "Por favor, ingrese un Email";

		}else{

			$sql = "SELECT id FROM usuarios WHERE email=?";
				if ($stmt = mysqli_prepare($conexionbd,$sql)) {
					mysqli_stmt_bind_param($stmt,"s",$param_email);

					$param_email = trim($_POST["email"]);

					if (mysqli_stmt_execute($stmt)) {

						mysqli_stmt_store_result($stmt);

							if (mysqli_stmt_num_rows($stmt) == 1) {

								$email_error="Este email ya esta en uso";
							}else{
								$email=trim($_POST["email"]);
							}
					}else{
						echo "Algo salió mal, intentalo de nuevo";
					}
				}
		}

		//validando password 
		if (empty(trim($_POST["password"])))  {
			$password_error = "Por favor, ingrese una contraseña";

		}elseif (strlen(trim($_POST["password"])) < 4 ) {
			$password_error = "La contraseña debe tener al menos 4 caracteres";			

		}else{
			$password = trim($_POST["password"]);
		}

			//validando los errores de entrada

		if (empty($nombre_error) && empty($apellido_error) && empty($carrera_error) && empty($ciclo_error) && empty($email_error) && empty($password_error)) {

			$sql = "INSERT INTO usuarios (nombre, apellidos, carrera, ciclo, email, password) VALUES (?, ?, ?, ?, ?, ?)";
			if ($stmt = mysqli_prepare($conexionbd, $sql)) {

				mysqli_stmt_bind_param($stmt, "ssssss", $param_nombre, $param_apellido, $param_carrera, $param_ciclo, $param_email, $param_password);

					$param_nombre = $nombre;
					$param_apellido = $apellido;
					$param_carrera = $carrera;
					$param_ciclo = $ciclo;
					$param_email = $email;
					$param_password=  password_hash($password, PASSWORD_DEFAULT);

					if (mysqli_stmt_execute($stmt)) {
						header("location: ../index.php");

					}else{
						echo "Algo salio mal, intentalo de nuevo";
					}
			}

		}

		mysqli_close($conexionbd);

	}


 ?>