<?php

include "helpers/conect.php";

if (!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $conexion->query(" delete from pozo where id=$id ");
}
    


?>