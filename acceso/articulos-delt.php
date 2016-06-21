<?php
include("php/start.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link href="../css/admin.css" rel="stylesheet" type="text/css" />
	<title>&Aacute;rea Administrativa</title>
</head>
<body>
<div align="center">
<?php
	$id_articulos = $_POST['id_articulos'];
	$file_borrar= '../pdf/articulos/'.$id_articulos.'.pdf';
	include("bd/articulos-eliminar.php");
?>
	<div class="encabezado">
	<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'2')?> </div>
	<!--   CONTENIDO   -->
	<div class="contenedor">
	<div class="cont-inf-mont" style="float:none;">
	<h2>El Artículo Fué ELIMINADO</h2>
	<br />
	<br />
	</div>
	</div>
</div>
</body>
</html>