<?php
    include 'conexion.php';

    $nombre = $_POST("nombre");
    $numero_control = $_POST("nc");
    $semestre = $_POST("semestre");
    $edad = $_POST("edad");
    $turno = $_POST("turno");
    $sexo = $_POST("sexo");

    $sql = "INSERT INTO alumnos(nombre, numero_control, semestre, edad, turno, sexo)";
    $sql += "VALUES('"$nombre"', '"$numero_control"', '"$semestre"', '"$edad"', '"$turno"', '"$sexo"')";

    if($conexion->query($sql)=== TRUE){
        header("Location: consultarAlumnos.php");
        $conexion->close();
        exit;
    }else{
        echo "<h2>Ocurrio un error</h2> <p>Error;".$sql.
    }
?>
