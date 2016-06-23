<?php
//insertar
$isql=("INSERT INTO desarrollos (cliente,tipo,descripcion,lugar) VALUES ('".addslashes($_POST['cliente'])."','".$_POST["tipo"]."','".addslashes($_POST['descripcion'])."','".$_POST["lugar"]."')");
//ejecuta la sentencia usql
$insertar = $mysqli->query($isql);
//guarda el numero de la ultima id creada por autoincremento
$id_desarrollos = $mysqli->insert_id;
?>