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
    <title>ESTRATEGIA C&amp;F Engineering</title>
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
        <section id="estrategia" class="section section-1 blanco bg-1">
           <?php  $estrategia=active; include("php/menu.php"); ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-2 col-lg-8">
                    <h3>ESTRATEGIA</h3>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-grd">
                            La estrategia está diseñada para ofrecerle a nuestros Clientes significativos
                            beneficios, tanto Técnicos, que se traducen en trabajos oportunos, confiables y
                            seguros, así como Económicos, resultando un servicio costo-efectivo.
                            <br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-grd">
                            <img class="img-responsive" src="imagenes/estrategia.png"
                                  style="margin:0 auto; border-radius:8px;" alt="ESTRATEGIA" title="ESTRATEGIA">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="capacidad" class="section section-2 bg-1">
            <?php  $estrategia=active; include("php/menu.php"); ?>
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-2 col-lg-8">
                    <h3>CAPACIDAD DE EJECUCIÓN</h3><br><br><br><br><br>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-med">
                            <img class="img-responsive pull-left img-res-left" src="imagenes/ejecucion.jpg" style="border-radius:8px; box-shadow: #555 4px 4px 8px;" alt="EJECUCIÓN " title="EJECUCIÓN ">
                            <strong>C&amp;F ENGINEERING</strong> cuenta con el soporte de profesionales
                             multidisciplinarios que le otorgan una Capacidad de Ejecución adaptable a las
                             necesidades y que se puede expandir de manera flexible a través de su red de
                             profesionales y técnicos, dependiendo de los requerimientos de proyectos.
                             <br><br>
                             La participación de <strong>C&amp;F ENGINEERING</strong> está orientada a la
                             conformación de Equipos de alto desempeño, base para materializar las sinergias
                             entre las diferentes actividades, que asegure una ejecución comprometida no sólo
                             con un alto nivel técnico y óptimos tiempos de ejecución, sino siempre en línea con la
                             seguridad y calidad de los procesos, en sincronía con el ambiente y todos los
                             aspectos de HSE involucrados.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section section-7 hidden-xs visible-sm visible-md visible-lg"> <?php include("php/footer.php"); ?> </section>
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
