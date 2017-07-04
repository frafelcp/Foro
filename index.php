<?php
   require 'database.php';    
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>SENASoft Cauca 2013 | Fórum de debate</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--Modificar estilos logo navbar-->
    <link href="css/style.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
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
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active"><a href="index.php">Inicio</a></li>
              <li><a href="#">Ingresar</a></li>
              <li><a href="register.php">Registrarse</a></li>                       
            </ul>
            <form class="navbar-form navbar-right">
                <div class="form-group">
                <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                </button>
            </form>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>
    </div> <!-- /container -->
    <header>
        <div class="container">
            <div class="page-header">
                <h3>SENASoft Cauca 2013
                    <br>
                    <small>Popayan</small>
                    <a href="#" class="btn btn-default pull-right" role="button">Crear Tema</a>
                </h3>
            </div>
        </div>
    </header>
    <section>
        <div class="container">
            <div id="" class="container-fluid">
                <div id="row" class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="lista-temas" class="panel panel-default">
                            <div class="panel-body pull-right">
                                <dl>
                                    <dt>5</dt>
                                    <dd>Respuestas</dd>
                                </dl>
                                <dl>
                                    <dt>658</dt>
                                    <dd>Visualizaciones</dd>
                                </dl>
                                <dl>
                                    <dt>03/05</dt>
                                    <dd>hora 15:51</dd>
                                </dl>
                            </div>
                            <h4><a href="#" title="">Nombre del tema<span>/ Usuario</span></a></h4>
                            <h5><a href="#" title="">Descripción del tema</a></h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div id="lista-temas" class="panel panel-default"> 
                            <div class="panel-body pull-right">
                                <dl>
                                    <dt>5</dt>
                                    <dd>Respuestas</dd>
                                </dl>
                                <dl>
                                    <dt>658</dt>
                                    <dd>Visualizaciones</dd>
                                </dl>
                                <dl>
                                    <dt>03/05</dt>
                                    <dd>hora 15:51</dd>
                                </dl>
                            </div>
                            <h4><a href="#" title="">Nombre del tema<span>/ Usuario</span></a></h4>
                            <h5><a href="#" title="">Descripción del tema</a></h5>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <section>
        <div class="container">
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="disabled">
                        <span>
                            <span aria-hidden="true">&laquo;</span>
                        </span>
                    </li>
                    <li class="active">
                        <span>1 <span class="sr-only">(current)</span></span>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li>
                        <a href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">SENASoft Cauca 2013</p>
        </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>