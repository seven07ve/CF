<?php 
include("php/dbconect.php");

//TOTAL DE IMG POR PAGINA
$tamano_pagina = 10;
//examino la página a mostrar y el inicio del registro a mostrar
$pagina = $_GET["pagina"];
if (!$pagina) {
	$inicio = 0;
	$pagina=1;
}
else {
	$inicio = ($pagina - 1) * $tamano_pagina;
}
//$ssql_cont=sprintf("SELECT * FROM articulos");
//ejecuta la sentencia sql
//$resultado_cont=$mysqli->query($ssql_cont);
//$resultado_cont->store_result();
$consulta = "SELECT * FROM articulos";
if ($sentencia = $mysqli->prepare($consulta)) {
	/* ejecutar la consulta */
	$sentencia->execute();
	/* almacenar el resultado */
	$sentencia->store_result();
}

//----------------------------------------PAGINACION---------------------------------------------------------
$num_total_registros = $sentencia->num_rows;
//$num_total_registros = mysql_num_rows($resultado_cont);
//REDONDEO HACIA ARRIBA DEL TOTAL DE PAGINAS DEACUERDO AL TOTAL DE REGISTROS
$total_paginas = ceil($num_total_registros / $tamano_pagina);
//echo $num_total_registros;

//busqueda de los datos de la articulos
$ssql=sprintf("SELECT * FROM articulos ORDER BY id_articulos DESC LIMIT ".$inicio.",".$tamano_pagina."");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);

//busqueda de la ultima articulos para la etiqueta meta
$ssql_meta=sprintf("SELECT * FROM articulos ORDER BY id_articulos DESC LIMIT 1");
//ejecuta la sentencia sql
$res_meta = $mysqli->query($ssql_meta);
$row_meta = $res_meta->fetch_array(MYSQLI_ASSOC);
$meta = $row_meta["titulo"]." ".strip_tags(substr($row_meta["contenido"],0,800));
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <meta charset="iso-8859-1"> -->
    <meta charset="utf-8" />
    <meta name="Title" content="C&F Engineering">
	<meta name="description" content="<?php echo $meta; ?>">
    <meta name="keywords" content="Empresa, Consultoría, creación, Soluciones, Soluciones integrales, Industria, Petrolero, Gasífero, Petroquímico, Energético, Servicios, asistencia técnica,  diseño, proyecto, Arranque, Arranque de instalaciones, instalaciones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ARTÍCULOS C&amp;F Engineering</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
        <!--	fuente RALEWAY-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
        <!--fuente BITTER-->
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/camera.css">
        <!--    PAGE SCROLL-->
	<link rel="stylesheet" href="css/pagescroll.css">
        <!-- Bootstrap core CSS -->
    <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="bootstrap/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="bootstrap/ie-emulation-modes-warning.js"></script>
    <script type='text/javascript' src='js/jquery.min.js'></script>
    <script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='js/jquery.easing.1.3.js'></script>
</head>
<body>
<?php 
$niveles = "";
$manejo=active; include("php/menu.php"); 
?>
	<section class="cuadros-conten bg-1 section" style="height: auto;">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10">
			<h3>ARTÍCULOS TÉCNICOS</h3>
            <div class="row">
                <div class="col-xs-11 col-sm-11 col-md-12 text-justify text-grd">
					<h4>Documentos Técnicos, artículos, publicaciones, notas de aplicación, disponibles para su lectura y descarga
					</h4><br><br>
                <div class="table-responsive text-med">
                    <table class="table table-striped">
                       <thead>
                        <tr class="text-center">
                            <td>FECHA</td>
							<td>TÍTULO</td>
							<td>AUTOR</td>
							<td>PALABRA CLAVE</td>
							<td>ARCHIVO</td>
                        </tr>
                        </thead>
                        <tbody><a href="" target="_blank"></a>
<?php
while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
	$puntos = "";
	if (strlen($fila["titulo"]) >= 50){
		$puntos = "...";
	}
	echo '<tr>'."\n";
	echo '<td class="text-center">'.$fila["mes"].'/'.$fila["dia"].'/'.$fila["ano"].'</td>'."\n";
	echo '<td class="text-center">'.$fila["titulo"].'</td>'."\n";
	echo '<td class="text-center">'.$fila["autor"].'</td>'."\n";
	echo '<td class="text-center" style="overflow:hidden;">'.$fila["palabra_clave"].'</a></td>'."\n";
	echo '<td class="text-center"><a href="pdf/boletines/'.$fila["pdf"].'" target="_blank"><img src="imagenes/pdf.png" alt="Descarga/Download"></a></td>'."\n";
	echo '</tr>'."\n";
}
?> 
                        </tbody>
                    </table>
                </div>
<!--paginacion-->
<div class="text-med" style="font-family: Arial; margin:10px 0px; text-align:center;">
<?php 
//muestro los distintos índices de las páginas, si es que hay varias páginas
if ($total_paginas > 1){
	for ($i=1;$i<=$total_paginas;$i++){
		if ($pagina == $i){
			//si muestro el índice de la página actual, no coloco enlace
			if ($i==$total_paginas){
				$sep = '';
			}
			else{
				$sep = ' - ';
			}
			echo '<span style="color:#999;">'.$pagina.'</span>'.$sep;
			//echo '<span style="color:#036;  font-family:Arial, Helvetica, sans-serif;">'.$pagina . ' </span>';
		}
		else{
			if ($i==$total_paginas){
				$sep = ' ';
			}
			else{
				$sep = ' - ';
			}
			//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa página
			echo '<a href="index.php?pagina='.$i.'&select='.$_POST["titulo"].'" style="color:#2d2d2d; text-decoration:none;">' . $i . '</a>'.$sep;
		}
	}
}

?>
					</div>
<br clear="all">
                </div>
            </div>
        </div>
    </div>
    <br clear="all">
</section>
<section class="section section-9 hidden-xs visible-sm visible-md visible-lg"> 
<?php include("php/footer.php"); ?>
</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="./bootstrap/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
    <!--SCROLL SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>
