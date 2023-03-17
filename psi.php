<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mediciones PSI</title>
    <script src="https://kit.fontawesome.com/b9a22337ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <center>
        <h1 class="title">Mediciones PSI</h1>
        <p class="title2">Hecho por Winderson Villarreal</p>
        <br> <br>
    </center>
    <?php
    include "helpers/conect.php";
    #include "CRUD/delete2.php";
    ?>
    <div class="container-fluid row">
        <form class="col-4 p-3" action="" method="POST">
            <div class="mb-3">
                <h3 class="text-center text-secondary">Registro de PSI</h3>
                <?php
                include "CRUD/create.php";
                ?>
                <br><br>
                <label class ="form-label" for="">Ingrese el valor del PSI</label> 
                <input type="number" step="any" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="medi">
                <input type="hidden" name="idmedi" value="<?= $_GET["id"] ?>">
            </div>
            <button type="submit" class="btn btn-primary" name="btnregmed" value="regmed">Registrar</button>
            <a class="btn btn-small btn-primary" href="index.php"><i class="fa-sharp fa-solid fa-house"></i></a>
        </form>
        <div class="col-8 p-4">
            <table class="table">
                <thead class="bg-info">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">ID POZO</th>
                        <th scope="col">PSI</th>
                        <th scope="col">Fecha de Creacion</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    #include "helpers/conect.php";
                    $ids= $_GET["id"];
                    $sql = $conexion -> query("select * from medidas where id_pozo = $ids ");
                    while ($datos=$sql-> fetch_object()) { ?>
                        <tr>
                            <td><?= $datos->id ?></td>
                            <td><?= $datos->id_pozo ?></td>
                            <td><?= $datos->psi ?></td>
                            <td><?= $datos->fecha ?></td>
                            <td><a class="btn btn-small btn-danger" href="CRUD/delete2.php?id=<?= $datos->id ?>"><i class="fa-solid fa-trash"></i></a></td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>