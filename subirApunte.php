<?php
    session_start();
    include("conexion.php");

    $nombre=$_SESSION["usuario"];
    $materia=$_REQUEST['materia'];
    $titulo=$_REQUEST['titulo'];
    $autor=$nombre;
    $resumen=$_REQUEST['resumen'];

    $tmpPath = $_FILES['apunte']['tmp_name'];
    $fn  = $_FILES['apunte']['name'];
    $fs = $_FILES['nota']['size'];
    $ft = $_FILES['nota']['type'];
    $array_type = explode(".", $fn);
    $fileExtension = strtolower(end($array_type));

    // Limpiamos el nombre del archivo
    $nombre_limpio = md5(time() . $fn) . '.' . $fileExtension;

    // Declaramos las extensiones permitidas
    $extensiones = array('pdf');

    // Verificamos que la extension esté permitida
    if( in_array($fileExtension,$extensiones) ){

        // Declaramos el directorio raiz
        $doc_path = "pdf/";
        $file_path = $doc_path.$fn;

        if( move_uploaded_file($tmpPath,$file_path) ){
            $_SESSION['mensaje'] = "Documento Almacenado con éxico";
            echo "Documento Almacenado con éxico";

            $link = Conectarse();
            mysqli_select_db($link, "apuntesdb");

            mysqli_query($link,"insert into apuntes(titulo,materia,resumen,apunte,autor) values ('$titulo','$materia','$resumen','$fn','$autor');");

        }else{
            $_SESSION['mensaje'] = "El documento no pudo ser subido";
        }
    }else{
        echo "no se encuentra";
    }

    header("Location: apuntesProfesor.php");
?>
