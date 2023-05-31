<?php

    function cargaPagina(){
        
        $bd = new mysqli("localhost", "cms", "cms", "cms");
        $peticion = "SELECT * FROM paginas WHERE Identificador = ".$_GET['id']."";
        $resultado = $bd->query($peticion);
        while ($fila = $resultado->fetch_assoc()) {
            echo '
                <h3>'.$fila['titulo'].'</h3>
                <p>'.$fila['contenido'].'</p>
            ';
        }
    }
    function cargaBlog(){
        $bd = new mysqli("localhost", "cms", "cms", "cms");
        $peticion = "SELECT * FROM entradas";
        $resultado = $bd->query($peticion);
        while ($fila = $resultado->fetch_assoc()) {
            echo '
                <article>
                    <h3>'.$fila['titulo'].'</h3>
                    <p>'.$fila['contenido'].'</p>
                </article>
            ';
        }
    }

?>