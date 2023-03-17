<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programacion web 4</title>
    <script src="https://kit.fontawesome.com/b9a22337ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1 class="title">Programacion Web 4</h1>
        <p class="title2">Hecho por Winderson Villarreal</p>
        <br> <br>
    </center>
    <?php
    include "helpers/conect.php";
    include "CRUD/delete1.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" action="" method="POST">
            <div class="mb-3">
                <h3 class="text-center text-secondary">Registro de Pozo</h3>
                <?php
                include "CRUD/create.php";
                ?>
                <br><br>
                <label class ="form-label" for="">Ingrese nombre del pozo</label> 
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
            </div>
            <button type="submit" class="btn btn-primary" name="bntreg" value="reg">Registrar</button>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Fecha de Creacion</th>
                        <th scope="col">Ver</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                        <th scope="col">Grafico</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include "helpers/conect.php";
                    $sql = $conexion -> query("select * from pozo");
                    while ($datos=$sql-> fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->nombre ?></td>
                            <td><?= $datos->fecha ?></td>
                            <td><a class="btn btn-small btn-success" href="psi.php?id=<?= $datos->id ?>"><i class="fa-solid fa-book-open"></i></a></td>
                            <td><a class="btn btn-small btn-warning" href="update1.php?id=<?= $datos->id ?>"><i class="fa-solid fa-file-pen"></i></a></td>
                            <td><a class="btn btn-small btn-danger" href="index.php?id=<?= $datos->id ?>""><i class="fa-solid fa-trash"></i></a></td>
                            <td><a target="_blank" class="btn btn-small btn-primary" href="grafic.php?id=<?= $datos->id ?>"><i class="fa-solid fa-chart-simple"></i></a></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>