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
	$id_articulos = $_POST["id_articulos"];
	//Actualiza la articulos
	include("bd/articulos-actualiza.php");
	//Monta el archivo PDF y guarda el nombre del archivo en la tabla articulos de la BD
	include("bd/montar-pdf-articulos.php");
	//Trae todos los datos de la  tabla articulos
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
			<h2>El artículo se Modificó</h2>
			<form action="news-insd.php" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<input type="hidden" name="" />
				<label> Titulo<br />
					<input name="titulo" type="text" disabled="disabled" id="titulo" value="<?php echo $titulo ?>" size="100" maxlength="140" /><br /><br />
				</label>
				<label> Autor:<br />
					<input name="autor" type="text" disabled="disabled" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
				<lablel>PDF: <?php echo $aviso; ?>
					<a href="../pdf/articulos/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br><br>
				</lablel>
				<label>Palabras Clave: <br>
					<textarea name="palabra_clave" id="palabra_clave" disabled="disabled" cols="50" rows="10"><?php echo $palabras; ?></textarea>
				</label><br />
				<label> Fecha<br /> Día:
					<input name="dia" type="text" disabled="disabled" required="required" id="dia" onblur="checkfecha(this.value,this.id)" value="<?php echo $dia ?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" disabled="disabled" required="required" id="mes" onblur="checkfecha(this.value,this.id)" value="<?php echo $mes ?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" disabled="disabled" required="required" id="ano" onblur="checkfecha(this.value,this.id)" value="<?php echo $ano ?>" size="4" maxlength="4" />
				</label><br /><br />
				<a href="articulos-mod.php?num=<?php echo $id_articulos; ?>" style="color:#FFFFFF; text-decoration:none;" ><h2>Modificar</h2></a><br /><br>
			</form><br /><br />
		</div><br><br>
		<br>
	</div>
</div>
</body>
</html>