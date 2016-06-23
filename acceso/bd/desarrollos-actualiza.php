<?php
	//Actualiza el articulo
$usql="UPDATE desarrollos SET cliente='".addslashes($_POST["cliente"])."', descripcion='".addslashes($_POST["descripcion"])."', tipo='".$_POST["tipo"]."', lugar='".$_POST["lugar"]."'  WHERE id_desarrollos='".$id_desarrollos."'"; 
	//ejecuta la sentencia sql
	$actualizar = $mysqli->query($usql);
?>