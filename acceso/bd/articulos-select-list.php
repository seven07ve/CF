<?php
	//busqueda el titulo y el id del articulo ya sea que den el ano o el mes o ambos por post
	//si no hay post los busca ppor la fecha actual
	if (!$_POST["ano"] and !$_POST["mes"]){
		$ssql=sprintf("SELECT titulo, id_articulos FROM articulos WHERE ano='".date("Y")."' AND mes='".date("m")."' ORDER BY id_articulos DESC");
	}
	else if ($_POST["ano"] == "" and $_POST["mes"]){
		$ssql=sprintf("SELECT titulo, id_articulos FROM articulos WHERE ano='".date("Y")."' AND mes='".$_POST["mes"]."' ORDER BY id_articulos DESC");
	}
	else if ($_POST["ano"] and $_POST["mes"] == ""){
		$ssql=sprintf("SELECT titulo, id_articulos FROM articulos WHERE ano='".$_POST["ano"]."' AND mes='".date("m")."' ORDER BY id_articulos DESC");
	}
	else{
		$ssql=sprintf("SELECT titulo,id_articulos FROM articulos WHERE ano='".$_POST["ano"]."' AND mes='".$_POST["mes"]."' ORDER BY id_articulos DESC");
	}
	//ejecuta la sentencia sql
	$resultado = $mysqli->query($ssql);
?>