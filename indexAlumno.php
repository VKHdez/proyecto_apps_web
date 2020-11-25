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
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                        <a class="navbar-brand" href="indexAlumno.php">
                            <h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <li><a href="apuntes.php">Apuntes</a></li>
                            <li><a href="perfilAlumno.php">Perfil</a></li>
                            <li><a href="contact.php">Contacto</a></li>
                            <li><a href="salir.php">Salir</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

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
