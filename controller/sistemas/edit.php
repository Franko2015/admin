<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistemas</title>
    <link rel="stylesheet" href="../../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../../index.php">Mi empresa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../../sistems.php">Sistemas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../clients.php">Clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Páginas necesarias
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="https://www.000webhost.com" target="_blank">000webhost.com</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="https://www.hostinger.es" target="_blank">Hostinger</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Buscar">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <div class="card m-3 p-2">
            <div class="card-title text-center">
                <h3>FORMULARIO EDICIÓN DE SISTEMA: <?php echo $id = $_GET['id']; ?></h3>
            </div>
            <form action="../../model/sistemas/edit.php" method="post">

                <?php include("../../model/conexion.php");
                $sql = "SELECT * from tblSistema WHERE id = '$id'";
                $result = mysqli_query($con, $sql);

                while ($mostrar = mysqli_fetch_assoc($result)) { ?>

                    <div class="card-body">
                        <div class="row m-3">
                            <div class="input-group col">
                                <label for="nombre" class="input-group-text">Nombre: &nbsp;</label>
                                <input type="hidden" name="id" id="id" value="<?php echo $mostrar['id'] ?>">
                                <input type="text" class="form-control" required id="nombre" name="nombre" value="<?php echo $mostrar['nombre'] ?>" />

                                <label for="descripcion" class="input-group-text">Descripcion: &nbsp;</label>
                                <input type="text" class="form-control" required id="descripcion" name="descripcion" value="<?php echo $mostrar['descripcion'] ?>" />

                                <label for="costo" class="input-group-text">Costo Total: &nbsp;</label>
                                <input type="number" class="form-control" required id="costo" name="costo" value="<?php echo $mostrar['costoTotal'] ?>" />
                            </div>
                        </div>
                        <div class="row m-3">
                            <div class="input-group col">
                                <label for="DNS" class="input-group-text">DNS: &nbsp;</label>
                                <input type="text" class="form-control" required id="DNS" name="DNS" value="<?php echo $mostrar['dns'] ?>" />

                                <label for="HOSTING" class="input-group-text">HOSTING: &nbsp;</label>
                                <input type="text" class="form-control" required id="HOSTING" name="HOSTING" value="<?php echo $mostrar['hosting'] ?>" />

                                <button class="btn btn-success" type="submit">
                                    Ingresar
                                </button>
                            </div>
                        </div>
                    </div>
                <?php } ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>