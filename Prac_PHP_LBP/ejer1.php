<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejer1</title>
    <style>
        fieldset {
            background-color: #e6e6ff;
            border: 2px solid #8686ff;
        }
        legend {
            background-color: white;
            border: 2px solid #8686ff;
            padding-inline: 10px;
        }
        label {
            display: inline-block;
            width: 55px;
            font-weight: bold;
        }
        input[type='number'] {
            width: 40px;
        }
    </style>
</head>
<body>
    <fieldset> 
        <legend>Formulario</legend>
        <form action="ejer1.php" method="post">
            <p>Escriba el ancho y alto (0 < números <= 100) y mostraré un rectangulo de estrellas de ese tamaño.</p>
            <p>
                <label for="ancho">Ancho:</label><input type="number" name="ancho" id="ancho" maxwidth="20px">
                <br>
                <label for="alto">Alto:</label><input type="number" name="alto" id="alto" maxwidth="20px">
            </p>
            <p>
                <input type="submit" value="Dibujar" name="submit"> <input type="reset" value="Borrar" name="reset">
            </p>
        </form>
    </fieldset>
    
</body>
</html>
<?php
    if(isset($_REQUEST["submit"])) {
        $ancho = $_REQUEST["ancho"];
        $alto = $_REQUEST["alto"];
        echo "<p>Ancho: $ancho <br>";
        echo "Alto: $alto </p>";
        echo "<p>";
        for ($i=1; $i <=$alto ; $i++) { 
            for ($l=1; $l <=$ancho ; $l++) { 
                echo "*";
            }
            echo "<br>";
        }
        echo "</p>";
        }
    
?>