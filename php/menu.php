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
            <a class="navbar-brand" href="'.$niveles.'"><img src="'.$niveles.'imagenes/logo.jpg"></a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li>
                <a href="'.$niveles.'index.php">HOME </a>
              </li>
              <li class="dropdown '.$nosotros.'">
                <a href="'.$niveles.'nosotros.php">NOSOTROS</a>
                    <ul class="dropdown-menu">
						<li><a href="'.$niveles.'nosotros.php#quienes">QUIENES SOMOS?</a></li>
						<li><a href="'.$niveles.'nosotros.php#ofrecemos">QUE OFRECEMOS?</a></li>
						<li><a href="'.$niveles.'nosotros.php#mision">MISION VISION</a></li>
						<li><a href="'.$niveles.'nosotros.php#valores">VALORES</a></li>
						<li><a href="'.$niveles.'nosotros.php#por-que">POR QUE NOSOTROS</a></li>
						<li><a href="'.$niveles.'nosotros.php#esquema">ESQUEMA ORGANIZACIONAL</a></li>
                	</ul>
              </li>
              <li class="dropdown '.$servicios.'">
                <a href="'.$niveles.'servicios.php">SERVICIOS</a>
                    <ul class="dropdown-menu">
						<li><a href="'.$niveles.'servicios.php#lineas">LÍNEAS DE SERVICIO</a></li>
						<li><a href="'.$niveles.'servicios.php#ejecucion">EJECUCIÓN DE INGENIERÍAS </a></li>
						<li><a href="'.$niveles.'servicios.php#maduracion">MADURACIÓN DE PROYECTOS</a></li>
						<li><a href="'.$niveles.'servicios.php#estudios">ESTUDIOS ESPECIALES</a></li>
						<li><a href="'.$niveles.'servicios.php#modelos">DESARROLLOS DE MODELOS 3D</a></li>
						<li><a href="'.$niveles.'servicios.php#commissioning">PRE-COMMISSIONING/COMMISSIONING Y ARRANQUE</a></li>
					</ul>
              </li>
            <li class="dropdown '.$sectores.'">
                <a href="'.$niveles.'sectores.php">SECTORES</a>
              </li>
              <li class="dropdown '.$estrategia.'">
                <a href="'.$niveles.'estrategia.php">ESTRATEGIA</a>
                    <ul class="dropdown-menu">
						<li><a href="'.$niveles.'estrategia.php">ESTRATEGIA</a></li> 
                        <li><a href="'.$niveles.'estrategia.php#capacidad">CAPACIDAD DE EJECUCIÓN</a></li>
					</ul>
              </li>
              <li class="dropdown '.$experiencia.'">
                <a href="'.$niveles.'experiencia.php">EXPERIENCIA</a>
                    <ul class="dropdown-menu">
						<li><a href="'.$niveles.'experiencia.php">NUESTRO PERSONAL</a></li>
                        <li><a href="'.$niveles.'experiencia.php#clientes">NUESTROS CLIENTES</a></li>
                        <li><a href="'.$niveles.'casa.php">HECHO EN CASA...</a></li>
					</ul>
              </li>
              <li class="dropdown '.$manejo.'">
                <a href="'.$niveles.'manejo.php">MANEJO SOFTWARE</a>
				<ul class="dropdown-menu">
					<li><a href="'.$niveles.'manejo.php">MANEJO SOFTWARE</a></li>
					<li><a href="'.$niveles.'boletines">BOLETINES C&F</a></li>
					<li><a href="'.$niveles.'articulos.php">ARTÍCULOS TÉCNICOS</a></li>
					<li><a href="'.$niveles.'descargas.php">DESCARGAS</a></li>
				</ul>
              </li>
              <li class="dropdown '.$adiestramiento.'">
                <a href="'.$niveles.'adiestramiento.php">ADIESTRAMIENTO</a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$niveles.'adiestramiento.php#cursos">PRÓXIMOS CURSOS</a></li>
					</ul>
              </li>
              <li class="dropdown '.$contactenos.'">
                <a href="'.$niveles.'contactenos.php">CONTÁCTENOS</a>
                    <ul class="dropdown-menu">
                        <li><a href="'.$niveles.'contactenos.php#escribanos">ESCRÍBANOS</a></li>
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
