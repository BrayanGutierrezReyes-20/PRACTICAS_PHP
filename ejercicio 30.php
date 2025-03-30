<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 30</title>
</head>
<body>
    <center>
        <header>
            <h1>
                Evaluacion de calificaciones
            </h1>
        </header>
        <form action="" method="POST">
            <label for="cal1">Ingrese Calificacion1:</label>
            <input type="number" id="cal1" name="cal1" required>
<br><br>
            <label for="cal2">Ingrese Calificacion2:</label>
            <input type="number" id="cal2" name="cal2" required>
<br><br>
            <label for="cal3">Ingrese Calificacion3:</label>
            <input type="number" id="cal3" name="cal3" required>
<br><br>
            <label for="cal4">Ingrese Calificacion4:</label>
            <input type="number" id="cal4" name="cal4" required>
<br><br>
            <button type="submit">Analizar</button>
        </form>
        <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $cal1 = $_POST["cal1"];
        $cal2 = $_POST["cal2"];
        $cal3 = $_POST["cal3"];
        $cal4 = $_POST["cal4"];
        // ORDENA DE MAYOR A MENOR
    $notas = array($cal1, $cal2, $cal3, $cal4);
    rsort($notas); 

    // CALCULA EL PROMEDIO DE LAS 3 MEJORES NOTAS
    $promedio = ($notas[0] + $notas[1] + $notas[2]) / 3;

    // MOSTRAR EL RESUTADO                              FORMATEA 2 DECIMALES
    echo "<p>El promedio de las 3 mejores notas es: " . number_format($promedio, 2) . "</p>";

    // MENSAJE DE APROBADO O REPROBADO
    if($promedio >= 6){
        echo "<p>Aprobado</p>";
    }else{
        echo "<p>Reprobado</p>";
    }
    }
        ?>
    </center>
</body>
</html>