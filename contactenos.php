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
    <script src="js/formulario.js"></script>
</head>
<body>

    <!-- #back_to_camera -->
<div class="main">
        <section class="section section-1 blanco bg-1">
           <?php $contactenos=active; include("php/menu.php"); ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10">
                    <h3><div style="width:auto;">CONTÁCTENOS</div></h3>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 text-left text-med">
                            <h4>REPRESENTANTES</h4>
                            <strong>NATALIA CATALDO</strong><br>
                            Directora Ejecutiva <br>
                            ncataldo@cyf-eng.com <br>
                            <strong>Cel:</strong> (57) 3156092494 <br><br>
                            <strong>MARIBY FIGUERA</strong><br>
                            Directora de Operaciones <br>
                            mfiguera@cyf-eng.com <br>
                            <strong>Cel:</strong> (57) 3155235907 <br><br>
                            <strong>IVAN GAMERO</strong><br>
                            Director de Comisionamiento y Arranque<br>
                            igamero@cyf-eng.com <br>
                            <strong>Cel:</strong> (57) 3187164299 <br>
                        </div>
                        <div class="col-sm-6 col-md-6 text-left text-grd">
                            <h4>SEDE</h4>
                            <strong>Centro Empresarial Cedropoint</strong><br>
                            Calle 140 No 10A-48 <br>
                            Oficinas 211 y 213 <br>
                            (571) 6094672 <br>
                            Bogotá D.C, Colombia <br>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-2 blanco bg-1">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10">
                    <h3><div style="width:auto;">ESCRÍBANOS</div></h3>
                    <h4 style="color: #646464;">Si desea ponerse en contacto con nosotros, por favor escríbanos a través
                    de este formulario.</h4>
                        <div class="row">
                            <div class="col-xs-12 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-2 clo-lg-8 ">
                                <form id="form-contacto" class="form-contacto" name="form-contacto" method="post" action="">
                                    <input type="text" id="nombre" name="nombre" placeholder="Nombre y Apellido"><br>
                                    <span class="msj" id="msjnombre">Debe Colocar su Nombre y Apellido</span>
                                    <input type="tel" id="tel" name="tel" placeholder="Teléfono">
                                    <input type="email" id="email" name="email" placeholder="Correo Eléctonico">
                                    <span class="msj" id="msjmail">Debe escribir una dirección de correo valida para poder
                                    contactarle</span>
                                    <input type="text" id="asuntos" name="asunto" placeholder="Asunto">
                                    <span class="msj" id="msjasuntos">Debe colocar el Asunto</span>
                                    <textarea id="mensaje" name="mensaje" cols="30" rows="7" placeholder="Mensaje"></textarea>
                                    <span class="msj" id="msjconsulta">Debe escribir el mensaje.</span>
                                    <input type="button" id="enviar" class="pull-right" name="enviar" value="Enviar">
                                </form>
<!--                    <form action="" method="post" name="form-consulta" id="form-consulta">
                        <input id="email" name="email" type="text" class="form" size="50" autocomplete="off" placeholder="Correo Electrónico" />
                        <span id="msjmail"></span>
                        <textarea name="consulta" id="consulta" class="form" style="width:90%; height:60px; margin-top:5px; margin-right:7%;" placeholder="Preguntale al vendedor"></textarea>
                        <span id="msjconsulta"></span>
                        <input type="button" class="form" id="preguntar" name="preguntar" value="Preguntar" style="margin-top:5px;"/><img src="/imagenes/cargando3.gif" id="mini-cargando" class="mini-loading" /><span style="margin-left:5px;">No uses lenguaje vulgar. Por tu seguridad no ingreses datos de contacto en tu pregunta.</span>
                    </form>-->
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
</body>
</html>
