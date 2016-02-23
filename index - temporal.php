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
    <!--	fuente RALEWAY-->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,800' rel='stylesheet' type='text/css'>
	<!--fuente BITTER-->
	<link href='https://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="css/stylehome.css">
	<link rel="stylesheet" type="text/css" href="css/camera.css">
	    <!-- Bootstrap core CSS -->
    <link href="./bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="./bootstrap/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="./bootstrap/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="./bootstrap/ie-emulation-modes-warning.js"></script>
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
      <!-- Static navbar -->
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href=""><img src="imagenes/logo.jpg"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
<!--
            <ul class="nav navbar-nav">
              <li class="active"><a href="https://getbootstrap.com/examples/navbar/#">Home</a></li>
              <li><a href="https://getbootstrap.com/examples/navbar/#">About</a></li>
              <li><a href="https://getbootstrap.com/examples/navbar/#">Contact</a></li>
            </ul>
-->
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown"  id="bmsj">
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">NOSOTROS <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SERVICIOS <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SECTORES <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ESTRATEGIA <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">EXPERIENCIA <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">MANEJO SOFTWARE <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADIESTRAMIENTO <span class="caret"></span></a>
              </li>
              <li class="dropdown" >
                <a href="https://getbootstrap.com/examples/navbar/#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CONTÁCTENOS <span class="caret"></span></a>
              </li>
<!--
              <li><a href="">Static top</a></li>
              <li class="active"><a href="">Fixed top</a></li>
-->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>

	</div>
	<!-- #back_to_camera -->
  <div class="row">
    <div class="col-md-3"></div>
    <div id="msj" style="background-color: rgba(0,0,0,.7); color: #FFF; height:30vh; line-height: 100px; font-size: 24px; font-family: 'Raleway', sans-serif; z-index: 1; margin-top: 10%; display:none;" class="col-md-6 text-center">Actualmente estamos presentando inconvenientes técnicos con el servicio. <br> Pronto estaremos de regreso.</div>
  </div>
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
	
	<!-- .fluid_container -->
	</div>

	<footer>
	<div class="row">
        <div class="col-md-2 text-left slogan">
		<img src="imagenes/logo.jpg"><br><br>
		&ldquo;Creamos Soluciones... <br>
		Su proyecto es <br> nuestro compromiso&rdquo;<br>
		<span class="copy">Derechos Reservados &copy; 2016</span>
        </div>
	    <div class="col-md-2 text-center">
            <div class="tit-secc">NOSOTROS</div>
            QUIENES SOMOS?<br>
            QUE OFRECEMOS?<br>
            MISION VISION VALORES<br>
            POR QUE NOSOTROS?<br>
            ESQUEMA ORGANIZACIONAL<br>
            DESCARGA<br>
	    </div>
	    <div class="col-md-2 text-center">
	        <div class="tit-secc">SERVICIOS</div>
            LÍNEAS DE SERVICIO<br>
            EJECUCIÓN DE INGENIERÍAS<br>
            MADURACIÓN DE PROYECTOS<br>
            ESTUDIOS ESPECIALES<br>
            DESARROLLOS DE MODELOS 3D <br>
            PRE-COMMISSIONING COMMISSIONING Y ARRANQUE
	    </div>
	    <div class="col-md-2 text-center">
	        <div class="tit-secc">EXPERIENCIA</div>
                NUESTRO PERSONAL<br>
                DIRECTORES C&amp;F ENG<br>
                NUESTROS CLIENTES<br>
                HECHO EN CASA<br>
	    </div>
	    <div class="col-md-2 text-center">
	        <div class="tit-secc">SECTORES</div><br>
	        <div class="tit-secc">ESTRATEGIA</div>	        
	    </div>
	    <div class="col-md-2 text-center">
	        <div class="tit-secc">MANEJO SOFTWARE</div><br>
	        <div class="tit-secc">ADIESTRAMIENTO</div><br>
	        <div class="tit-secc">CONTÁCTENOS</div>	  
	    </div>
	</div>

	</footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="./bootstrap/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
    <script>
$( "body" ).click(function() {
  $( "#msj" ).fadeIn( "slow" );
  $( "#msj" ).delay( 2800 ).fadeOut( "slow" );
});
  </script>
</body>
</html>