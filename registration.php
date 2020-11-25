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
                            <!-- <li><a href="verResumen.php">Resumen</a></li> -->
                            <li><a href="login.php">Iniciar Sesion</a></li>
                            <li class="active"><a href="#">Registrarse</a></li>
							<li><a href="about.php">Acerca de</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </header>

	<section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>Registrate y comparte miles de <span>documentos</span></h2>
                        <p class="subheading">De una manera muy sencilla podrás acceder a todo nuestro contenido.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-laptop"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>100% Recomendable</h4>
                            <p>Cada día actualizamos nuestra página para que tú tengas mayor contenido.</p>
                        </div>
                    </div>
                </div>
                <!--forms-right-icons-->
                <div class="col-md-6 col-sm-12">
                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Registrate</h3>
                                <p>Completa el siguiente formulario</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-pencil"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="agregarUsuario.php" class="login-form">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="nombre"placeholder="Nombre" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control" name="apellido" placeholder="Apellido" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="text" class="form-control" name="correo" placeholder="Email" aria-describedby="basic-addon1">
                                </div>
								<div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-envelope"></i></span>
                                    <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn">Registrarme!</button>
                            </form>
                        </div>
                    </div>
                </div>


    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>APUNT.ES</h4>
                        <hr/><p>Comparte tus conocimientos con el mundo</p>
                    </div>
                </div>
            </div>
        </div>
	</section>