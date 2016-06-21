<?php
	//Actualiza el articulo
$usql="UPDATE articulos SET titulo='".addslashes($_POST["titulo"])."', palabra_clave='".addslashes($_POST["palabra_clave"])."', autor='".$_POST["autor"]."',  dia='".$_POST["dia"]."', mes='".$_POST["mes"]."', ano='".$_POST["ano"]."' WHERE id_articulos='".$id_articulos."'"; 
	//ejecuta la sentencia sql
	$actualizar = $mysqli->query($usql);
?>