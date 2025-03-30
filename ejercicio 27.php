<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 27</title>
</head>
<body>
    <center>
        <header>
            <h1>
                Ecuacion de primer grado
            </h1>
            <form action="" method="POST">

            <label for="numA">Ingresa el valor "A":</label>
            <input type="number" id="numA" name="numA" required>
<br><br>
            <label for="numB">Ingresa el valor "B":</label>
            <input type="number" id="numB" name="numB" required>
<br><br>
            <button type="submit">Analizando</button>
            </form>
<?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $numA = $_POST["numA"];
        $numB = $_POST["numB"];

  if ($numA != 0) {
 
    $x = -$numB / $numA;
    echo "<p>La ecuación {$numA}x + {$numB} = 0 es una ecuación de primer grado.</p>";
    echo "<p>El valor de x es: " . $x . "</p>";
} else {
    echo "<p>El valor de a es 0, por lo tanto, no es una ecuación de primer grado.</p>";
    
    if ($numB == 0) {
        echo "<p>La ecuación 0x + 0 = 0 tiene infinitas soluciones.</p>";
    } else {
        echo "<p>La ecuación 0x + {$numB} = 0 no tiene solución.</p>";
    }
}
}
?>
</center>
</body>
</html>