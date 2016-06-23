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
	$id_desarrollos = $_POST["id_desarrollos"];
	//Actualiza la desarrollos
	include("bd/desarrollos-actualiza.php");
	//Trae todos los datos de la  tabla desarrollos
	include("bd/desarrollos-select.php");
	?>
	<div class="encabezado">
		<img class="logo" src="../imagenes/logo.jpg">&Aacute;rea Administrativa
	</div>
	<!--<div class="nomb-user">Jhean account</div>-->
	<div class="menu-prim"> <?php echo menu_sup($validar) ?> </div>
	<div class="menu-sec"> <?php echo menu_sec($validar,'3')?> </div>

	<!--   CONTENIDO   -->
	<div class="contenedor">
		<div class="cont-inf-mont" style="float:none;">
			<h2>Desarrollo Modificado</h2>
			<form action="" method="post" name="form1" id="form1" style="margin-left:0; width:900px;">
				<label> Cliente:<br />
					<input name="cliente" type="text" id="cliente"  size="70" maxlength="140" disabled="disabled" value="<?php echo $cliente; ?>"/><br /><br />
				</label>
				<label> Lugar: <br>
					<input name="lugar" type="text" id="lugar" size="50" disabled="disabled" value="<?php echo $lugar ?>" />
				</label><br /><br />
<?php
	if ($tipo == 1){
		$ref = " checked";
	}
	elseif ($tipo == 2){
		$proy = " checked";
	}
?>
				<label> TIPO:
					REFERENCIA <input type="radio" name="tipo" value="1" disabled="disabled" <?php echo $ref ?>> 
					PROYECTO <input type="radio" name="tipo" value="2" disabled="disabled" <?php echo $proy ?>>
				</label><br /><br />
				<label>Descripción: <br>
					<textarea name="descripcion" id="descripcion" cols="50" rows="10" disabled="disabled"><?php echo $descripcion ?></textarea>
				</label><br /><br />
				<a href="desarrollos-mod.php?num=<?php echo $id_desarrollos; ?>" style="color:#FFFFFF; text-decoration:none;" ><h2>Modificar</h2></a><br />
			</form><br /><br />
		</div>
	</div>
</div>
</body>
</html>