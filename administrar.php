
<?PHP
    session_start();

    include("conexion.php");
    $link=Conectarse();

?>

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

	<section id="top_banner">
        <div class="banner">
            <div class="inner text-center">

                <?php
                    switch ($_SESSION['tipo']){
                        case 1:
                            echo "<h2>Administrador: ".$_SESSION["usuario"]."</h2>";
                            break;
                        case 2:
                            echo "<h2>Profesor: ".$_SESSION["usuario"]."</h2>";
                            break;
                    }
                ?>
            </div>
        </div>
    </section>
	<!--
//*************************************************************************************************
//*****************************************************************************************************
-->
<?php

   //mostrar taba de los usuarios de la base de datos
    mysqli_select_db($link,"apuntesdb");
    $result=mysqli_query($link,"select * from apuntes  WHERE id_apuntes='".$_GET['id']."'");
    while($row = mysqli_fetch_array($result)){
        $id=$row['id_apuntes'];
        $materia=$row['materia'];
        $titulo=$row['titulo'];
        $resumen=$row['resumen'];
        $pdf = $row['apunte'];
        /*printf ("<TR><td> %s </td><td> %s </td><td> %s </td><td> %s </td>
        <td><INPUT TYPE='text' NAME='aux' placeholder='$tipo' SIZE='1'></td><td><a href=\"agregarProfesor.php?aux=%s&id_usuario=%s\">
        <img src='actualiza.jpg' width='25' height='25' border='0'></a></td></TR>",$id,$nombre,$apellido,$correo,$aux,$id);*/
    }

     mysqli_free_result($result);
     mysqli_close($link);
   echo'</FORM>';
//<INPUT TYPE="SUBMIT" value="Actualizar">
    switch ($_SESSION['tipo']){
        case 3:
            echo "<h2>NO TIENE PERMITIDO ENTRAR AQUÍ</h2>";
            break;
        default:
            echo " 
                <section id='login-reg'>
                    <div class='container'>
            
                        <div class='row'>
                            <div class='col-md-6 col-sm-12 forms-right-icons'>
            
                            </div>
            
                            <div class='col-md-6 col-sm-12'>
                                <div class='form-box'>
                                    <div class='form-top'>
                                        <div class='form-top-left'>
                                            <h3>Actualizar Apunte</h3>
                                            <p>Completa la información de tu Apunte</p>
                                        </div>
                                        <div class='form-top-right'>
                                            <i class='fa fa-pencil'></i>
                                        </div>
                                    </div>
                                    <div class='form-bottom'>
                                        <form role='form' action='actualizarApunte.php?id=".$_GET['id']."' class='login-form' enctype='multipart/form-data' method='post'> 
                                        
                                            <label>MATERIA</label>
                                            <div class='input-group form-group'>
                                                
                                                <span class='input-group-addon' id='basic-addon1'><i class='fa fa-user'></i></span>
                                                <input type='text' class='form-control' name='materia' placeholder='Materia' aria-describedby='basic-addon1' value='".$materia."'>
                                            </div>
                                            
                                            <label>TITULO</label>
                                            <div class='input-group form-group'>
                                                <span class='input-group-addon' id='basic-addon1'><i class='fa fa-user'></i></span>
                                                <input type='text' class='form-control' name='titulo' placeholder='Titulo' aria-describedby='basic-addon1' value='".$titulo."'>
                                            </div>
                                            
                                            <label>RESUMEN</label>
                                            <div class='input-group form-group'>
                                                <textarea name='resumen' id='resumen' cols='75 rows='30'>".$resumen."</textarea>
                                            </div>
                                            
                                            <label>NOTA</label>
                                            <div class='input-group form-group'>
                                                <input type='file' name='nota' placeholder='Subir apunte' >
                                            </div>
                                            <button type='submit' class='btn' style='margin-bottom: 20px'>ACTUALIZAR APUNTE</button>
                                            
                                            <a type='submit' class='btn' style='background-color: orangered' href='eliminarNota.php?id=".$_GET['id']."'>ELIMINAR NOTA</a>                                          
                                        </form>
                                    </div>
                                </div>
                            </div>
                </section>";
            break;
    }

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


<?php

?>