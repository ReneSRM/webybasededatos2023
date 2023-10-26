<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jquery-3.7.1.js"></script>
</head>
<body>

    <?php include'menu.php';?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="POST">
                    <div class="form-group">
                        <label for="">Nombre:</label>
                        <input name="nombre" type="text" class="form-control" placeholder="Teclea el nombre del alumno">
                    </div>
                    <div class="form-group">
                        <label for="">Numero de control:</label>
                        <input name="nc" type="text" class="form-control" placeholder="Teclea el numero de control del alumno">
                    </div>
                    <div class="form-group">
                        <label for="">Semestre:</label>
                        <input name="semestre" type="text" class="form-control" placeholder="Teclea el semestre">
                    </div>
                    
                    <div class="form-group">
                        <label for="">Edad:</label>
                        <input name="edad" type="number" class="form-control" placeholder="Teclea la edad del alumno">
                    </div>
                    <div class="form-group">
                        <label for="">Turno:</label>
                        <select name="turno" class="form-control">
                            <option value="">Selecciona el turno</option>
                            <option value="MATUTINO">MATUTINO</option>
                            <option value="VESPERTINO">VESPERTINO</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Sexo:</label>
                        <select name="sexo" class="form-control">
                            <option value="">Selecciona el turno</option>
                            <option value="0">Femenino</option>
                            <option value="1">Masculino</option>
                            <option value="2">Prefiero no responder</option>
                        </select>
                    </div>
                    <div>
                        <input type="submit" value="Registrar" class="btn btn-primary">
                        <a href="consultarAlumnos.php" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
    <footer class="text-center">
        <hr>
        CETIS 107 &copy: 2023
    </footer>
    <script src="js/bootstrap.js"></script>
</body>
</html>