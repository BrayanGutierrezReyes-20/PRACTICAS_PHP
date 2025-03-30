<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 24</title>
</head>
<body>
<center>
    <header><h1>Es par o impar</h1></header>
    <head>
            <main>
            <section>
            <form action="" method = POST>
            <label for="numero">Ingresa un numero:</label>
            <input type="number" name = "numero" id="numero">
            <button type="submit">Enviar</button>
            </form>

            <?php

if($_SERVER['REQUEST_METHOD'] =='POST'){
 
    $numero = $_POST ['numero'];

    // Verificar si el numero es par (divisible entre 2 sin residuo)
    if ($numero % 2 == 0){
        // Si es par, mostrar un mensaje indicando que el numero es par
        echo "El numero es par: " . $numero;
    }else{
        // Si no es par (es impar), mostrar un mensaje indicando que el numero es impar
        echo "El numero es impar: " . $numero;
    }
}
?>
</main>
</section>
</body>
</html>