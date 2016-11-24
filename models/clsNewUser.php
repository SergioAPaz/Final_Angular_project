<?php


/*Validamos que esten todos los campos requeridos del formulario*/
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ( (empty($_POST["txtNombre"])) || (empty($_POST["txtApellido"])) || (empty($_POST["txtEmail"])) || (empty($_POST["txtUser"])) 
        || (empty($_POST["txtPassword"])) )
    {
        {
            echo "<!DOCTYPE html>";
            echo  "<html>";
            echo  "<body style='background-color: #212121;color: #FAFAFA'>";
            echo "<b style='color: #F44336'>ERROR: </b>Favor de llenar todos los campos.";
            echo "</body>";
            echo "</html>";
        }
    }
    else
    {
        include("conexion.php");
        /*Valida que las variables de los campos se transformen en entidades HTML*/
        $txtNombre = $_POST['txtNombre'];
        $txtApellido = $_POST['txtApellido'];
        $txtEmail = $_POST['txtEmail'];
        $txtUsuario = $_POST['txtUser'];
        $txtPassword = $_POST['txtPassword'];
        
        if ($_FILES['txtFile']['size'] == 0)
        {
        $txtFile = 'Vacio';
        }else
        {
        $txtFile=time() .'.jpg';
        }
        $txtrol = 'Usuario';
        /*Validacion con expresiones reulares*/
        if ( (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtNombre)) && (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtApellido)) && (preg_match("/^[a-zA-Z0-9@,._ñÑ ]*$/", $txtEmail)) &&
             (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtUsuario)) && (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtPassword))  
             && (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtrol)) )
        {
            $insert = <<<SQL
INSERT INTO users SET Nombre='$txtNombre',Apellido='$txtApellido',Email='$txtEmail',Usuario='$txtUsuario',Password='$txtPassword',Rol='$txtrol',UrlImg='$txtFile'
SQL;
            mysqli_query($conexiondb,$insert) or die ("Error al registrar usuario o usuario ya existente.");
            //mysqli_query($conexiondb,$insert) or die (mysqli_error($conexiondb));

            /*IMAGENES*/
            $original=$_FILES['txtFile']['tmp_name'];
            $destino="./../images/catalogo/sql/$txtFile";
            move_uploaded_file($original,$destino);

            echo "<!DOCTYPE html>";
            echo "<html>";
            echo "<head>";
            echo "<title>Nueva cuenta!</title>";
            echo "<meta name='viewport' content='width=device-width, initial-scale=1'>";
            echo "<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>";
            echo "<script src='https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>";
            echo "<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>";
            echo "</head>";
            echo "<body style='background-color:#222;color: black'>";
            echo "<div class='container'>";
            echo "<div class='alert alert-info' role='alert' style='margin-top:15px'>";
            echo "<strong style='margin-right:5px'>Exito!</strong>Nuevo usuario registrado correctamente, ahora puedes iniciar sesion <a href='./../Login.php'>Aqui!</a>";
            echo "</div>";
            echo "</div>";
            echo "</body>";
            echo "</html>";
        }
        else
        {
            echo "<!DOCTYPE html>";
            echo  "<html>";
            echo  "<body style='background-color: #212121;color: #FAFAFA'>";
            echo "<b style='color: #F44336'>ERROR: </b>Los campos solo pueden contener letras, numeros y _ , .";
            echo "</body>";
            echo "</html>";
        }
    }
}
?>