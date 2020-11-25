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
    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-7 col-xs-7 top-header-links">
                    <ul class="contact_links">
                        <li><i class="fa fa-phone"></i><a href="#">APLICACIONES WEB</a></li>
                        <li><i class="fa fa-envelope"></i><a href="#"> BUAP</a></li>
                    </ul>
                </div>
                <div class="col-md-5 col-sm-5 col-xs-5 social">

                </div>
            </div>
        </div>
        </div>

    </section>

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
                        <a class="navbar-brand" href="#">
                        <h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="indexAlumno.php">INICIO</a></li>
                            <li class="active"><a href="#">Apuntes</a></li>
                            <li><a href="perfilProfesor.php">Perfil</a></li>
							              <li><a href="salir.php">Salir</a></li>
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
                <h2>Profesor: <?php echo $_SESSION["usuario"]; ?></h2>
            </div>
        </div>
    </section>

    <!--
  *************************************************************************************************
  Formulario para subir apuntes
  *****************************************************************************************************
  -->
  <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">

                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Subir apuntes</h3>
                                <p>Completa el siguiente formulario</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="subirApunte.php" class="login-form">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="materia"placeholder="Materia" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="titulo" placeholder="Titulo" aria-describedby="basic-addon1">
                                </div>

                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>subir resumen
                                    <input type="file" class="form-control" name="resumen" placeholder="Subir resumen" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>subir apunte
                                    <input type="file" class="form-control" name="apunte" placeholder="Subir apunte" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn">Subir!</button>
                            </form>
                        </div>
                    </div>
                </div>


    </section>


	<!--
//*************************************************************************************************
agregado lo de abajo php
//*****************************************************************************************************
-->
<?PHP
    //mostrar taba con los apuntes en la base de datos
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"apuntesdb");
    $result=mysqli_query($link,"select * from apuntes");
    echo "<table border=1>";
    echo "<TR><td> Id Apunte </td><td> Materia </td><td> Titulo </td><td> Autor </td><td> Archivo </td></TR>";
    while($row = mysqli_fetch_array($result))
    {
       $id=$row['id_apuntes'];
       $materia=$row['materia'];
       $titulo=$row['titulo'];
       $autor=$row['autor'];
       echo "<TR><td> $id </td><td> $materia </td><td> $titulo </td> <td> $autor </td><td>
       <a href=\"verApunte.php?id=%s\"><img src='actualiza.jpg' width='25' height='25' border='0'></a></td></TR>";

    }
    mysqli_free_result($result);
    mysqli_close($link);
    echo "</table>";
?>




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