<?php
if(isset($_REQUEST["enviar"])) {
    $nombre = strip_tags(trim($_REQUEST["nombre"]));
    $telefono = strip_tags(trim($_REQUEST["telefono"]));
    $matriculado = strip_tags(trim($_REQUEST["matriculado"]));
    $enseñanza = strip_tags(trim($_REQUEST["enseñanza"]));
    $mostrar = strip_tags(trim($_REQUEST["select"]));
    $datos = "El alumno <b>$nombre</b>, con telefono <b>$telefono</b>, <b>";
    if($matriculado) {
        $datos .= "está matriculado ";
    }
    
    else {
        $datos .= "no está matriculado ";
    }
    $datos .= "</b>en <b>$enseñanza</b>. ";


    if($mostrar == "pantalla") {
        echo $datos;
        echo "<br><br><a href='./inicio.php'>Volver</a>";

    }
    else if($mostrar == "archivo") {
        $file = fopen("datos.txt", "w");
        fwrite($file, $datos);
        fclose($file);
        echo "<a href='./mostrardatos.php'>Mostrar datos</a>";
    }
}
?>