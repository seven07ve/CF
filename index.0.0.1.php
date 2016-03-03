<!DOCTYPE html>
<html lang="es">
<head>
	<!-- <meta charset="iso-8859-1"> -->
	<meta charset="utf-8" />
	<meta name="Title" content="C&F Engineering">
    <meta name="description" content="texto unico de cada pagina 70 156 caracteres">
	<meta name="keywords" content="HTML5, CSS3, Javascript" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>C&amp;F Engineering</title>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" type="text/css" href="css/camera.css">
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<script type='text/javascript' src='js/jquery.mobile.customized.min.js'></script>
	<script type='text/javascript' src='js/jquery.easing.1.3.js'></script> 
	<script type='text/javascript' src='js/camera.min.js'></script>
	<script>
		jQuery(function(){
			
			jQuery('#camera_wrap_4').camera({
				height: 'auto',
				loader: 'none',
				time: 2500,
				transPeriod: 750,
				navigation: false,
				pagination: false,
				playPause: false,
				pauseOnClick: false,
				thumbnails: false,
				hover: false,
				opacityOnGrid: false,
				imagePath: '../images/'
			});

		});
	</script>
</head>
<body>
	<div class="content">
	<div id="back_to_camera">
		<img src="imagenes/logo.jpg">
		
		
	</div>
	<!-- #back_to_camera -->

	<div class="fluid_container">
		<div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
			<div data-src="images/slides/refineria1.jpg"></div>
            <div data-src="images/slides/refineria2.jpg"></div>
			<div data-src="images/slides/refineria3.jpg"></div>
			<div data-src="images/slides/refineria4.jpg"></div>
			<div data-src="images/slides/refineria5.jpg"></div>
		</div>
		<!-- #camera_wrap -->
	</div>
	<br clear="all">
	<!-- .fluid_container -->
	</div>
	<footer>
		Derechos Reservados &copy; 2014
	</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="./bootstrap/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
</body>
</html>