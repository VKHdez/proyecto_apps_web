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
    <link rel="stylesheet" href="view/general_view/css/tabla_styles.css">
    <link rel="stylesheet" href="view/general_view/css/searchBar_styles.css">

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

                    <a class="navbar-brand" href="apuntes.php">
                        <h1>APUNT.ES</h1><span>El aprendizaje sigue</span></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="apuntes.php">Apuntes</a></li>

                        <?php

                        if( isset($_SESSION['usuario']) ){
                            echo "<li><a href='perfilAlumno.php'>Perfil</a></li>
							            <li><a href='contact.php'>Contacto</a></li>
                                        <li><a href='salir.php'>Salir</a></li>";
                        }else{
                            echo "<li><a href='login.php''>Iniciar Sesion</a></li>
                                          <li><a href='registration.php'>Registrarse</a></li>";
                        }

                        ?>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>
<section id="top_banner">
    <div class="banner">
        <form class="form-buscador" action="accionBuscador.php" method="POST">
            <input class="barra_busqueda" name="busqueda" type="text" placeholder="Busca un Documento...">
            <input class="boton_buscar" type="submit" value="Buscar">
        </form>
    </div>
</section>
<!--
//*************************************************************************************************
agregado lo de abajo php
//*****************************************************************************************************
-->

<section class="resumen-container">
    <?PHP
    //mostrar taba con los apuntes en la base de datos
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"apuntesdb");

    //  Cargar información completa del Apunte
    $result=mysqli_query($link,"select * from apuntes WHERE id_apuntes='".$_GET['id']."'");

    while($row = mysqli_fetch_array($result))
    {
        $materia = $row['materia'];
        $titulo  = $row['titulo'];
        $autor   = $row['autor'];
        $resumen = $row['resumen'];

    }
    mysqli_free_result($result);
    mysqli_close($link);
    echo "</table>";
    ?>

    <div class="datos-resumen">
        <h2> <strong> <?php echo $titulo; ?> </strong> </h2>

        <h3> Autor: <?php echo $autor; ?> </h3>
        <p> <?php echo $resumen; ?> </p>
    </div>

    <div class="boton-resumen">
        <?php
        if( isset($_SESSION['usuario']) ){
            echo "<a href='verApunte.php?id=".$_GET['id']."'>VER APUNTE COMPLETO</a>";
        }else{
            echo "<a href='login.php'>INICIE SESIÓN PARA VER EL APUNTE COMPLETO</a>";
        }
        ?>

    </div>
</section>



<section id="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12 block">
                <div class="footer-block">
                    <h4>Comparte tus conocimientos...</h4>
                    <hr/><p>Aplicaciones Web - Otoño 2020</p>
                </div>
            </div>
        </div>
    </div>
</section>