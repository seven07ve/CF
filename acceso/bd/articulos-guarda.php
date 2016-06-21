<?php
//insertar
$isql=("INSERT INTO articulos (titulo,autor,palabra_clave,dia,mes,ano) VALUES ('".addslashes($_POST['titulo'])."','".$_POST["autor"]."','".addslashes($_POST['palabra_clave'])."','".$_POST["dia"]."','".$_POST["mes"]."','".$_POST["ano"]."')");
//ejecuta la sentencia usql
$insertar = $mysqli->query($isql);
//guarda el numero de la ultima id creada por autoincremento
$id_articulos = $mysqli->insert_id;
?>