
<?php
include("./conexion.php");
$consulta=<<<SQL
DELETE  FROM ventas
SQL;
mysqli_query($conexiondb,$consulta);

session_start();
session_destroy();

header("location: ../index.php");
?>