<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 24</title>
</head>
<body>
<center>
    <header><h1>Multiplos de 3 y 5</h1></header>
    <head>
            <main>
            <section>
            <form action="" method = POST>
            <label for="numero">Ingresa un numero:</label>
            <input type="number" name = "numero" id="numero">
            <button type="submit">Analizar</button>
            </form>

<?php
    // Verificar si el número es multiplo de 3 y 5
    if ($numero % 3 == 0 && $numero % 5 == 0){
        // Si es multiplo de 3 y 5, asignar el mensaje correspondiente
        $men = "El numero " . $numero . " es multiplo de 3 y 5";
    }else{
        // Si no es multiplo de 3 y 5, asignar el mensaje correspondiente
        $men = "El numero " . $numero . " no es multiplo de 3 y 5";
    }
    // Mostrar el resultado
    echo $men;

?>
                </section>
            </main>
        </center>
    </head>
</body>
</html>