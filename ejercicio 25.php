<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Practica 25</title>
</head>
<body>
    <center>
        <header>
        <h1>Dado un numero, devolver el doble si el numero no es par, caso contrario devolver el triple.</h1>
        </header>
        <main>
            <section>
                <form action="" method="POST">
                    <label for="numero">Ingresa un numero:</label>
                    <input type="number" id="numero" name="numero">
                    <button type="submit">Enviar</button>
                </form>
                
                <?php
                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                    if (isset($_POST['numero'])) {
                        $numero = intval($_POST['numero']);
                        if ($numero % 2 == 0) {
                            $resultado = $numero * 3;
                            echo "El triple del numero " . $numero . " es: " . $resultado;
                        } else {
                            $resultado = $numero * 2;
                            echo "El doble del numero " . $numero . " es: " . $resultado;
                        }
                    } else {
                        echo "Por favor,ingrese un numero.";
                    }
                }
                ?>
            </section>
        </main>
    </center>
</body>
</html>