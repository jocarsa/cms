<!doctype html>
<html lang="es">
    <head>
        <title><?php echo $configuracion['titulo']?></title>
        <meta charset="utf">
    </head>
    <body>
        <header>
            <img src="<?php echo $configuracion['rutaimagenes'].$configuracion['logo']?>">
            <h1><?php echo $configuracion['titulo']?></h1>
            <h2><?php echo $configuracion['subtitulo']?></h2>
            <nav>
                <ul>
                    <?php
                        $peticion = "SELECT * FROM menu ORDER BY orden ASC";

                        $resultado = $bd->query($peticion);

                        while ($fila = $resultado->fetch_assoc()) {
                            echo '
                                <li>
                                    <a href="">'.$fila['nombre'].'</a>
                                </li>
                            ';
                        }
                    ?>
                    
                </ul>
            </nav>
        </header>
        <main>