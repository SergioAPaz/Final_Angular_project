<?php
include ("./clsSecurity4.php");

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    include('conexion.php');
    /*CONSULTA DE NOMBRE DE ARCHIVO DE IMAGEN*/
$ConsultaImagen=<<<SQL
INSERT INTO ventas (Nombre,Descripcion,Costo,UrlFile) SELECT Nombre, Descripcion,Costo,UrlFile FROM productos WHERE id=$id
SQL;
    $filas=mysqli_query($conexiondb,$ConsultaImagen);

    // --------------------------------------GENERACION DE JSON EN BASE A DB *            
echo "<script>alert('Producto agregado al carrito con exito!');window.location.href='./../MiCarrito.php';</script>";
    // --------------------------------------
}else{
    echo "Fail no viene por GET.";
}

?>