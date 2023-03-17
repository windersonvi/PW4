<?php
include "helpers/conect.php";
$id = $_GET["id"];
$sql = $conexion->query("select * from pozo where id=$id ")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Nombre del pozo</title>
    <script src="https://kit.fontawesome.com/b9a22337ae.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <form class="col-4 p-3 m-auto" action="" method="POST">
        <div class="mb-3">
            <h3 class="text-center text-secondary">Modificar Pozo</h3>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <?php
            include "CRUD/update1.php";
            while ($datos = $sql->fetch_object()) { ?>
                <label class ="form-label" for="">Ingrese el nuevo nombre del pozo</label> 
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre" value="<?= $datos->nombre?>">     
            <?php }
            ?>
            <br><br>
        </div>
        <button type="submit" class="btn btn-primary" name="btnmod" value="reg">Modificar</button>
        <a class="btn btn-small btn-primary" href="index.php"><i class="fa-sharp fa-solid fa-house"></i></a>
    </form>
    
</body>
</html>