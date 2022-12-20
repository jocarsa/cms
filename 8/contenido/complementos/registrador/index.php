<?php
$actual_link = 
    (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") 
    . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$myfile = fopen("contenido/complementos/registrador/logs.csv", "a") or die("Unable to open file!");
$txt = '"'.date('U').'","'
    .$_SERVER['REMOTE_ADDR'].'","'
    .$actual_link.'","'
    .$_SERVER['HTTP_USER_AGENT']
    .'"'."\n";
fwrite($myfile, $txt);
fclose($myfile);
?>