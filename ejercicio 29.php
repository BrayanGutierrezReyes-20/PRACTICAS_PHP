<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 29</title>
</head>
<body>
    <center>
        <header>
            <h1>
                Numero positivo y negativo
            </h1>
            <main>
                <form action="" method="POST">
                    <label for="num">Ingrese numero:</label>
                    <input type="number" id="num" name="num" required>
<br><br>
                    <button type ="submit" >ENviar</button>
                </form>
<?php
            if($_SERVER ['REQUEST_METHOD'] == "POST"){
                $num = $_POST ['num'];
                if($num < 0){
                $multi = $num * 2 ;
                echo "el numero es negativo por lo que se multipplica: " . $multi;
                }elseif ($num >= 0){
                $multi =$num * 3 ;
                echo "El numero es positivo por los que se triplicara: " . $multi;
                }else{
                    echo "El numero es neutro" . $num ;
                }
                
            }
?> 
            </main>
        </header>
    </center>
</body>
</html>