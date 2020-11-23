<?php
    session_start();
    include("conexion.php");
    $nombre=$_SESSION["usuario"];
    //$apellido=$_SESSION[""];
    $materia=$_REQUEST['materia'];
    $titulo=$_REQUEST['titulo'];
    $autor=$nombre;
    $resumen=$_FILES['resumen']['name'];
    $apunte=$_FILES['apunte']['name'];
    //crear la conexion a la DB
    	$link=Conectarse();
      mysqli_select_db($link,"apuntesdb");
    	//guardar el apunte en la DB
      mysqli_query($link,"insert into apuntes(titulo,materia,resumen,apunte,autor) values ('$titulo','$materia','$resumen','$apunte','$autor');");
    header("Location: apuntesProfesor.php");
?>
