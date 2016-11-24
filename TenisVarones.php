<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="./assets/css/TenisVarones.css" rel="stylesheet">
</head>

<body ng-controller="mainctrl">
    <!--NAVBAR Y FOOTER-->
    <div>
        <?php require('./components/index/header_footer.php');?>
    </div>
    <!-------------------------------------------------------------------->
    <!--HEADER DE MARCA-->
    <div class="paddings container-fluid">
        <div class="centrar" style="height:100px;">
            <b style="font-family: 'Lobster', cursive;">Sergio's</b>
        </div>
    </div>
    <!-------------------------------------------------------------------->
    <div class="container-fluid">
        <div class="row">

            <div class="col-xs-12 col-sm-4 hidden-xs hidden-sm hidden-md">
                <div class="centrar2" style="height:642px;background-color:#222;margin:20px;border-radius: 5px;">
                    <span style="font-family: 'Montserrat', sans-serif;  color:#2196F3;">Moda y accesorios para ELLOS</span>
                </div>
            </div>

            <div class="col-xs-12 hidden-xs  hidden-lg">
                <div class="centrar3" style="height:100px;background-color:#222;margin:20px;">
                    <b style="font-family: 'Montserrat', sans-serif;  ">
                        <p>Moda y accesorios para <span style="color:#2196F3;">ELLOS</span></p>
                        
                    </b>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-lg-8" style="margin-top:20px;">
                <img src="./images/catalogo/hombra.jpg" class="img-responsive" style="border-radius:5px" alt="">
            </div>

        </div>
        <hr class="style17">
    </div>
    <!-------------------------------------------------------------------->
    <div class="container" style="margin-top:12px">
        <div class="alert alert-info" role="alert" style="background-color:#2196F3;color:#424242"> <b>Conoce la gran variedad que tenemos para lo que buscas.</b></div>
    </div>


    <div class="container">
        <div class="row">

             <div ng-repeat="arti in articulos" ng-show="arti.Galeria ==2">

                <div class="col-xs-12 col-md-3">
                    <div class="thumbnail">
                        <img src="images/catalogo/sql/productos/{{arti.UrlFile}}" class="img-responsive" alt="...">
                        <div class="caption">
                            
                            <h4>{{arti.Nombre}}</h4>
                            <p>{{arti.Descripcion}}</p>
                            <p>${{arti.Costo}}</p>
                            <p>
                                <a href="./models/clsBuy.php?id={{arti.id}}" class="btn btn-primary btn-sm" role="button">Comprar</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div>
           
        </div>
    </div>
    <!------------------------------------------------------------------------>
    <br>
    <br>
    <footer>
        <div class="container-fluid">
            <div class="row" style="background-color:#222;height: 200px">
                <div>
                    <p style="color:#212121;background-color: #FAFAFA;padding: 20px;font-size: 14px;margin: 0">© <b>Sergio's Stores</b>
                        <span id="ocultarmq4" style="float: right"><span><a href="PanelLogin">Developed by</a>  </span><a href="mailto:alejandroax@live.com.mx">Sergio Paz.</a> </p>
                </div>
            </div>
        </div>
    </footer>




    <script>
        var app = angular.module("myApp", []);
        app.controller("mainctrl", function($scope) {
            $scope.articulos = <?php include('productos.json');?>
        });
    </script>


</body>

</html>