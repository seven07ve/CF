<?php
//insertar
$isql=("INSERT INTO noticias (titulo,contenido,dia,mes,ano,autor,tipo) VALUES ('".addslashes($_POST['titulo'])."','".addslashes($_POST['elm1'])."','".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["autor"]."','noticia')");
//ejecuta la sentencia usql
$insertar = $mysqli->query($isql);
//guarda el numero de la ultima id creada por autoincremento
$id_noticia = $mysqli->insert_id;
?>