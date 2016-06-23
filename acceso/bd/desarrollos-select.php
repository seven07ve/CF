<?php
//busqueda de los datos de la tabla desarrollos
$ssql=sprintf("SELECT * FROM desarrollos WHERE id_desarrollos='".$id_desarrollos."'");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
$cliente = $fila["cliente"];
$tipo = $fila["tipo"];
$descripcion = $fila["descripcion"];
$lugar = $fila["lugar"];
$id_desarrollos = $fila["id_desarrollos"];
?>