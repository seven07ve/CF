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
	<title>NOSOTROS C&amp;F Engineering</title>
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
    <?php include("php/menu.php"); ?>
	</div>
	<!-- #back_to_camera -->	
	<div class="sections">
		<div class="section section-1 blanco bg-1">
		    <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <h3>the First section</h3>
                </div>
		    </div>
		</div>
		<div class="section section-2 gris-2 bg-2">
<!--			<div class="insection insection-1">-->
				<h3>the Second section-1</h3>
<!--			</div>
			<div class="insection insection-2">
				<h3>the Second section-2</h3>
			</div>
			<div class="insection insection-3">
				<h3>the Second section-3</h3>
			</div>-->
		</div>
		<div class="section section-3 gris-3 bg-3">
			<h3>the Third section</h3>
		</div>
		<div class="section section-4 gris-4 bg-1">the Fifth section</div>
		<div class="section section-5">
        <?php include("php/footer.php"); ?>
        </div>
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