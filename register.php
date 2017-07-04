<?php
    require 'database.php';
    if(!empty($_POST['txtnombre']) && !empty($_POST['txtnick']) && !empty($_POST['txtemail'])):
        $stmt=$conn->prepare("INSERT INTO usuarios (nombre, nick, email) VALUES (:nombre, :nick, :email)");
        $stmt->bindParam(':nombre', $_POST['txtnombre']);
        $stmt->bindParam(':nick', $_POST['txtnick']);
        $stmt->bindParam(':email', $_POST['txtemail']);
//        $stmt->bindParam(':foto', $_POST['img']);        
//        $stmt->bindParam(':contrasena', $_POST['txtpass']);
        if( $stmt->execute() ):
            echo'Nuevo usuario creado correctamente';
        else:
            try {
                echo'Lo siento, debe haber habido un problema al crear su cuenta.';
            } catch (PDOException $exc) {
                echo "Este usuario ya fue creado<br>".$exc->getMessage();
                exit;
            }
        endif;
    endif;
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>SENASoft Cauca 2013 | Fórum de debate</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Modificar estilos logo navbar-->
        <link href="css/style.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="css/navbar.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <!-- Static navbar -->
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index.php">
                            <img id="logo" src="img/logo.png" alt="logo" class="" width="42" height="42">
                        </a>
                    </div><!--.navbar-header-->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="index.php">Inicio</a></li>
                            <li><a href="#">Ingresar</a></li>
                            <li><a href="register.php">Registrarse</a></li>
                        </ul>
                        <form class="navbar-form navbar-right">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search">
                            </div><!--form-group-->
                            <button type="submit" class="btn btn-default">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                            </button>
                        </form>
                    </div><!--/.nav-collapse -->
                </div><!-- container-fluid -->
            </nav>
        </div><!--container-->
        <header>
            <div class="container">
                <div class="page-header">
                    <a href="index.php" class="btn btn-default" role="button">Visualizar Temas</a>
                </div><!--page-header-->
            </div><!--container-->
        </header>
        <section>
            <div class="container">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Registrarse</h4>
                        <h5><em>¿Aún no tienes una cuenta? hacer tu registro ahora, fácil y rápido!</em></h5>
                    </div><!--panel-heading-->
                    <div class="panel-body">
                        <form class="form signin" action="register.php" method="POST">
                            <div class="form-group">
                                <label for="exampleInputName2">Nombre</label>
                                <input type="text" name="txtnombre" class="form-control" id="exampleInputName2" placeholder="Nombre">
                            </div><!--form-group-->
                            <div class="form-group">
                                <label for="exampleInputName3">Nickname</label>
                                <input type="text" name="txtnick" class="form-control" id="exampleInputName3" placeholder="Nickname">
                            </div><!--form-group--><!--
-->                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email" name="txtemail" class="form-control" id="exampleInputEmail1" placeholder="Email">
                            </div><!--form-group--><!--
                              <div class="form-group">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input type="password" name="txtpass" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
                            </div>form-group
                            <div class="form-group">
                                <label for="exampleInput">Sexo</label>
                            </div>form-group
                            <div id="radiobuttons">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                        M
                                    </label>
                                </div>radio
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                        F
                                    </label>
                                </div>radio
                            </div>radiobuttons
                            <div class="form-group">
                                <label for="exampleInputFile">Avatar</label>
                                <input type="file" name="img" id="exampleInputFile">
                                <p class="help-block">Selecciona una imagen de perfil</p>
                            </div>form-group
                            <div class="form-group">
                                <label for="exampleInput">Captcha</label>
                                <br>
                                <span>Codigo de seguridad</span>
                                <br>
                                <img src="img/captcha.jpg" alt="cadigo de confirmacion">
                                <br>
                                <span>Ingresar Codigo seguridad</span>
                                <input type="text" name="codsegu" class="form-control" placeholder="xxxx">
                            </div>form-group-->
                            <button type="submit" class="btn btn-default">Submit</button>
                            <button type="reset" class="btn btn-default">Cancelar</button>
                        </form><!--formulario registrar-->
                    </div><!--panel-body-->
                </div><!--panel-default-->
            </div><!--container-->
        </section>
        <footer class="footer">
            <div class="container">
                <p class="text-muted">SENASoft Cauca 2013</p>
            </div><!--container-->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>