<?php
//busqueda de los datos de la articulos
$ssql=sprintf("SELECT * FROM articulos WHERE id_articulos='".$id_articulos."'");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
$titulo = $fila["titulo"];
$autor = $fila["autor"];
$pdf = $fila["pdf"];
$palabras = $fila["palabra_clave"];
$dia = $fila["dia"];
$mes = $fila["mes"];
$ano = $fila["ano"];
$id_articulos = $fila["id_articulos"];
?>