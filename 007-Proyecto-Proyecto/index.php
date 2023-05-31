<?php include "configuracion.php" ?>
<?php include "contenido/temas/".$configuracion['tema']."/cabecera.php" ?>

<?php
    if($_GET['id'] == "blog"){
        cargaBlog();
    }else{
        cargaPagina();
    }
?>

<?php include "contenido/temas/".$configuracion['tema']."/piedepagina.php" ?>