<?php

/*Validamos que esten todos los campos requeridos del formulario*/
 if ($_SERVER["REQUEST_METHOD"] == "POST")  
{
    if ((empty($_POST["txtUsuario"])) || (empty($_POST["txtContrasena"]))) 
    {
       

        echo "<!DOCTYPE html>";
        echo "<html>";
        echo "<body style='background-color: #212121;color: #FAFAFA'>";
        echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
        echo "</body>";
        echo "</html>";
    } else 
    {
        session_start();
        include("conexion.php");

        $usr = $_POST['txtUsuario'];
        $psw = $_POST['txtContrasena'];
        /*Validacion con expresiones reulares*/
        if ((preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $usr)) && (preg_match("/^[a-zA-Z0-9._ñÑ ]*$/", $psw))) 
        {
            $con = mysqli_connect($host, $user, $pw) or die ("Problemas con el servidor de la base de datos.");
            mysqli_select_db($con, $db);
            $sqlCommand = "SELECT Usuario,Password,Rol FROM users WHERE Usuario='$usr' ";
            $query = mysqli_query($con, $sqlCommand) or die(mysqli_error("Fallo en la consulta a la base de datos."));
            $sesion = mysqli_fetch_array($query);
            if ($psw == $sesion['Password']) 
            {
                /*VARIABLE GLOBAL $_SESSION[]*/
                $_SESSION['username'] = $_POST['txtUsuario'];
                $_SESSION["username"] = "SI";
                $_SESSION['RolCuenta'] = $sesion['Rol'];
                $_SESSION['usuario'] = $_POST['txtUsuario'];
                echo "<script language='javascript'>alert('Iniciando sesion si!')</script>";
                header("location:./../index.php");
            }else 
            {
                echo "<!DOCTYPE html>";
                echo "<html>";
                echo "<body style='background-color: #212121;color: #FAFAFA'>";
                echo "<b style='color: #F44336'>ERROR: </b>El usuario o contraseña son incorrectos.";
                echo "</body>";
                echo "</html>";
            }
        } else 
        {
            echo "<!DOCTYPE html>";
            echo "<html>";
            echo "<body style='background-color: #212121;color: #FAFAFA'>";
            echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros, '_' y '.' ";
            echo "</body>";
            echo "</html>";
        }
    }
}else {
    header("location:./../Login.php");
}


?>