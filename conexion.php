<?php
    $server = "localhost";
    $user = "root";
    $pasword = "YES";

    $conexion = new mysqli($server, $user, $pasword);

    if($conexion->connect_error){
        die("Fallo la conexion". $conexion->connect_error);
    }
?>