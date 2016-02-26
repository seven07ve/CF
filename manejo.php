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
    <title>MANEJO DE SOFTWARE C&amp;F Engineering</title>
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
<div id="container">
    <div id="back_to_camera">
      <!-- Static navbar -->
    <?php
        $manejo=active;
        include("php/menu.php");
    ?>
    </div>
    <!-- #back_to_camera -->
    <div class="sections">
        <div class="section section-1 blanco bg-1">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-2 col-lg-8">
                    <h3>MANEJO DE SOFTWARE</h3>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-grd">
                            El personal de <strong>C&amp;F ENGINEERING</strong> tiene experiencia en el manejo de los siguientes Software de Ingeniería, Control y Gerencia:  
                            <br><br>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-11 col-sm-11 col-md-offset-1 col-md-11 text-justify text-grd">
                            <img class="img-responsive" src="imagenes/software.png"
                                  style="margin:0 auto; border-radius:8px; box-shadow: #555 4px 4px 8px;" alt="SECTORES" title="SECTORES">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section section-7 hidden-xs visible-sm visible-md visible-lg"> <?php include("php/footer.php"); ?> </div>
    </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!--<script src="./bootstrap/jquery.min.js"></script>-->
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="./bootstrap/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="./bootstrap/ie10-viewport-bug-workaround.js"></script>
    <!--SCROLL SCRIPT-->
        <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/PageScroll.js"></script>
    <script type="text/javascript">
    //插件初始化
    $("#container").PageScroll({
        //html结构
        selectors : {
            sections : ".sections",
            section : ".section",
            insection : ".insection",
            page : ".pages",
            active : ".active",
            controlPrev : ".control-prev",
            controlNext : ".control-next"
        },
        //页面开始的索引值,默认为0,从0开始记数
        index : 0,
        //动画效果，5种：默认为ease,linear,ease-in,ease-out,ease-in-out
        easing : "ease",
        //动画时间，单位毫秒
        duration : 500,
        //是否循环播放
        loop : false,
        //是否进行分页处理
        pagination : true,
        //是否触发键盘事件
        keyboard :true,
        //滚动方式，默认竖屏滚动，横屏滚动为horizontal
        direction : "vertical",
        //动画执行后执行的回调函数
        callback : ""
    });
    //$("#container").PageScroll("init");
    </script>
</body>
</html>
