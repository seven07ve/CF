<?php
//insertar
$isql=("INSERT INTO noticias (titulo,contenido,item,dia,mes,ano,autor) VALUES ('".addslashes($_POST['titulo'])."','".addslashes($_POST['elm1'])."','BT-".$_POST["item"]."','".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."','".$_POST["autor"]."')");
//ejecuta la sentencia usql
$insertar = $mysqli->query($isql);
//guarda el numero de la ultima id creada por autoincremento
$id_noticia = $mysqli->insert_id;
?>