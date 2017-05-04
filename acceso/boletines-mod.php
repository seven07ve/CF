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
	<!-- TinyMCE -->
	<script type="text/javascript" src="../tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<?php
	//Aca esta todo el javascript de la configuracion de TinyMCE
	include("php/script-tinymce.php");
?>
	<!-- TinyMCE -->
	<title>&Aacute;rea Administrativa</title>
</head>
<body>
<div align="center">
<?php
	//Trae todos los datos de la  tabla boletins
	$id_noticia = $_GET["num"];
	include("bd/boletin-select.php");
?>
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'4')?> </div>
	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont">
			<h2>Modificar Boletín</h2>
			<form action="boletines-modf.php" method="post" enctype="multipart/form-data" name="form1" id="form1" style="margin-left:0; width:900px;">
				<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
				<input type="hidden" name="id_noticia" value="<?php echo $id_noticia ?>" />
				<label> Titulo<br />
					<input name="titulo" type="text" required="required" id="titulo" onblur="vacio(this.value)" onkeyup="longitud(this.value, 140)" size="100" maxlength="140" value="<?php echo $titulo ?>" /><br /><br />
				</label>
				<label> Item:
					<input name="item" type="text" value="<?php echo $item ?>"><br><br>
				</label>
				<lablel>PDF: Actual ->
					<a href="../pdf/boletines/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br>
					<input type="file" name="pdf" id="pdf">
					<br><br>
				</lablel>
				<label> Fecha<br /> Día:
					<input name="dia" type="text" required="required" id="dia" value="<?php echo $dia ?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" required="required" id="mes" value="<?php echo $mes ?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" required="required" id="ano" value="<?php echo $ano ?>" size="4" maxlength="4" /><br /><br />
				</label>
				<label>
					<textarea name="elm1" id="elm1"><?php echo $contenido ?></textarea>
				</label><br />
				<label> Por<br />
					<input name="autor" type="text" required="required" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
				<input type="submit" name="publicar" value="Guardar" />
			</form><br /><br />
		</div>
		<!--IMAGENES-->
		<div class="mont-img">
			<form action="ins_img.php" method="post" enctype="multipart/form-data" name="form2" id="form2" style="margin-bottom:30px;">
				<input type="hidden" name="MAX_FILE_SIZE"  value="6000000"/>
				<label for="fileField2">Agregar Imagen </label>
				<input type="hidden" name="pagina" value="boletines-mod.php?num=<?php $id_noticia ?>" />
				<input type="file" name="img" id="fileField2" style="margin:0 0 15px" />
				<input type="submit" name="submit" id="submit" value="Modificar" />
			</form>
<?php
	//pagina a la que va a volver luego de borrar la imagen
	$pagina = "boletines-mod.php?num=".$fila["id_noticia"];
	//Busca todas la imagenes que se han montado
	include("php/lista-imagenes.php");
?>
		</div>
	</div>
</div>
</body>
</html>