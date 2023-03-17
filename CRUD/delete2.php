<?php

include "../helpers/conect.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" delete from medidas where id=$id ");
}

$message = "Se guardó la nota exitosamete";

echo("<script>location.href = '../index.php?msg=$message';</script>");



?>