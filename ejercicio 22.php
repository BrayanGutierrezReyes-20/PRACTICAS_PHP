<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 22</title>
</head>
<body>
<center>
    <header>
        <h1>Dado un caracter determina si es una vocal</h1>
        <form action="" method="POST">
            <label for="palabra">Ingresa alguna palabra:</label>
            <br><br>
            <input type="text" id="palabra" name="palabra">
            <button type="submit">Verificar</button>
        </form>

        <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $palabra = $_POST["palabra"];

    // Verificar si el caracter ingresado es una vocal (mayascula o minúscula)
    if ($palabra == 'a' || $palabra == 'A' || 
        $palabra == 'e' || $palabra == 'E' || 
        $palabra == 'i' || $palabra == 'I' || 
        $palabra == 'o' || $palabra == 'O' || 
        $palabra == 'u' || $palabra == 'U') 
        {
        // Si es una vocal, asignar el mensaje correspondiente
        $resultado = 'es vocal';
        echo "El caracter ingresado " . $resultado;
    } else {
        // Si no es una vocal, asignar el mensaje correspondiente
        $resultado = 'no es vocal';
        echo "El caracter ingresado " . $resultado;
    }
        }
        ?>
    </header>
</center>
</body>
</html>