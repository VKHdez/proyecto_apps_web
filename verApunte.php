<?PHP session_start(); ?>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="pdf/lib/turn.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pdfjs-dist@2.5.207/build/pdf.min.js"></script>
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

<section class="libro-container">
    <?PHP
    //mostrar taba con los apuntes en la base de datos
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"apuntesdb");

    //  Cargar información completa del Apunte
    $result=mysqli_query($link,"select * from apuntes WHERE id_apuntes='".$_GET['id']."'");

    while($row = mysqli_fetch_array($result))
    {
        $id      = $row['id_apuntes'];
        $materia = $row['materia'];
        $titulo  = $row['titulo'];
        $autor   = $row['autor'];
        $pdf     = $row['apunte'];

    }
    mysqli_free_result($result);
    mysqli_close($link);
    ?>

    <script>

        var id_apunte      = "<?php echo $id; ?>";
        var autor_apunte   = "<?php echo $autor; ?>";
        var materia_apunte = "<?php echo $materia; ?>";
        var titulo_apunte  = "<?php echo $titulo; ?>";
        var pdf_apunte     = "<?php echo $pdf; ?>";

        /*$(document).ready(function(){
            $('#nota').turn({
                width: 1200,
                height: 500,
                autoCenter: true
            });
        });*/

        (async function (){

            pdfjsLib.GlobalWorkerOptions.workerSrc = "https://cdn.jsdelivr.net/combine/npm/pdfjs-dist@2.5.207,npm/pdfjs-dist@2.5.207/build/pdf.worker.min.js";

            const doc = await pdfjsLib.getDocument('pdf/'+pdf_apunte).promise;
            console.log(pdf_apunte);

            /*pdfjsLib.getDocument('/pdf/'+pdf_apunte).then(doc => {
                console.log("Este archivo tiene" +  doc._pdfInfo.numPages + "páginas");
            });*/

            // Obtener la información del documento
            const minPag = 1;
            const maxPag = doc._pdfInfo.numPages;
            let currentPag = 1;

            // Obtener la pág 1
            await getPage(doc,currentPag);

            //Mostrar el número de la Página
            document.getElementById("num_pag").innerHTML= `Página ${currentPag} de ${maxPag}`;

            // Evento de boton anterior
            document.getElementById("anterior").addEventListener("click", async () =>{
                if(currentPag > minPag){
                    await getPage(doc, --currentPag);
                    document.getElementById("num_pag").innerHTML= `Página ${currentPag} de ${maxPag}`;
                }
            });

            // Evento de boton siguiente
            document.getElementById("siguiente").addEventListener("click", async () =>{
                if(currentPag < maxPag){
                    //console.log("Recibe página: "+currentPag);
                    await getPage(doc, ++currentPag);
                    //console.log("ENTREGA página: "+currentPag);
                    document.getElementById("num_pag").innerHTML= `Página ${currentPag} de ${maxPag}`;
                }
            });

        })();

        async function getPage(doc,numeroPag){
            if(numeroPag >= 1 && numeroPag <= doc._pdfInfo.numPages){

                const page = await doc.getPage(numeroPag);

                const viewport = page.getViewport({ scale: 1.5 });

                // Configurar las dimensiones del Canvas
                const canvas = document.getElementById("nota");
                const context = canvas.getContext("2d");

                canvas.height = viewport.height;
                canvas.width = viewport.width;

                // Hacer un render de la página en el canvas
                return await page.render({
                    canvasContext : context,
                    viewport: viewport
                }).promise;

            }else{
                console.log("Porfavor especifica un número de Página valido");
            }
        }
    </script>

    <div class="controles">
        <button id="anterior">anterior</button>
        <div id="num_pag"></div>
        <button id="siguiente">Siguiente</button>
    </div>

    <canvas id="nota"> </canvas>

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