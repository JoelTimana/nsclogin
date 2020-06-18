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
        exit;
    }

    require_once "../modelo/conexion_bd.php";

    $email = $password = "";
    $email_error = $password_error = "";

    //validar espacios en blanco
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (empty(trim($_POST["email"]))) {
            $email_error="Por favor, ingrese el email";
            
        }else {
            $email = trim($_POST["email"]);
        }

        if (empty(trim($_POST["password"]))) {
            $password_error="Por favor, ingrese una constraseña";
            
        }else {
            $password = trim($_POST["password"]);
        }


        //validad inputs

        if (empty($email_error) && empty($password_error) )  {
            $sql = "SELECT id, nombre, apellidos, carrera, ciclo, email, password FROM usuarios WHERE email=?";
            if ($stmt = mysqli_prepare($conexionbd, $sql)) {
                mysqli_stmt_bind_param($stmt, "s", $param_email);
                $param_email=$email;

                if (mysqli_stmt_execute($stmt)) {
                    mysqli_stmt_store_result($stmt);
                }

                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $nombre, $apellidos, $carrera, $ciclo, $$email, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                            //guardar la sesion y validad valores 
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] == $id;
                            $_SESSION["email"] == $email;

                            header("location: ../vista/bienvenida.php");

                            
                        }else {
                            $password_error="La contraseña no es valida";
                        }
                     }
                            }else {
                                 $email_error="No se ah encontrado ninguna cuenta con ese email";
                             }
                                 }else {
                                        echo "Algo salio mal , intentelo de nuevo";
                                    }
                
        }

        mysqli_close($conexionbd);


    }
     

?>