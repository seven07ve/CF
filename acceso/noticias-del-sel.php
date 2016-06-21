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
	<script type="text/javascript">
		function MM_jumpMenu(targ,selObj,restore){
			eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
			if (restore) selObj.selectedIndex=0;
		}
	</script>
	<title>&Aacute;rea Administrativa</title>
</head>
<body>
<div align="center">
<?php
	//busqueda el titulo y el id de la noticia ya sea que den el ano o el mes o ambos por post
	include("bd/noticia-select-list.php");
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
			<h2>Eliminar Noticias</h2><br /><br />
			<form id="form1" name="form1" method="post" action="">
				Seleccione Fecha<br />
				<label>Mes: 
					<input name="mes" type="text" id="mes" size="2" maxlength="2" onblur="checkfecha(this.value,this.id)" value="<?php echo date("m")?>" />
				</label>
				<label>Año: 
					<input name="ano" type="text" id="ano" size="4" maxlength="4" onblur="checkfecha(this.value,this.id)" value="<?php echo date("Y")?>" />
				</label><br />
				<input type="submit" name="publicar" value="Select" />
			</form><br /><br />
			<form id="form2" name="form2" method="post" action="">
				<select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
					<option selected>Seleccione</option>
<?php 
	while ($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
		echo '<option value="noticias-del.php?num='.$fila["id_noticia"].'">'.$fila["titulo"].'</option>"';
	}
?>                      
				</select>
			</form><br><br><br>
		</div>
	</div>
</div>
</body>
</html>