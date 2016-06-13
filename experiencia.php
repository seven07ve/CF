<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <meta charset="iso-8859-1"> -->
    <meta charset="utf-8" />
    <meta name="Title" content="C&F Engineering">
    <meta name="description" content="Empresa de Consultoría especializada en la creación de Soluciones integrales para la Industria Petrolera, Gasífera, Petroquímica, Energética y de Servicios, con prestación de asistencia técnica durante las etapas de diseño de Proyecto y Arranque de instalaciones. ">
    <meta name="keywords" content="Empresa, Consultoría, creación, Soluciones, Soluciones integrales, Industria, Petrolero, Gasífero, Petroquímico, Energético, Servicios, asistencia técnica,  diseño, proyecto, Arranque, Arranque de instalaciones, instalaciones" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EXPERIENCIA C&amp;F Engineering</title>
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

</head>
<body>
    <div id="main" class="main">
    <section id="nuestro" class="section section-4 bg-1">
            <?php $experiencia=active; include("php/menu.php"); ?>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-10">
                <h3>EXPERIENCIA DE NUESTRO PERSONAL</h3>
                <div class="row">
                    <div class="col-xs-11 col-sm-11 col-md-12 text-justify text-grd">
                        La experiencia del Talento Humano de C&amp;F ENGINEERING ha sido
                        primordialmente en Venezuela, Colombia y México, sin embargo, su personal
                        también ha desarrollado proyectos en USA, Canadá, Ecuador, Bolivia y Argentina,
                        entre otras localidades.
                        <br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-11 col-sm-11 col-md-5 text-justify text-grd">
                            <div class="tex-lat">
                                <h5>Conozca la experiencia del personal que integra C&F ENGINEERING</h5>
                                <h6><a href="pdf/Flexibilidad y An%C3%A1lisis de Esfuerzos.pdf" target="_blank">Flexibilidad y Análisis de Esfuerzos.pdf</a></h6>
                                <h6><a href="pdf/Evaluaciones%20Hidrodin%C3%A1micas.pdf" target="_blank">Evaluaciones Hidrodinámicas.pdf</a></h6>
                                <h6><a href="pdf/Gerencia%20de%20Proyectos.pdf" target="_blank">Gerencia de Proyectos.pdf</a></h6>
                                <h6><a href="pdf/Desarrollos%20de%20Ingenier%C3%ADa.pdf" target="_blank">Desarrollos de Ingeniería.pdf</a></h6>
                            </div>
                    </div>
                    <div class="col-xs-11 col-sm-11 col-md-7 text-justify text-grd">
                        <img class="img-responsive" src="imagenes/mapa.png"
                             style="float:left; margin:0 auto; border-radius:8px;" alt="EXPERIENCIA" title="EXPERIENCIA">
                    </div>
                </div>
            </div>
        </div>
        </section>
    <section id="clientes" class="section section-4 bg-1">
        <?php $experiencia=active; include("php/menu.php"); ?>
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-2 col-lg-8">
                <h3>NUESTROS CLIENTES</h3>
                <div class="row">
                    <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-grd">
                        <img class="img-responsive" src="imagenes/clientes.png"
                              style="margin: 0 auto; border-radius:8px;" alt="CLIENTES" title="CLIENTES">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-5 hidden-xs visible-sm visible-md visible-lg"> <?php include("php/footer.php"); ?> </section>
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
    if (divId[1] === "directores"){
        var seg_val = document.getElementById('directores2');
        var segundo = document.getElementById('main').getElementsByTagName('section')[1];
        document.getElementById('main').insertBefore(seg_val,segundo);
        var terc_val = document.getElementById('directores3');
        var tercero = document.getElementById('main').getElementsByTagName('section')[2];
        document.getElementById('main').insertBefore(terc_val,tercero);
    }
</script>
</body>
</html>
