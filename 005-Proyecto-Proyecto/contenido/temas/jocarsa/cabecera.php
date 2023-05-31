<!doctype html>
<html lang="es">
    <head>
        <title><?php echo $configuracion['titulo']?></title>
        <meta charset="utf-8">
        <link rel="Stylesheet" href="contenido/temas/<?php echo $configuracion['tema']?>/estilo.css">
    </head>
    <body>
        <header>
            <img src="<?php echo $configuracion['rutaimagenes'].$configuracion['logo']?>" alt="logo">
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
                                    <a href="?id='.$fila['Identificador'].'">'.$fila['nombre'].'</a>
                                </li>
                            ';
                        }
                    ?>
                    
                </ul>
            </nav>
        </header>
        <main>