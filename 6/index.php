<?php include "configuracion.php" ?>
<?php include "contenido/temas/".$configuracion['tema']."/cabecera.php" ?>

<?php
    if($_GET['id'] == "blog"){
        
    }else{
        $peticion = "SELECT * FROM paginas WHERE Identificador = ".$_GET['id']."";
        $resultado = $bd->query($peticion);
        while ($fila = $resultado->fetch_assoc()) {
            echo '
                <h3>'.$fila['titulo'].'</h3>
                <p>'.$fila['contenido'].'</p>
            ';
        }
    }
?>

<?php include "contenido/temas/".$configuracion['tema']."/piedepagina.php" ?>