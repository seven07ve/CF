<?php 
include("../php/dbconect.php");

//busqueda de los datos de la noticia
$ssql=sprintf("SELECT * FROM noticias WHERE id_noticia='".$_GET["news"]."'");
//ejecuta la sentencia sql
$resultado = $mysqli->query($ssql);
$resultado2 =  $mysqli->query($ssql);

//busqueda de la ultima noticia
$row_meta = $resultado2->fetch_array(MYSQLI_ASSOC);
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
	<title><?php echo $row_meta["titulo"]; ?> C&amp;F Engineering</title>
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />
        <!--	fuente RALEWAY-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
        <!--fuente BITTER-->
    <link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/camera.css">
        <!--    PAGE SCROLL-->
	<link rel="stylesheet" href="../css/pagescroll.css">
        <!-- Bootstrap core CSS -->
    <link href="../bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="../bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../bootstrap/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../bootstrap/ie-emulation-modes-warning.js"></script>
    <script type='text/javascript' src='../js/jquery.min.js'></script>
    <script type='text/javascript' src='../js/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='../js/jquery.easing.1.3.js'></script>
</head>
<body>
<?php 
$niveles = "../";
$experiencia=active; include("../php/menu.php"); 
?>
<section class="cuadros-conten bg-1">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10">
			<h3><a href="index.php" style="color: #1d6dbc; text-decoration:none;">NOTICIAS</a></h3>
            <div class="row">
                <div class="col-xs-11 col-sm-11 col-md-12 text-justify text-grd">
					<?php 
					while($fila = $resultado->fetch_array(MYSQLI_ASSOC)){
						echo '<div class="seccion-anuncio">'."\n";
						echo '<h2 style="color:#132C65">'.$fila["titulo"].'</h2>'."\n";
						echo '<div style="font-size:14px; text-transform:capitalize;">'.$fila["mes"].'/'.$fila["dia"].'/'.$fila["ano"].'</div>'."\n";
						echo'<div class="anuncio-cuerpo">'.$fila["contenido"].'</div>'."\n";
						echo '</div>'."\n";
					}
					?>    
<br clear="all">
                </div>
            </div>
        </div>
    </div>
    <br clear="all">
</section>
<section class="section section-9 hidden-xs visible-sm visible-md visible-lg"> <?php include("../php/footer.php"); ?>
</section>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!--<script src="./bootstrap/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
    <!--SCROLL SCRIPT-->
    <script src="js/jquery-1.11.3.min.js"></script>
</body>
</html>
