<?php
session_start();
include("conexion.php");

if( isset($_POST) && isset($_GET) ){

    if ( isset($_POST['materia']) && isset($_POST['titulo']) && isset($_POST['resumen']) ){
        $nueva_materia = $_POST['materia'];
        $nuevo_titulo  = $_POST['titulo'];
        $nuevo_resumen = $_POST['resumen'];

        // get details of the uploaded file
        $tmpPath = $_FILES['nota']['tmp_name'];
        $fn = $_FILES['nota']['name'];
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

                $updateQuery = "UPDATE apuntes SET materia='".$nueva_materia."', titulo='".$nuevo_titulo."', resumen='".$nuevo_resumen."', apunte='".$fn."', autor='".$_SESSION['usuario']."' WHERE id_apuntes='".$_GET['id']."';";
                mysqli_query($link, $updateQuery);

            }else{
                $_SESSION['mensaje'] = "El documento no pudo ser subido";
            }
        }else{
            echo "no se encuentra";
        }
    }else{
        echo "No estan seteadas las variables";
    }
}else{
    echo "no rifa el post ni el get";
}

switch ($_SESSION['tipo']){
    case 1:
        header("Location: apuntesAdministrador.php");
        break;
    case 2:
        header("Location: apuntesProfesor.php");
        break;
}


?>