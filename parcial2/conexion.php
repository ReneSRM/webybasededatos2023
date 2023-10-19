<?php
    $server = "localhost";
    $user = "root";
    $pasword = "";
    $baseDatos = "cetis107";

    $conexion = new mysqli($server, $user, $pasword);

    if($conexion->connect_error){
        die("Fallo la conexion". $conexion->connect_error);
    }
?>