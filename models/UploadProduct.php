<?php

include ("./clsSecurity.php");
/*Validamos que esten todos los campos requeridos del formulario*/
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if ( (empty($_POST["txtNombre"])) || (empty($_POST["txtDesc"])) || (empty($_POST["txtCosto"])) )
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
        $txtDesc = $_POST['txtDesc'];
        $txtCosto = $_POST['txtCosto'];
        $txtGaleria = $_POST['txtGaleria'];
        if ($_FILES['txtFileProducto']['size'] == 0)
        {
        $txtFileProducto = 'Vacio';
        }else
        {
        $txtFileProducto=time() .'.jpg';
        }
        /*Validacion con expresiones reulares*/
        if ( (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtNombre)) && (preg_match("/^[a-zA-Z0-9,._ñÑ ]*$/", $txtDesc)) && (preg_match("/^[0-9. ]*$/", $txtCosto)) &&
             (preg_match("/^[a-zA-Z0-9,._:ñÑ ]*$/", $txtGaleria)) )
        {
            $insert = <<<SQL
INSERT INTO productos SET Galeria='$txtGaleria',Nombre='$txtNombre',Descripcion='$txtDesc',	Costo='$txtCosto',UrlFile='$txtFileProducto'
SQL;
            mysqli_query($conexiondb,$insert) or die ("Error al guardar nuevo producto.");
            //mysqli_query($conexiondb,$insert) or die (mysqli_error($conexiondb));

            /*IMAGENES*/
            $original=$_FILES['txtFileProducto']['tmp_name'];
            $destino="./../images/catalogo/sql/productos/$txtFileProducto";
            move_uploaded_file($original,$destino);

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
            
            echo "<script>alert('Producto cargado con exito!');window.location.href='../ControlPanel.php';</script>";
            
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