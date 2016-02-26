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

</head>
<body>
<div id="container">
    <div id="back_to_camera">
      <!-- Static navbar -->
<?php
$contactenos=active;
include("php/menu.php");
?>
    </div>
    <!-- #back_to_camera -->
    <div class="sections">
        <div class="section section-1 blanco bg-1">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 col-md-10 col-md-offset-1 col-lg-offset-1 col-lg-10">
                    <h3><div style="width:auto;">CONTACTOS</div></h3>
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
        </div>
        <div class="section section-8 hidden-xs visible-sm visible-md visible-lg"> <?php include("php/footer.php"); ?> </div>
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
