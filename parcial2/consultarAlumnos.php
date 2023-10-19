<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Menú
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Consultar alumnos</a></li>
                <li><a class="dropdown-item" href="#">Registrar alumnos</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Menú</a></li>
            </ul>
            </li>
            <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
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
        <div class="col-12">
            <tbody>
                <?php while($registro = $datos->fetch_assoc()){?>
                    <tr>
                        <td><?php echo $registro["id"];?></td>
                        <td><?php echo $registro["nombre"];?></td>
                        <td><?php echo $registro["numero_control"];?></td>
                        <td><?php echo $registro["semestre"];?></td>
                        <td><?php echo $registro["edad"];?></td>
                        <td><?php echo $registro["turno"];?></td>
                        <td><?php echo $registro["sexo"];?></td>
                        <td>
                            <a href="" class="btn btn-sm btn-primary">Editar</a>
                            <a href="" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </div>
    </div>
</div>

</body>
</html>