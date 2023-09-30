<?php 
//include => Genera una advertencia/alerta cuando el archivo puesto no se encuentra o no existe
//require => Genera un error fatal cuando el archivo puesto no se encuentra o no existe, detiene el sistema

    require_once "greet.php";

    echo greet("Santi", "Hola como estas");
?>