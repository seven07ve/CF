<?php
//busqueda de los datos de la tabla desarrollos
$ssql=sprintf("SELECT * FROM desarrollos ORDER BY id_desarrollos DESC");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
?>