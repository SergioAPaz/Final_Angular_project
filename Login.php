<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sergio's</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="assets/css/Login.css" rel="stylesheet">
</head>

<body style="background-color:#E0E0E0">

    <div>
        <?php 
        require('./components/index/header_footer.php');
    ?>
    </div>

    <!-------------------------------------------------------------------->
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4">

                <div class="account-wall">
                    <img class="profile-img" src="http://xacatolicos.com/app/images/avatar/icon-user.png" alt="">
                    <form class="form-signin" form method="POST" action="./models/clsLogin.php">
                        <input type="text" class="form-control" name="txtUsuario" placeholder="Usuario" required autofocus>
                        <br>
                        <input type="password" class="form-control" name="txtContrasena" placeholder="Contraseña" required>
                        <br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                        <br>
                    </form>
                </div>
                <a href="#" data-toggle="modal" data-target="#myModal" class="text-center new-account"> <b>Crea tu propia cuenta</b></a>
            </div>
        </div>
    </div>






    <!-- FORMULARIO DE REGISTRO -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#337AB7">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" style="color:#fafafa" id="myModalLabel">Vamos registrate!</h4>
                </div>
                <div class="modal-body">
                    <form class="form-horizontal" enctype="multipart/form-data" method="post" action="./models/clsNewUser.php">
                        <fieldset>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Nombre:</label>
                                <div class="col-md-8">
                                    <input id="txtNombre" name="txtNombre" type="text" placeholder="Ingresa tu nombre" class="form-control input-md" required="">
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Apellido:</label>
                                <div class="col-md-8">
                                    <input id="txtApellido" name="txtApellido" type="text" placeholder="Ingresa tu apellido" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="area">Email:</label>
                                <div class="col-md-8">
                                    <input id="txtArea" name="txtEmail" type="text" placeholder="Ingresa tu Email" class="form-control input-md" required="">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label">Usuario:</label>
                                <div class="col-md-8">
                                    <input id="txtUser" name="txtUser" type="text" placeholder="Elige un usuario" class="form-control input-md" required="">

                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="street">Contraseña:</label>
                                <div class="col-md-8">
                                    <input id="txtPassword" name="txtPassword" type="password" placeholder="Elige una contraseña" class="form-control input-md" required="">

                                </div>
                            </div>


                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="street"> <p>Nos gustaria tener una imagen tuya: </p> </label>
                                <br />
                                <div class="col-sm-8">
                                    <input type="file" class="form-control input-md" name="txtFile"  id="txtFile" />
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                <button id="signup" name="signup" type="submit" class="btn btn-success">Listo!</button>
                            </div>
                        </fieldset>

                    </form>

                </div>
            </div>
        </div>
    </div>


</body>

</html>