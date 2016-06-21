<?php
//ELIMINAR
$ssql="DELETE FROM noticias WHERE id_noticia='".$id_noticia."'";
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
unlink("$file_borrar");
?>