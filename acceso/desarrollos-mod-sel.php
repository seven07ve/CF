<?php
	include("php/start.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="../css/admin.css" rel="stylesheet" type="text/css" />
	<title>&Aacute;rea Administrativa</title>
</head>
<body>
<div align="center">
<?php
	//busqueda el titulo y el id del articulo ya sea que den el ano o el mes o ambos por post
	include("bd/desarrollos-select-list.php");
?>
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'3')?> </div>
	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont" style="float:none; width:95%;">
			<h2>Modificar Desarrollos</h2><br /><br />
<?php
	while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
		echo '<a href="desarrollos-mod.php?num='.$fila["id_desarrollos"].'"><div class="cuadros">'."\n";
		echo '<strong>CLIENTE:</strong> '.$fila["cliente"].' <br>'."\n";
		echo '<strong>REFERENCIA</strong> '.$fila["descripcion"].' <br>'."\n";
		echo '<strong>LUGAR:</strong> '.$fila["lugar"].'.'."\n";
		echo '</div></a>'."\n";
	}
?>
		<br><br><br>
		</div>
	</div>
</div>
</body>
</html>