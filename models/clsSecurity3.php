<?php
session_start();
//COMPRUEBA QUE EL USUARIO ESTA AUTENTICADO Y ES UN USUARIO ADMINISTRADOR
if ($_SESSION["username"] != "SI")
{
    header("Location: Login.php");
    session_destroy();
    exit();
}
?>