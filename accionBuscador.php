<?php
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"apuntesdb");
    // Programa que recibe una búsqueda determinada de la barra de búsqueda en la sección aputes
    // procesa los datos y los redirecciona al archivo listarApuntes.php

    if( isset($_POST['busqueda']) ){
        $busquedaNotas = trim($_POST['busqueda']);

        $queryBusqueda = "SELECT * FROM apuntes WHERE titulo LIKE '%".$busquedaNotas."%'";

        $result=mysqli_query($link, $queryBusqueda);
        require 'listarApuntes.php';
    }

?>