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
        <p>Para guardar presione el boton</p>
        <form action="registrar.php" method="post">
            <label for="nombre">Nombre: </label><input type="text" name="nombre" id="nombre"><br>
            <label for="trabajo">Trabajo: </label><input type="text" name="trabajo" id="trabajo"><br>
            <label for="telefono">Telefono: </label><input type="number" name="telefono" id="telefono"><br>
            <label for="direccion">Dirección: </label><input type="text" name="direccion" id="direccion"><br>
            <label for="otras">Otras: </label><input type="text" name="otras" id="otras"><br>
            <input type="submit" value="Guardar!" name="registrarCont"><input type="reset" value="Reset" name="reset">
        </form>

        <?php
        if(isset($_REQUEST["registrarCont"])) {
            $nombre = $_REQUEST["nombre"];
            $trabajo = $_REQUEST["trabajo"];
            $telefono = $_REQUEST["telefono"];
            $direccion = $_REQUEST["direccion"];
            $otras = $_REQUEST["otras"];
            $datos = "Contacto: $nombre $trabajo $telefono $direccion $otras \n";
            echo $datos;
            echo "<br><br><a href='./agenda_virtual.php'>Volver</a>";
            $fopen = fopen("agenda.txt", "a");
            fwrite($fopen, $datos);
            fclose($fopen);

        }