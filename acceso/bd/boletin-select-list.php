<?php
	//busqueda el titulo y el id de la boletin ya sea que den el ano o el mes o ambos por post
	//si no hay post los busca ppor la fecha actual
	if (!$_POST["ano"] and !$_POST["mes"]){
		$ssql=sprintf("SELECT titulo, id_noticia FROM noticias WHERE ano='".date("Y")."' AND mes='".date("m")."' ORDER BY id_noticia DESC");
	}
	else if ($_POST["ano"] == "" and $_POST["mes"]){
		$ssql=sprintf("SELECT titulo, id_noticia FROM noticias WHERE ano='".date("Y")."' AND mes='".$_POST["mes"]."' ORDER BY id_noticia DESC");
	}
	else if ($_POST["ano"] and $_POST["mes"] == ""){
		$ssql=sprintf("SELECT titulo, id_noticia FROM noticias WHERE ano='".$_POST["ano"]."' AND mes='".date("m")."' ORDER BY id_noticia DESC");
	}
	else{
		$ssql=sprintf("SELECT titulo,id_noticia FROM noticias WHERE ano='".$_POST["ano"]."' AND mes='".$_POST["mes"]."' ORDER BY id_noticia DESC");
	}
	//ejecuta la sentencia sql
	$resultado = $mysqli->query($ssql);

	if ($_POST["mes"]){
		$mes = $_POST["mes"];
	}
	else{
		$mes = date("m");
	}
	if ($_POST["ano"]){
		$ano = $_POST["ano"];
	}
	else{
		$ano = date("Y");
	}
?>