<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Virtual PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h2 {
            font-weight:normal;
        }
    </style>
</head>
<body>

<?php
    if(isset($_REQUEST["mostrar"])) {
        $fopen = fopen("agenda.txt", "r");
        while(!feof($fopen)){
            $linea = fgets($fopen);
            echo"$linea <br>";
        }
        echo "<br><a href='./agenda_virtual.php'>Volver</a>";

        fclose($fopen);
    }

    else if(isset($_REQUEST["registrar"])) {
        include("./registrar.php");
    }

    else if(isset($_REQUEST["buscar"])) {
        include("./buscar.php");
    }
    
    else {
?>



    <h2>Agenda virutal PHP</h2>
    <h1>¿Qué desea hacer?</h1>
    <form action="agenda_virtual.php" method="post">
        <input type="submit" value="Mostar contactos" name="mostrar">
        <input type="submit" value="Registrar contactos" name="registrar">
        <input type="submit" value="Buscar contactos" name="buscar">
    </form>


<?php
    }
?>
</body>
</html>