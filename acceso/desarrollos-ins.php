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
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'3')?> </div>

	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont" style="float:none;">
			<h2>Agregar Desarrollo</h2>
			<form action="desarrollos-insd.php" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<label> Cliente:<br />
					<input name="cliente" type="text" required="required" id="cliente"  size="70" maxlength="140" /><br /><br />
				</label>
				<label> Lugar: <br>
					<input name="lugar" type="text" required="required" id="lugar" size="50" />
				</label><br /><br />
				<label> TIPO:
					REFERENCIA <input type="radio" name="tipo" value="1" checked = "checked" required> 
					PROYECTO <input type="radio" name="tipo" value="2" required>
				</label><br /><br />
				<label>Descripción: <br>
					<textarea name="descripcion" id="descripcion" required="required" cols="50" rows="10"></textarea>
				</label><br /><br />
				<input type="submit" name="publicar" value="Agregar" />
			</form><br /><br />
		</div>
	</div>
</div>
</body>
</html>