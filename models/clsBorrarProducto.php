<?php
include ("./clsSecurity.php");
if(isset($_GET['id']))
{
$id=$_GET['id'];
include('conexion.php');
/*CONSULTA DE NOMBRE DE ARCHIVO DE IMAGEN*/
$ConsultaImagen=<<<SQL
SELECT UrlFile FROM productos WHERE id='$id'
SQL;
$QueryImagen =mysqli_query($conexiondb,$ConsultaImagen);
$Asosiacion=mysqli_fetch_assoc($QueryImagen);
/*BORRAR REGISTRO DE LA BASE DE DATOS*/
$consulta=<<<SQL
DELETE  FROM productos WHERE id='$id'
SQL;
mysqli_query($conexiondb,$consulta);

// --------------------------------------GENERACION DE JSON EN BASE A DB *
            $sqlCommand = "SELECT * FROM productos";
            $query = mysqli_query($conexiondb, $sqlCommand) or die(mysqli_error("Fallo en la consulta a la base de datos."));
            $rows=array();
            while($row=mysqli_fetch_array($query))
            {
                $rows[]=$row;
            } 
            $file = fopen("./../productos.json","w");
            fwrite($file,json_encode($rows));
            fclose($file);
            // --------------------------------------

/*BORRADO FISICO DE IMAGEN EN DISCO*/
if(file_exists('../images/catalogo/sql/productos/'.$Asosiacion['UrlFile'])){
unlink('../images/catalogo/sql/productos/'.$Asosiacion['UrlFile']);
echo "<script>alert('Producto eliminado con exito!');window.location.href='../ControlPanel.php';</script>";
}else{
    echo 'Error al borrar imagen fisica de fichero de imagenes';
}
}else{
    echo "Fail no viene por GET.";
}

?>