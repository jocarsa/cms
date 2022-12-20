<?php
    $configuracion = [];
    $bd = new mysqli("localhost", "cms", "cms", "cms");
    $peticion = "SELECT * FROM configuracion";

    $resultado = $bd->query($peticion);

    while ($fila = $resultado->fetch_assoc()) {
        $configuracion[$fila['clave']] = $fila['valor'];
    }


?>