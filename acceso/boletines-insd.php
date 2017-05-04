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
	//Guarda la boletin en la BD
	include("bd/boletin-guarda.php");
	//Monta el archivo PDF y guarda el nombre del archivo en la tabla boletins de la BD
	include("bd/montar-pdf-boletin.php");
	//Trae todos los datos de la  tabla boletins
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
		<div class="cont-inf-mont" style="float:none;">
			<h2> Boletín Agregado</h2>
			<form action="news-insd.php" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<input type="hidden" name="" />
				<label> Titulo<br />
					<input name="titulo" type="text" disabled="disabled" id="titulo" value="<?php echo $titulo ?>" size="100" maxlength="140" /><br /><br />
				</label>
				<label> Item:
					<input name="item" type="text" disabled="disabled" value="<?php echo $item ?>"><br><br>
				</label>
				<lablel>PDF: <?php echo $aviso; ?>
					<a href="../pdf/boletines/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br><br>
				</lablel>
				<label> Fecha<br /> Día:
					<input name="dia" type="text" disabled="disabled" id="dia" onblur="checkfecha(this.value,this.id)" value="<?php echo $dia ?>" size="2" maxlength="2" />
				</label>
				<label> Mes:
					<input name="mes" type="text" disabled="disabled" id="mes" onblur="checkfecha(this.value,this.id)" value="<?php echo $mes ?>" size="2" maxlength="2" />
				</label>
				<label> Año:
					<input name="ano" type="text" disabled="disabled" id="ano" onblur="checkfecha(this.value,this.id)" value="<?php echo $ano ?>" size="4" maxlength="4" />
				</label><br /><br />
				<a href="boletines-mod.php?num=<?php echo $id_noticia; ?>" style="color:#FFFFFF; text-decoration:none;" ><h2>Modificar</h2></a><br />
				<label> Por<br />
					<input name="autor" type="text" disabled="disabled" required="required" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
			</form><br /><br />
		</div><br><br>
	</div>
</div>
</body>
</html>