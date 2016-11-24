
<?php
include("./models/clsSecurity2.php");
include("./models/conexion.php");

$consulta=<<<SQL
    SELECT id,Galeria,Nombre,Descripcion,Costo,UrlFile FROM productos
SQL;
$filas =mysqli_query($conexiondb,$consulta);
?>

<!DOCTYPE html>
    <html lang="en">

    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="assets/js/datatablejquery/dataTables.bootstrap.min.css">
        <script src="assets/js/datatablejquery/jquery.dataTables.min.js"></script>
        <script src="assets/js/datatablejquery/dataTables.bootstrap.min.js"></script>
        <script src="assets/js/ControlPanel.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">

        <link href="./assets/css/ControlPanel.css" rel="stylesheet">
    </head>

    <body style="background-color:#222222">
        <!--NAVBAR Y FOOTER-->
        <div>
            <?php require('./components/index/header_footer.php');?>
        </div>
        <!-------------------------------------------------------------------->
        <div class="container">
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action="./models/UploadProduct.php" style="background-color:#fafafa;padding:15px;border-radius:5px;margin-top:15px">
                <fieldset>

                    <legend>Agregar nuevo producto</legend>

                    <!-- Select Basic -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="selectbasic">Galeria:</label>
                        <div class="col-md-5">
                            <select id="selectbasic" name="txtGaleria" class="form-control" required>
                            <option value="1">Damas: Tenis para correr</option>
                            <option value="2">Caballeros: Tenis para entrenamiento</option>
                        </select>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Nombre: </label>
                        <div class="col-md-5">
                            <input id="textinput" name="txtNombre" type="text" placeholder="placeholder" class="form-control input-md" maxlength="20" required>
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="textinput">Descripcion: </label>
                        <div class="col-md-5">
                            <input id="textinput" name="txtDesc" type="text" placeholder="placeholder" class="form-control input-md" maxlength="20" required>
                        </div>
                    </div>

                    <!-- Prepended text-->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="prependedtext">Costo: </label>
                        <div class="col-md-5">
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                <input id="prependedtext" name="txtCosto" class="form-control" placeholder="placeholder" type="text" maxlength="7" required>
                            </div>
                        </div>
                    </div>

                    <!-- File Button -->
                    <div class="form-group">
                        <label class="col-md-4 control-label" for="filebutton">Fotografia: </label>
                        <div class="col-md-5">
                            <input id="filebutton" name="txtFileProducto" class="input-file" type="file" required>
                        </div>
                    </div>
                    <hr style="max-width:60%">
                    <!-- Button -->
                    <div class="form-group">

                        <div class="col-md-9">
                            <button id="singlebutton" name="singlebutton" class="btn btn-primary pull-right">Agregar</button>
                        </div>

                </fieldset>
            </form>

            </div>

            <!--TABLA DE PRODUCTOS----------------------------------------------------->

            <!--TABLA DE EXISTENCIAS-->
            <div class="container">
                <div class="panel panel-default" style="background-color:#fafafa;padding:15px;border-radius:5px;margin-top:15px">
                    <div class="panel-body">
                        <p class="alert fondo456" style="font-size: 20px;background-color: #337AB7;color: #ffffff"><span>Productos en exhibición</span></p>
                        <div class="table-responsive" style="border-radius: 10px;margin-top: 12px">
                            <table class="table  table-bordered table-hover table-condensed tab" id="regTable" style="background-color: #ffffff;text-align: center;vertical-align: middle;">
                                <thead>
                                    <tr style="background-color: #F5F5F5">
                                        <!--<th style="font-size: 14px;color: #F57C00">Publicacion</th>-->
                                        <th style="font-size: 14px;color: #F57C00">Publicacion</th>
                                        <th style="font-size: 14px;color: #F57C00">Galeria</th>
                                        <th style="font-size: 14px;color: #F57C00">Nombre</th>
                                        <th style="font-size: 14px;color: #F57C00">Descripcion</th>
                                        <th style="font-size: 14px;color: #F57C00">Costo</th>
                                        <th style="font-size: 14px;color: #F57C00">Acciones</th>
                                    </tr>
                                </thead>

                                <tbody>

                                    <?php
                                        $count=0;
                                        while ($columna=mysqli_fetch_assoc($filas))
                                        {
                                            $count=$count+1;
                                            echo "<tr>";
                                            echo "<td>$count</td>";
                                            if($columna['Galeria']==2)
                                            {
                                                echo "<td>Tenis hombres</td>";
                                            }else{
                                                echo "<td>Tenis mujeres</td>";
                                            }
                                            echo "<td>$columna[Nombre]</td>";
                                            echo "<td>$columna[Descripcion]</td>";
                                            echo "<td>$columna[Costo]</td>";
                                            echo "<td><a href='./models/clsBorrarProducto.php?id=$columna[id]'>Borrar</a></td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                 
                                </tbody>
                            </table>


                        </div>
                    </div>
                </div>
            </div>

<!--------------------------------------------------------------------------------->

            <br>
            <br>
            <footer>
                <div class="container-fluid">
                    <div class="row" style="background-color:#D8D5CE;height: 200px">
                        <div>
                            <p style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© <b>Sergio's Stores</b>
                                <span id="ocultarmq4" style="float: right"><span><a href="PanelLogin">Developed by</a>  </span><a href="mailto:alejandroax@live.com.mx">Sergio Paz.</a> </p>
                        </div>
                    </div>
                </div>
            </footer>











    </body>

    </html>