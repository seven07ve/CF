<?php
//busqueda de los datos de la boletin
$ssql=sprintf("SELECT * FROM noticias WHERE id_noticia='".$id_noticia."'");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
$titulo = $fila["titulo"];
$contenido = $fila["contenido"];
$item = $fila["item"];
$dia = $fila["dia"];
$mes = $fila["mes"];
$ano = $fila["ano"];
$pdf = $fila["pdf"];
$autor = $fila["autor"];
$id_noticia = $fila["id_noticia"];
?>