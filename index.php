<!DOCTYPE html>
<html lang="en" ng-app="myApp">

<head>
    <title>Sergio's</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

   <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.7/angular.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
    <link href="./assets/css/index.css" rel="stylesheet">
    <script src="./assets/js/index.js"></script>
</head>

<body ng-controller="mainctrl">
    <!--NAVBAR Y FOOTER-->
    <div>
        <?php 
        require('./components/index/header_footer.php');
    ?>
    </div>

    <!-------------------------------------------------------------------->
    <!--HEADER DE MARCA-->
    <div class="paddings container-fluid hidden-xs">
        <div class="centrar" style="height:100px;">
            <b style="font-family: 'Lobster', cursive;">Sergio's</b>
        </div>
    </div>
    <!-------------------------------------------------------------------->
    <!--CARRUSEL-->
    <div class="container-fluid" style="background-color:#222">
        <div class="container" style="background-color:#222;padding-right:0;padding-left:0">


            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>


                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="./images/007.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3 class="hidden-xs">Los mejores estilos para Ella</h3>
                            <p>Que la distancia no sea un problema</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/FY16_INNO_SNOWCAP_v2_HERO_RT_NoEarl_V1_hd_1600.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3 class="hidden-xs">El mejor estilo para el</h3>
                            <p>Los mejores regalos para todos los tipos de atleta.</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="./images/zapat.jpg" alt="...">
                        <div class="carousel-caption">
                            <h3 class="hidden-xs">Este es el:</h3>
                            <p>3</p>
                        </div>
                    </div>
                </div>


                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>


        </div>
    </div>
    <!-------------------------------------------------------------------->
    <br>
    <hr class="style17">
    <br>
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-3">
            <img src="images/Captura.PNG" alt="..." class="img-rounded img-responsive">
        </div>
        <div class="col-xs-12 col-sm-3">
            <img src="images/Captlura.PNG" alt="..." class="img-rounded img-responsive">
        </div>
        <div class="col-xs-12 col-sm-3 hidden-xs">
            <img src="images/Capturdsfa.PNG" alt="..." class="img-rounded img-responsive">
        </div>
        <div class="col-xs-12 col-sm-3 hidden-xs">
            <img src="images/Cap5486tura.PNG" alt="..." class="img-rounded img-responsive">
        </div>
    </div>





    <!---------------------------------------------------------------------->
    <div>
        <!--require('./components/index/cards.php');-->
    </div>
    <!-------------------------------------------------------------------->


    <!-------------------------------------------------------------------->
    <div>
        <hr class="style17">
        <br>
        <?php 
        require('./components/index/previews.php');
    ?>
    </div>
    <!-------------------------------------------------------------------->
    <div class="container">
        <div class="alert alert-info" role="alert">
            <span class="glyphicon glyphicon-hand-right" aria-hidden="true"></span>
            <a href="#" class="alert-link" style="margin-left:3px"> <b> Conoce mas de nuestros productos en las distintas secciones.</b> </a>
        </div>
    </div>
    <!-------------------------------------------------------------------->
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