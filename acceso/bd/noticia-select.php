<?php
//busqueda de los datos de la noticia
$ssql=sprintf("SELECT * FROM noticias WHERE id_noticia='".$id_noticia."'");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
$fila = $resultado->fetch_array(MYSQLI_ASSOC);
$titulo = $fila["titulo"];
$contenido = $fila["contenido"];
$dia = $fila["dia"];
$mes = $fila["mes"];
$ano = $fila["ano"];
$autor = $fila["autor"];
$id_noticia = $fila["id_noticia"];
?>