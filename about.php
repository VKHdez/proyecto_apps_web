<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Acerca de nosotros</title>
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
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    <section id="skills">
        <div class="titlebar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 xol-md-12 col-sm-12 col-xs-12">
                        <div class="section-heading text-center">
                            <h2>En el equipo 3</span></h2>
                            <p class="subheading">contamos con excelentes profesionales</p>
                        </div>

                        <div class="row">
                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-1">
                                    <span class="progress-left">
                     <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">90%</div>

                                </div>
                                <div class="progress-title">
                                    <h5>Comunicación</h5>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-2">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">75%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Expertos en SCRUM</h5>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-3">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">60%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Creatividad</h5>
                                </div>
                            </div>

                            <div class="col-md-3 col-sm-6 col-xs-6 block mybox">
                                <div class="progress color progress-bar-4">
                                    <span class="progress-left">
                    <span class="progress-bar"></span>
                                    </span>
                                    <span class="progress-right">
                    <span class="progress-bar"></span>
                                    </span>
                                    <div class="progress-value">80%</div>
                                </div>
                                <div class="progress-title">
                                    <h5>Programación</h5>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
    </section>
    <section id="team-member">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 xol-md-12 col-sm-12 col-xs-12">
                    <div class="section-heading text-center">
                        <h1>Conoce <span>al Equipo</span></h1>
                        <p class="subheading">Pertenecientes a la Benemérita Universidad Autónoma de Puebla</p>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        			<i class="qodef-icon-simple-line-icon qodef-icon-element fa fa-cog"></i>            </span>                                            </div>
                                            <h6 class="q_team_position">Desarrollador</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Jose Carlos</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/vk%20.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        				<i class="qodef-icon-simple-line-icon qodef-icon-element fa fa-cog"></i>    					</span>                                            </div>
                                            <h6 class="q_team_position">Desarrollador</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Víctor Hernández</h5>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="wpb_column vc_column_container col-md-3 col-sm-6 col-xs-6 block mybox">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="our-team main-info-below-image">
                                    <div class="our-team-inner">
                                        <div class="our-team-image">
                                            <img src="img/team-4.jpg" />
                                            <div class="qodef-circle-animate"></div>
                                            <div class="our-team-position-icon">
                                                <span class="qodef-icon-shortcode circle">
        					<i class="qodef-icon-simple-line-icon qodef-icon-element fa fa-cog"></i>            		</span>                                            </div>
                                            <h6 class="q_team_position">Desarrollador</h6>
                                        </div>
                                        <div class="our-team-info">
                                            <div class="our-team-title-holder">
                                                <h5 class="our-team-name">Bernardo</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <h4>Address</h4>
                        <hr/><p>La guardida de lobos.</p>
                    </div>
                </div>
            </div>
        </div>
	</section>

</body>

</html>
