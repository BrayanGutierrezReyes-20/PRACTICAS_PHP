<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 21</title> 
</head>
<body>
    <center>
    <header>
        <h1>Dado 3 numeros enteros, devolver el mayor</h1>
        <form action="" method="POST">
            <label for="num1">Ingrese el numero:</label>
            <input type="number" name="num1" id="num1"> 
            <br><br>
            <label for="num2">Ingrese el numero:</label>
            <input type="number" name="num2" id="num2">
            <br><br>
            <label for="num3">Ingrese el numero:</label>
            <input type="number" name="num3" id="num3"> 
            <br><br>
            <button type="submit">Enviar</button> 
        </form>

        <?php

        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

            // Compara los tres numeros para encontrar el mayor
            if ($num1 > $num2 && $num1 > $num3){
                $mayor = $num1; // Si el primer numero es el mayor
            }else if ($num2 > $num1 && $num2 > $num3){
                $mayor = $num2; // Si el segundo numero es el mayor
            }else{
                $mayor = $num3; // Si el tercer numero es el mayor
            }
            // Mostrar el numero mayor encontrado
            echo "El numero mayor es: ".$mayor;
        }
        ?>
    </header>
    </center>
</body>
</html>
