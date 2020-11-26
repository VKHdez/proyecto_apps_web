<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Apuntes Home</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>

<body id="wrapper">

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                        <a class="navbar-brand" href="index.php">
                            <h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <?php
                            if ( isset($_SESSION['usuario'])){
                                switch ($_SESSION['tipo']){
                                    case 1:
                                        echo "<li><a href='apuntesAdministrador.php'>Apuntes</a></li>
                                              <li><a href='perfilAdministrador.php'>Perfil</a></li>
                                              <li><a href='salir.php'>Salir</a></li>";
                                        break;
                                    case 2:
                                        echo "<li><a href='apuntesProfesor.php'>Apuntes</a></li>
                                              <li><a href='perfilProfesor.php'>Perfil</a></li>";
                                        break;
                                    case 3:
                                        echo "<li><a href='apuntes.php'>Apuntes</a></li>
                                              <li><a href='perfilAlumno.php'>Perfil</a></li>";
                                        break;
                                }
                            }else{
                                echo "<li><a href='apuntes.php'>Apuntes</a></li>
                                              <li><a href='login.php'>Iniciar Sesion</a></li>
                                              <li><a href='registration.php'>Registrarse</a></li>
							                  <li><a href='about.php'>Acerca de</a></li>";
                            }
                            ?>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </nav>
    </header>
    <!--/.nav-ends -->

    <div id="myCarousel" class="carousel slide">

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/banner-slide-1.jpg');"></div>
                <div class="carousel-caption slide-up">
                    <h1 class="banner_heading">COMPARTE TUS <span>CONOCIMIENTOS </span>CON EL MUNDO</h1>
                    <p class="banner_txt">Desde cualquier parte del mundo</p>
                    <div class="slider_btn">
                        <button type="button" class="btn btn-default slide"><a href="registration.php">Registrate</a></button>
                        <button type="button" class="btn btn-primary slide"><a href="login.php">Inicia Sesión</a></button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-laptop feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Documentos Multilenguaje</h4>
                        <p>Contamos con profesores de diversas nacionalidades que comparten sus documentos aquí</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-bullhorn feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Simplicidad</h4>
                        <p>Solo regístrate y accede a miles de documentos de varios profesores del mundo.</p>
                    </div>
                </div>
                <div class="col-md-4 col-xs-12 block">
                    <div class="col-md-2 col-xs-2"><i class="fa fa-support feature_icon"></i></div>
                    <div class="col-md-10 col-xs-10">
                        <h4>Conocimientos científicos</h4>
                        <p>Todos los documentos son revisados para proveer una correcta enseñanza</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Conócenos</h4>
                        <hr/>
                        <p>Trabajamos 100% a distancia, promoviendo la seguridad y el esparcimiento en estos tiempos de contingencia.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>
