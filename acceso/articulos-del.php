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
			<h2>Esta Artículo será ELIMINADO permanentemente</h2>
			<form action="news-insd.php" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<label> Titulo<br />
					<input name="titulo" type="text" disabled="disabled" id="titulo" value="<?php echo $titulo ?>" size="100" maxlength="140" /><br /><br />
				</label>
				<label> Autor:<br />
					<input name="autor" type="text" disabled="disabled" id="autor" value="<?php echo $autor ?>" size="60" maxlength="100" />
				</label><br /><br />
				<lablel>PDF: Actual ->
					<a href="../pdf/boletines/<?php echo $pdf ?>" target="_blank" style="color:#FFF;"><?php echo $pdf ?></a><br><br>
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
					<input name="ano" type="text" disabled="disabled" required="required" id="ano" onblur="checkfecha(this.value,this.id)" value="<?php echo $ano ?>" size="4" maxlength="4" /><br /><br />
				</label><br />
			</form>
			<form id="form1" name="form1" method="post" action="articulos-delt.php">
				<input type="hidden" name="id_articulos" id="textfield" value="<?php echo $id_articulos; ?>" /><br />
				<input type="submit" name="button" id="button" value="Eliminar" />
			</form><br /><br />
		</div>
	</div>
</div>
</body>
</html>