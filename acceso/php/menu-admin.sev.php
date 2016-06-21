<?php 
function vinculo($id){
	if ($id == 1){
		 echo "../quienes-somos/";
	}
	elseif ($id == 2){
		 echo "../nuestras-marcas/";
	}
	elseif ($id == 3){
		 echo "../multimedia/";
	}
	elseif ($id == 4){
		 echo "../contacto/";
	}
	elseif ($id == 4){
		 echo "../empleos/";
	}
}

function menu_sup($validar){
include("php/dbconect.php");
	if ($validar == "correcto"){
		$result = $mysqli->query("SELECT id_solicitud FROM solicitudes");
		$num_sol='';
		if ($num_sol = $mysqli->affected_rows > 0){}
		
	echo '<ul class="bot-menu-prim">
<li><a href="salir.php" title="SALIR">SALIR</a></li>
<li><a href="desarrollos-ins.php" title="DESARROLLOS">DESARROLLOS</a></li>
<li><a href="articulos-ins.php" title="ARTÍCULOS">ARTÍCULOS</a></li>
<li><a href="noticias-ins.php" title="NOTICIAS">NOTICIAS</a></li>';
echo '</ul>
<br clear="all">';
	}
}

function menu_sec($validar,$seccion){
	include("php/dbconect.php");
	if ($validar == "correcto"){
		//noticias
		if ($seccion == "8"){
			echo '<a href="noticias-ins.php">agregar</a><img src="imagenes/sep.png"/>';
			echo '<a href="noticias-mod-sel.php">modificar</a><img src="imagenes/sep.png"/>';
			echo '<a href="noticias-del-sel.php">eliminar</a><img src="imagenes/sep.png"/>';
		}
		//multimedia
		if ($seccion == "2"){
			echo '<a href="articulos-ins.php">agregar</a><img src="imagenes/sep.png"/>';
			echo '<a href="articulos-mod-sel.php">modificar</a><img src="imagenes/sep.png"/>';
			echo '<a href="articulos-del-sel.php">eliminar</a><img src="imagenes/sep.png"/>';
		}
		//multimedia
		if ($seccion == "3"){
			echo '<a href="desarrollos-ins.php">agregar</a><img src="imagenes/sep.png"/>';
			echo '<a href="desarrollos-mod-sel.php">modificar</a><img src="imagenes/sep.png"/>';
			echo '<a href="desarrollos-del-sel.php">eliminar</a><img src="imagenes/sep.png"/>';
		}
		else{
		}
	}
}
?>