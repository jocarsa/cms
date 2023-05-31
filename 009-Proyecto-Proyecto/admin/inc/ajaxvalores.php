<select name="<?php echo $_GET['tabla']?>">
<?php
	
	include "../../config.php";
	$mysqli = new mysqli($mydbserver, $mydbuser, $mydbpassword, $mydb);
	$consulta = "SELECT ".$_GET['claveexterna']." AS Identificador, ".$_GET['columna']." AS columna FROM ".$_GET['tabla']."";
	echo $consulta;
	$resultado = $mysqli->query($consulta);
	
	while ($fila = $resultado->fetch_assoc()) {
		echo '<option value="'.$fila['Identificador'].'">'.$fila['columna'].'</option>';
	}

?>
</select>