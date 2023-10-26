<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de alumnos</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <?php include 'conexion.php';?>    

    <nav class="navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Cetis 107</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="consultarAlumnos.php">Consultar alumnos</a></li>
                <li><a class="dropdown-item" href="RegistrarAlumnos.php">Registrar alumnos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="menu.php">Menú</a></li>
            </ul>
            </li>
            
        </ul>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="card">
                <h1>Sistema de gestión de control escolar</h1>
                <h3>CETIS 107</h3>
                <img src="imagenes/DGETI.png" alt="" width="15%" class="img-fluid">
            </div>
        </div>
    </div>
    <footer class="text-center"><hr>
        <span>Cetis 107 Web App &copy; 2023</span>
    </footer>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>