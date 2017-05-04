<?php
	//Actualiza la noticia
	$usql="UPDATE noticias SET titulo='".addslashes($_POST["titulo"])."', contenido='".addslashes($_POST["elm1"])."', dia='".$_POST["dia"]."', mes='".$_POST["mes"]."', ano='".$_POST["ano"]."', autor='".$_POST["autor"]."' WHERE id_noticia='".$id_noticia."'"; 
	//ejecuta la sentencia sql
	$actualizar = $mysqli->query($usql);
?>