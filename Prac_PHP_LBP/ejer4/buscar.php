<head>
<style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        h2 {
            font-weight:normal;
        }
    </style>
</head>

<h2>Agenda virutal PHP</h2>
        <h1>Contactos</h1>
        <p>¿Qué contacto desea buscar?</p>
        <form action="buscar.php" method="post">
            <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre"><br><br>
            <input type="submit" value="Buscar!" name="buscarCont"><input type="reset" value="Reset" name="reset">
        </form>

        <?php
            if(isset($_REQUEST["buscarCont"])) {
                $nombre = $_REQUEST["nombre"];
                $fopen = fopen("agenda.txt", "r");
                while(!feof($fopen)) {
                    $linea = fgets($fopen);
                    $arrayDatos = explode(" ", $linea);
                    if($arrayDatos[1]==$nombre) {
                        echo $linea . "<br>";
                    }
                }
            }
        ?>