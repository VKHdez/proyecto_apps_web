<?php
session_start();
include("conexion.php");
$link=Conectarse();
$id=$_REQUEST['id'];
$tipo=$_REQUEST['aux'];

//$sSQL="Update pelicula Set titulo='$ti',director='$di',actor='$ac' Where id_pelicula='$id'";
echo $id;
echo $tipo;
mysqli_query($link,"Update usuarios Set tipo='$tipo' Where id_usuario='$id'");
 //header("Location: administrar.php");
?>
