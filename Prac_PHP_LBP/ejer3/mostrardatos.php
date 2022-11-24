<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <h1>Mostrando datos guardados...</h1>
    <br><br>
    <?php
        $file = fopen("datos.txt", "r");
            $linea = fgets($file);
            echo $linea;
        fclose($file);
    ?>
    
</body>
</html>