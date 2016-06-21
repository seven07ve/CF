<?php
//ELIMINAR
$ssql="DELETE FROM articulos WHERE id_articulos='".$id_articulos."'";
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
unlink("$file_borrar");
?>