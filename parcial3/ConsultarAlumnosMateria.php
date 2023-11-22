<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery-3.6.3.js"></script>
</head>
<body>
    <?php 
        include 'menu.php';
        include 'conexion.php';

        $sql = "SELECT a.*,m.nombre AS materia_nombre FROM alumnos a INNER JOIN alumnos_materias am ON a.id=";
        $datos = $conexion->query($sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php while($registro = $datos->fetch_assoc()){?>
                    
                <?php}?> 
            </div>
        </div>
    </div>
</body>
</html>