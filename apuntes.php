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

    <section class="apuntes-container">
        <?PHP
            //mostrar taba con los apuntes en la base de datos
            $link=mysqli_connect("localhost","root","");
            mysqli_select_db($link,"apuntesdb");
            $result=mysqli_query($link,"select * from apuntes");
            echo "<table class='tabla-apuntes'>";
            echo "<tr><th> Materia </th><th> Titulo </th><th> Autor </th><th> Archivo </th></tr>";
            while($row = mysqli_fetch_array($result))
            {
                $id      =$row['id_apuntes'];
                $materia =$row['materia'];
                $titulo  =$row['titulo'];
                $autor   =$row['autor'];
                echo "<tr><td> $materia </td><td> $titulo </td> <td> $autor </td> <td><a class='nota_boton' href='verResumen.php?id=".$id."'>VER NOTA</a></td></tr>";

            }
            mysqli_free_result($result);
            mysqli_close($link);
            echo "</table>";
        ?>
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