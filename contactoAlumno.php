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
	<?PHP session_start(); ?>

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="row">
                    <div class="navbar-header">
                        <?php
                        if ( isset($_SESSION['usuario'])){
                            switch ($_SESSION['tipo']){
                                case 1:
                                    echo "<a class='navbar-brand' href='indexAdministrador.php'><h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>";
                                    break;
                                case 2:
                                    echo "<a class='navbar-brand' href='indexProfesor.php'><h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>";
                                    break;
                                case 3:
                                    echo "<a class='navbar-brand' href='indexAlumno.php'><h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>";
                                    break;
                            }
                        }else{
                            echo "<a class='navbar-brand' href='index.php'><h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>";
                        }
                        ?>
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
                </div>
            </div>
        </nav>
    </header>

    <div id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Left and right controls -->

        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"> <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"> <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
        </a>

    </div>


	<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Alumno: <?php echo $_SESSION["usuario"]; ?></h2>
            </div>
        </div>
    </section>
	<!--
//*************************************************************************************************





//*****************************************************************************************************
-->
    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Nos ubicamos en</h4>
                        <hr/><p>BUAP "La guardida de lobos".</p>
                    </div>
                </div>
            </div>
        </div>
	</section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                    Developed by <a href="#">Aspire Software Solutions</a> designed by <a href="#">Designing Team</a><p> modificado por Bernardo, Carlos y Victor.
                </div>
            </div>
        </div>
    </section>

    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onClick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onClick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onClick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onClick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onClick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onClick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>
