<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 28</title>
</head>
<body>
    <center>
        <header>
            <h1>
                Determinar si es menor o mayor
            </h1>
            <main>
                <form action="" method="POST">
                    <label for="edad">Ingrese edad:</label>
                    <input type="number" id="edad" name="edad">
<br><br>
                    <button type="submit">Enviar</button>
                </form>
<?php
                if($_SERVER ['REQUEST_METHOD'] == "POST"){
                    $edad = $_POST ["edad"];

                    if( $edad > 18){
                        echo "Eres mayor de edad tienes :" . $edad;
                    }else{
                        echo "Eres menor de edad tienes :" . $edad;
                    }
                }
?>
            </main>
        </header>
    </center>
</body>
</html>