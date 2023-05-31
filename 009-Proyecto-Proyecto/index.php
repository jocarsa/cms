<?php include "configuracion.php" ?>
<?php include "contenido/temas/".$configuracion['tema']."/cabecera.php" ?>

<?php
    if(!isset($_GET['id'])){$_GET['id'] = $configuracion['paginadeinicio'];}
    if($_GET['id'] == "blog"){
        cargaBlog();
    }else{
        cargaPagina();
    }
?>

<?php include "contenido/temas/".$configuracion['tema']."/piedepagina.php" ?>

<?php
    
    $carpetas = scandir("contenido/complementos");    
    for($i = 2;$i<count($carpetas);$i++){
        include "contenido/complementos/".$carpetas[$i]."/index.php";
    }
    
?>