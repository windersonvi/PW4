<?php

if (!empty($_POST["bntreg"])) {
    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $sql = $conexion->query("insert into pozo(nombre)values('$nombre')");        

    }else {
        echo " <div class='alert alert-danger'>Error: Nombre no ingresado</div>";
    }
}



if (!empty($_POST["btnregmed"])) {
    if (!empty($_POST["medi"])) {
        $pre = $_POST["medi"];
        $ids = $_POST["idmedi"];
        $sql = $conexion-> query("insert into medidas(id_pozo,psi)values($ids,'$pre') ");
    }else {
        echo " <div class='alert alert-danger'>Error: PSI no ingresado</div>";
    }
}



?>