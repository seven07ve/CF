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
	//Trae todos los datos de la  tabla noticias
	$id_noticia = $_GET["num"];
	include("bd/noticia-select.php");
?>
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'8')?> </div>
	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont" style="float:none;">
			<h2>Esta Noticia será ELIMINADA permanentemente</h2>
			<form action="news-insd.php" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<label> Titulo<br />
					<input name="titulo" type="text" disabled="disabled" required="required" id="titulo" onblur="vacio(this.value)" onkeyup="longitud(this.value, 140)" value="<?php echo $titulo ?>" size="100" maxlength="140" /><br /><br />
				</label>
				<label> Item:
					<input name="item" type="text" disabled="disabled" value="<?php echo $item ?>"><br><br>
				</label>
				<lablel>PDF: Actual ->
					<a href="../pdf/boletines/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br><br>
				</lablel>
				<label> Fecha<br /> Día: 
					<input name="dia" type="text" disabled="disabled" required="required" id="dia" onblur="checkfecha(this.value,this.id)" value="<?php echo $dia ?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" disabled="disabled" required="required" id="mes" onblur="checkfecha(this.value,this.id)" value="<?php echo $mes ?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" disabled="disabled" required="required" id="ano" onblur="checkfecha(this.value,this.id)" value="<?php echo $ano ?>" size="4" maxlength="4" /><br /><br />
				</label>
				<label>
					<textarea name="elm1" disabled="disabled" id="elm1"><?php echo $contenido ?></textarea>
				</label><br />
				<label> Por<br />
					<input name="autor" type="text" disabled="disabled" required="required" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
			</form>
			<form id="form1" name="form1" method="post" action="noticias-delt.php">
				<input type="hidden" name="id_noticia" id="textfield" value="<?php echo $id_noticia; ?>" /><br />
				<input type="submit" name="button" id="button" value="Eliminar" />
			</form><br /><br />
		</div>
	</div>
</div>
</body>
</html>