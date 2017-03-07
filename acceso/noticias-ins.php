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
	//busqueda de los nombres y apellidos del usuario
	include("bd/nombres-usuario.php");
?>
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'8')?> </div>

	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont">
			<h2>Agregar Noticias</h2>
			<form action="noticias-insd.php" method="post" enctype="multipart/form-data" name="form1" id="form1" style="margin-left:0; width:900px;">
				<input type="hidden" name="MAX_FILE_SIZE" value="6000000" />
				<label> Titulo<br />
					<input name="titulo" type="text" required="required" id="titulo" onblur="vacio(this.value)" onkeyup="longitud(this.value, 140)" size="100" maxlength="140" /><br /><br />
				</label>
				<label> Item: CF-BT-
					<input name="item" type="text" required="required" placeholder="XXX-YYY"><br><br>
				</label>
				<lablel>PDF: 
					<input type="file" name="pdf" id="pdf"><br><br>
				</lablel>
				<label> Fecha<br />	Día:
					<input name="dia" type="text" required="required" id="dia" onblur="checkfecha(this.value,this.id)" value="<?php echo date("d")?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" required="required" id="mes" onblur="checkfecha(this.value,this.id)" value="<?php echo date("m")?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" required="required" id="ano" onblur="checkfecha(this.value,this.id)" value="<?php echo date("Y")?>" size="4" maxlength="4" /><br /><br />
				</label>
				<label>
					<textarea name="elm1" id="elm1"></textarea>
				</label><br />
				<label> Por<br />
					<input name="autor" type="text" required="required" id="autor" value="<?php echo $apellidos.' '.$nombres; ?>" size="60" maxlength="100" />
				</label><br /><br />
				<input type="submit" name="publicar" value="Agregar" onmouseup="vacio(document.form1.titulo.value)" />
			</form><br /><br />
		</div>
		<!--IMAGENES-->
		<div class="mont-img">
			<form action="ins_img.php" method="post" enctype="multipart/form-data" name="form2" id="form2" style="margin-bottom:30px;">
				<input type="hidden" name="MAX_FILE_SIZE"  value="6000000"/>
				<label for="fileField2">Agregar Imagen </label>
				<input type="hidden" name="pagina" value="noticias-ins.php" />
				<input type="file" name="img" id="fileField2" style="margin:0 0 15px" />
				<input type="submit" name="submit" id="submit" value="Agregar" />
			</form>
<?php
	//pagina a la que va a volver luego de borrar la imagen
	$pagina = "noticias-ins.php";
	//Busca todas la imagenes que se han montado
	include("php/lista-imagenes.php");
?>
		</div>
	</div>
</div>
</body>
</html>