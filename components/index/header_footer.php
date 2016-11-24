<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>



    <script src="assets/js/header_footer.js"></script>
    
   
    <div style="padding-top: 50px;">

        <style scoped>
            @import "assets/css/header_footer.css";
        </style>

        <div>
            
        </div>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>


                    <a class="navbar-brand" href="#"><img src="./images/8.jpg" class="img-responsive" style="max-width:96px" alt="noh"></a>


                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Inicio<span class="sr-only">(current)</span></a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Damas <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./TenisMujeres.php">Tenis para correr</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Caballeros <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="./TenisVarones.php">Tenis para entrenamiento</a></li>
                            </ul>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php
                    if (isset($_SESSION["username"]))
                    {
                        if ($_SESSION["username"] == "SI")
                        {
                            echo "<li class='dropdown'>";
                                echo "<a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false' style='margin-right:50px'>$_SESSION[usuario]<span class='caret'></span></a>";
                                echo "<ul class='dropdown-menu'>";
                                if ($_SESSION["RolCuenta"] == "Administrador")
                                {
                                    echo "<li><a href='./ControlPanel.php'>Panel de control</a></li>";
                                }else{
                                    echo "<li><a href='./MiCarrito.php'>Mis compras</a></li>";
                                }
                                    echo "<li><a href='models/clsDestroySession.php'>Cerrar sesion</a></li>";
                                echo "</ul>";
                            echo "</li>";
                        }else{

                        }
                    }else
                    {
                        echo "<li><a href='Login.php'>Iniciar Sesion</a></li>";
                    }
                ?>
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>

        <!--BOTON IR ARRIBA-->
        <span class="ir-arriba fa fa-arrow-up"></span>



    </div>