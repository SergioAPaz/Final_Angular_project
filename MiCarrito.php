<?php
include("./models/clsSecurity3.php");


include('./models/conexion.php');
$primera=<<<SQL
SELECT Nombre,Descripcion,Costo,UrlFile FROM ventas
SQL;
$filas=mysqli_query($conexiondb,$primera);


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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <link href="./assets/css/MiCarrito.css" rel="stylesheet">
        <script src=""></script>
    </head>

    <body>
        <!--NAVBAR Y FOOTER-->
        <div>
            <?php require('./components/index/header_footer.php'); ?>
        </div>
        <!-------------------------------------------------------------------->
        <!--HEADER DE MARCA-->
        <div class="paddings container-fluid hidden-xs">
            <div class="centrar" style="height:100px;">
                <b style="font-family: 'Lobster', cursive;">Sergio's</b>
            </div>
        </div>
        <!-------------------------------------------------------------------->
        <div class="container" style="margin-top:25px;">
            <div style=" background-color:#222;border-radius:5px ">

                <form class="form-horizontal " style="background-color:#fafafa;padding:15px;border-radius:5px;margin-top:15px ">
                    <fieldset>

                        <legend><i class="fa fa-shopping-cart " style="margin-right:10px " aria-hidden="true "></i>Mi carrito de compras</legend>


                        

                       
                        <!-- Button -->
                        <div class="col-xs-12 " style="text-align:center;margin-bottom:10px; ">
                            <h4>Lista de compras</h4>
                        </div>
                        
                        <div>
                            
                            <?php
                            $subtotal = 0;
                            while($columna=mysqli_fetch_assoc($filas)){
                                echo "<div class='col-xs-12 col-md-3'>";
                                echo "<div class='thumbnail'>";
                                echo "<img src='images/catalogo/sql/productos/$columna[UrlFile]' alt='.d..'>";
                                echo "<div class='caption'>";
                                echo "<h4>$columna[Nombre]</h4>";
                                echo "<p>$columna[Descripcion]</p>";
                                echo "<p>$$columna[Costo]</p>";    
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                             
                                $subtotal=$subtotal + "$columna[Costo]";
                            }
                            ?>

                        </div>
 <hr style="max-width:60% ">
                        <div class="col-xs-12 " style="text-align:center; ">
                            <b style="color:#222; ">SubTotal: <?php echo $subtotal ?>, IVA: <?php echo ($subtotal*.16) ?>, Total: <?php echo ($subtotal*1.16) ?></b>
                        </div>
            
                       

                    </fieldset>
                </form>
            </div>
        </div>


    </body>

    </html>