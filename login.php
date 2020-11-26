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
                                              <li><a href='perfilProfesor.php'>Perfil</a></li>
                                              <li><a href='salir.php'>Salir</a></li>";
                                        break;
                                    case 3:
                                        echo "<li><a href='apuntes.php'>Apuntes</a></li>
                                              <li><a href='perfilAlumno.php'>Perfil</a></li>
                                              <li><a href='salir.php'>Salir</a></li>";
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

	<section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2>Es bueno volver a <span>Verte :)</span></h2>
                        <p class="subheading">Sigue estudiando o revisa más documentos!</p>
                    </div>

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Inicia sesión</h3>
                                <p>Introduce tu usuario y contraseña:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                            <form role="form" action="validarUsuario.php" class="login-form">
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-user"></i></span>
                                    <input type="text" class="form-control"name="usuario" placeholder="Correo electrónico" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group form-group">
                                    <span class="input-group-addon" id="basic-addon1"><i class="fa fa-unlock"></i></span>
                                    <input type="password" class="form-control" name="contrasenia" placeholder="Contraseña" aria-describedby="basic-addon1">
                                </div>
                                <button type="submit" class="btn">Iniciar Sesión</button>
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
