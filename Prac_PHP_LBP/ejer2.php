<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer2</title>
</head>
<body>
    <h1>Jugador 1</h1>
    <?php
        $jugadorUno = 0;
        for ($i=0; $i < 5; $i++) { 
            $dado = rand(1,6);
            echo "<img src='./img/$dado.jpg'>";
            $jugadorUno += $dado;
        }
    ?>
    <h1>Jugador 2</h1>
    <?php
        $jugadorDos = 0;
        for ($i=0; $i < 5; $i++) { 
            $dado = rand(1,6);
            echo "<img src='./img/$dado.jpg'>";
            $jugadorDos += $dado;
        }
    ?>
    <h1>Resultado</h1>
    <?php
        if ($jugadorUno > $jugadorDos) {
            $ganador = 1;
        }
        else {
            $ganador = 2;
        }
        echo "<p>En conjunto, ha ganado el jugador <b>$ganador</b>.</p>"

    ?>

    
</body>
</html>