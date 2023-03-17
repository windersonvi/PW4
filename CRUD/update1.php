<?php
if (!empty($_POST["btnmod"])) {
    if (!empty($_POST["nombre"])) {
        $nombre = $_POST["nombre"];
        $id = $_POST["id"];
        $sql = $conexion->query(" update pozo set nombre='$nombre' where id=$id ");
        if ($sql==1) {
            $message = "Se guardó la nota exitosamete";
            echo("<script>location.href = 'index.php?msg=$message';</script>");
        } else {
            echo "<div class='alert alert-danger'>Error: Dato no modifcado</div>";
        }
        
    }else{
        echo "<div class='alert alert-warning'>Error: Dato vacio</div>";
    }
}
?>