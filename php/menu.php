<?php
    echo '<div id="back_to_camera2"><nav class="navbar navbar-default">
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
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="index.php">HOME </a>
              </li>
              <li class="dropdown '.$nosotros.'">
                <a href="nosotros.php">NOSOTROS</a>
                    <ul class="dropdown-menu">
						<li><a href="nosotros.php#quienes">QUIENES SOMOS?</a></li>
						<li><a href="nosotros.php#ofrecemos">QUE OFRECEMOS?</a></li>
						<li><a href="nosotros.php#mision">MISION VISION</a></li>
						<li><a href="nosotros.php#valores">VALORES</a></li>
						<li><a href="nosotros.php#por-que">POR QUE NOSOTROS</a></li>
						<li><a href="nosotros.php#esquema">ESQUEMA ORGANIZACIONAL</a></li>
                	</ul>
              </li>
              <li class="dropdown '.$servicios.'">
                <a href="servicios.php">SERVICIOS</a>
                    <ul class="dropdown-menu">
						<li><a href="servicios.php#lineas">LÍNEAS DE SERVICIO</a></li>
						<li><a href="servicios.php#ejecucion">EJECUCIÓN DE INGENIERÍAS </a></li>
						<li><a href="servicios.php#maduracion">MADURACIÓN DE PROYECTOS</a></li>
						<li><a href="servicios.php#estudios">ESTUDIOS ESPECIALES</a></li>
						<li><a href="servicios.php#modelos">DESARROLLOS DE MODELOS 3D</a></li>
						<li><a href="servicios.php#commissioning">PRE-COMMISSIONING/COMMISSIONING Y ARRANQUE</a></li>
					</ul>
              </li>
            <li class="dropdown '.$sectores.'">
                <a href="sectores.php">SECTORES</a>
              </li>
              <li class="dropdown '.$estrategia.'">
                <a href="estrategia.php">ESTRATEGIA</a>
                    <ul class="dropdown-menu">
						<li><a href="estrategia.php#capacidad">CAPACIDAD DE EJECUCIÓN</a></li>
					</ul>
              </li>
              <li class="dropdown '.$experiencia.'">
                <a href="experiencia.php">EXPERIENCIA</a>
                    <ul class="dropdown-menu">
						<li><a href="personal.php">NUESTRO PERSONAL</a></li>
                        <li><a href="experiencia.php#directores">DIRECTORES C&F ENG</a></li>
                        <li><a href="experiencia.php#clientes">NUESTROS CLIENTES</a></li>
                        <li><a href="casa.php">HECHO EN CASA...</a></li>
					</ul>
              </li>
              <li class="dropdown '.$manejo.'">
                <a href="manejo.php">MANEJO SOFTWARE</a>
              </li>
              <li class="dropdown '.$adiestramiento.'">
                <a href="adiestramiento.php">ADIESTRAMIENTO</a>
                    <ul class="dropdown-menu">
                        <li><a href="adiestramiento.php#cursos">PRÓXIMOS CURSOS</a></li>
					</ul>
              </li>
              <li class="dropdown '.$contactenos.'">
                <a href="contactenos.php">CONTÁCTENOS</a>
                    <ul class="dropdown-menu">
                        <li><a href="contactenos.php#escribanos">ESCRÍBANOS</a></li>
					</ul>
              </li>
<!--
              <li><a href="">Static top</a></li>
              <li class="active"><a href="">Fixed top</a></li>
-->
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav></div>';
?>
