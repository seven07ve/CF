<?php
//ELIMINAR
$ssql="DELETE FROM desarrollos WHERE id_desarrollos='".$id_desarrollos."'";
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
?>