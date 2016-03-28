<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<meta name="Title" content="C&F Engineering">
	<meta name="description" content="Empresa de Consultoría especializada en la creación de Soluciones integrales para la Industria Petrolera, Gasífera, Petroquímica, Energética y de Servicios, con prestación de asistencia técnica durante las etapas de diseño de Proyecto y Arranque de instalaciones. ">
	<meta name="keywords" content="Empresa, Consultoría, creación, Soluciones, Soluciones integrales, Industria, Petrolero, Gasífero, Petroquímico, Energético, Servicios, asistencia técnica,  diseño, proyecto, Arranque, Arranque de instalaciones, instalaciones" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CONTÁCTENOS C&amp;F Engineering</title>
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
	<link href="./bootstrap/bootstrap.min.css" rel="stylesheet">
	<!--Google map-->
    <link rel="import" href="bower_components/google-map/google-map.html">

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

	<!--Check del formulario-->
	<script src="js/contacto.js"></script>
    <style>
        google-map {
            height: 400px;
            box-shadow: #444 5px 5px 10px; 
        }
    </style>
</head>
<body>

	<!-- #back_to_camera -->
<div id="main" class="main">
		<section id="contactenos" class="section section-1 blanco bg-1">
		   <?php $contactenos=active; include("php/menu.php"); ?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10">
					<h3><div style="width:auto;">CONTÁCTENOS</div></h3>
					<div class="row">
						<div class="col-sm-6 col-md-6 text-left text-peq">
							<h4>REPRESENTANTES</h4>
                            <div style="float:left; margin-left:10px;"><strong>NATALIA CATALDO</strong><br>
							Directora Ejecutiva <br>
							ncataldo@cyf-eng.com <br>
                                <strong>Cel:</strong> (57) 3156092494 <br><br></div>
                            <div style="float:left; margin-left:10px;"><strong>MARIBY FIGUERA</strong><br>
							Directora de Operaciones <br>
							mfiguera@cyf-eng.com <br>
                                <strong>Cel:</strong> (57) 3155235907 <br><br></div>
                            <div style="float:left; margin-left:10px;"><strong>IVAN GAMERO</strong><br>
							Director de Comisionamiento y Arranque<br>
							igamero@cyf-eng.com <br>
                                <strong>Cel:</strong> (57) 3187164299 <br></div>
                            <div style="float:left; width:100%; margin-left:10px;"><h4>SEDE</h4>
                            <strong>Centro Empresarial Cedropoint</strong><br>
                            Calle 140 No 10A-48 <br>
                            Oficinas 211 y 213 <br>
                            (571) 6094672 <br>
                                Bogotá D.C, Colombia <br></div>
                                <br clear="all">
						</div>
						<div class="col-sm-6 col-md-6 text-left text-grd">
                            <google-map latitude="4.718568" longitude="-74.034327" zoom=17>
                                <google-map-marker latitude="4.718568" longitude="-74.034327" title="C&amp;F Engineering">
                                    <h4>C&amp;F Engineering</h4>
                                        <strong>Centro Empresarial Cedropoint</strong><br>
                                        Calle 140 No 10A-48 <br>
                                        Oficinas 211 y 213 <br>
                                        (571) 6094672 <br>
                                        Bogotá D.C, Colombia <br>
                                    <p>
                                        <img src="imagenes/cc.jpg" alt="Centro Empresarial Cedropoint">
                                    </p>
                                </google-map-marker>
                            </google-map>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="escribanos" class="section section-2 blanco bg-1">
            <?php $contactenos=active; include("php/menu.php"); ?>
			<div class="row">
				<div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10">
					<h3 style="margin-bottom:0px;">ESCRÍBANOS</h3>
					<h4 style="color: #646464; text-align:center;">Si desea ponerse en contacto con nosotros, por favor escríbanos a través
					de este formulario.</h4>
					<div class="text-center"><span id="remitente"></span><span id='aviso-enviado'> Su mensaje ha sido enviado. Prontamente estaremos en contacto con usted. <img src="imagenes/mensaje.png" alt=""></span></div>
						<div class="row">
							<div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 clo-lg-8 ">
								<form id="form-contacto" class="form-contacto" name="form-contacto" method="post" action="">
									<input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido"><br>
									<span class="msj" id="msjnombre">Debe Colocar su Nombre y Apellido.</span>
									<input type="tel" id="tel" name="tel" placeholder="Teléfono">
									<input type="email" id="email" name="email" placeholder="Correo Eléctonico">
									<span class="msj" id="msjmail">Debe escribir una dirección de correo válida para poder
									contactarle.</span>
									<input type="text" id="asuntos" name="asunto" placeholder="Asunto">
									<span class="msj" id="msjasuntos">Debe colocar el Asunto.</span>
									<textarea id="mensaje" name="mensaje" cols="30" rows="6" placeholder="Mensaje"></textarea>
									<span class="msj" id="msjconsulta">Debe escribir el mensaje.</span>
									<input type="button" id="enviar" class="pull-right" name="enviar" value="Enviar">
								</form>
							</div>
						</div>
				</div>
			</div>
		</section>
		<section class="section section-3 hidden-xs visible-sm visible-md visible-lg"> <?php include("php/footer.php"); ?> </section>
</div>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!--<script src="./bootstrap/jquery.min.js"></script>-->
	<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
	<script src="./bootstrap/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
	<!--SCROLL SCRIPT-->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/rustic.js"></script>
<script>
$(document).ready(function() {
	$('.main').rustic({looping: true});
});
</script>
<script>
    var dir = window.location.href;
    var divId = dir.split('#', 2);
    var id = document.getElementById(divId[1]);
    var segundo_p = document.getElementById('main').getElementsByTagName('section')[0];
    // Y ahora lo insertamos
    document.getElementById('main').insertBefore(id,segundo_p);
</script>
</body>
</html>
