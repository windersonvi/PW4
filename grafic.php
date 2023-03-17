<?php 
include_once("helpers/conect.php"); 
 
$id = $_GET['id']; 
 
$sqli = "SELECT * FROM medidas WHERE id_pozo = '$id'"; 
$parse = mysqli_query($conexion, $sqli); 
$psi = []; 
$fecha = []; 
     
if(mysqli_num_rows($parse) > 0) { 
    while($array = mysqli_fetch_array($parse)) { 
        array_push($psi, $array['psi']); 
        array_push($fecha, $array['fecha']); 
    } 
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script src="https://kit.fontawesome.com/b9a22337ae.js" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
<div style= " height: 200; width: 200; "  class="container">
    <canvas id = "lineChart" height = "400" width = "400"></canvas> 
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> 
    <script> 
        const CHART = document.getElementById("lineChart"); 
        console.log(CHART); 
        let lineChart = new Chart(CHART, { 
            type: "line", 
            data: { 
                labels: [<?php echo '"'.implode('","',  $fecha ).'"' ?>], 
                datasets: [{ 
                    label: 'Grafica de presion', 
                    data: [<?php echo '"'.implode('","',  $psi ).'"' ?>], 
                    fill: false, 
                    borderColor: 'rgb(56, 108, 11)', 
                    tension: 0.1, 
                    backgroundColor: 'rgb(199, 214, 213, 1)', 
                }] 
            } 
        }) 
    </script> 
</div>
</body>
</html>