<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 26</title>
</head>
<body>
    <center>
        <header>
            <h1>Dado 3 numeros, devolver en orden ascendente</h1>
        </header>
        <main>
            <form action="" method="POST">
                <label for="num1">Ingrese el numero:</label>
                <input type="number" id="num1" name="num1" required>
<br><br>
                <label for="num2">Ingrese el numero:</label>
                <input type="number" id="num2" name="num2" required>
<br><br>
               <label for="num3">Ingrese el numero:</label>
               <input type="number" id="num3" name="num3" required> 
<br><br>
               <button type="submit">Enviar</button>
            </form>
            <?php

        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $num3 = $_POST['num3'];

        if($num1 < $num2 && $num1 < $num3){
           $menor = $num1;
        }else if ($num2 < $num1 && $num2 < $num3 ){
            $menor = $num2;
        }else{
            $menor = $num3;
        }
        if($num1 > $num2 && $num1 > $num3){
            $mayor = $num1;
        }else if($num2 > $num1 && $num2 > $num3){
            $mayor = $num2;
        }else{
            $mayor = $num3;
        }
        $intermedio = ($num1 + $num2 + $num3) - ($mayor + $menor);

        echo "El numero mayor es  $mayor <br>  El numero intermedio:  $intermedio <br> El numero menor es:  $menor";
 
        }
            ?>
        </main>
    </center>
</body>
</html>