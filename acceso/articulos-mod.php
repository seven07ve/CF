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
	//Trae todos los datos de la  tabla articulos
	$id_articulos = $_GET["num"];
	include("bd/articulos-select.php");
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
			<h2>Modificar Artículos</h2>
			<form action="articulos-modf.php" method="post" enctype="multipart/form-data" name="form1" id="form1" style="margin-left:0; width:900px;">
				<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
				<input type="hidden" name="id_articulos" value="<?php echo $id_articulos ?>" />
				<label> Titulo<br />
					<input name="titulo" type="text" required="required" id="titulo" size="100" maxlength="140" value="<?php echo $titulo ?>" /><br /><br />
				</label>
				<label> Autor:<br />
					<input name="autor" type="text" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
				<lablel>PDF: Actual ->
					<a href="../pdf/articulos/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br>
					<input type="file" name="pdf" id="pdf">
					<br><br>
				</lablel>
				<label>Palabras Clave: <br>
					<textarea name="palabra_clave" id="palabra_clave" cols="50" rows="10"><?php echo $palabras; ?></textarea>
				</label><br />
				<label> Fecha<br /> Día:
					<input name="dia" type="text" required="required" id="dia" value="<?php echo $dia ?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" required="required" id="mes" value="<?php echo $mes ?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" required="required" id="ano" value="<?php echo $ano ?>" size="4" maxlength="4" /><br /><br />
				</label><br />
				<input type="submit" name="publicar" value="Guardar" />
			</form><br /><br />
		</div>
	</div>
</div>
</body>
</html>