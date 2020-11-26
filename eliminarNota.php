<?php
session_start();
include("conexion.php");

//crear la conexion a la DB
$link=Conectarse();
mysqli_select_db($link,"apuntesdb");

// Variable para la eliminación del apunte
$id = $_GET['id'];

//Guardar el apunte en la DB
mysqli_query($link,"DELETE FROM apuntes WHERE id_apuntes='".$id."';");

    if ( isset($_SESSION['usuario'])){
        switch ($_SESSION['tipo']){
            case 1:
                header("Location: apuntesAdministrador.php");
                break;
            case 2:
                header("Location: apuntesProfesor.php");
                break;
        }
    }
?>
