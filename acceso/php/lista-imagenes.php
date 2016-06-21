<?php
	/*
	Busca todas la imagenes que se han montado
	las lista de la mas reciente a la mas antigua
	*/
	$directorio = '../imgsweb';
	$ficheros1  = scandir($directorio);
	//ordena inversamente por nombre
	arsort($ficheros1);
	Foreach ($ficheros1 as $valor)
	{
		if ($valor == '.' or $valor == '..'){
		}
		else{
			echo '<div class="cont-img-mont"><img src="../imgsweb/'.$valor.'" style="vertical-align:middle;" alt="" width="230"/></div>';
			echo '<form action="del_img.php" method="post"id="form" style="margin-bottom:5px 0;">';
			echo '<input type="hidden" name="imagen" value="'.$valor.'" />';
			echo '<input type="hidden" name="pagina" value="'.$pagina.'" />';
			echo '<input type="submit" id="submit" value="Eliminar" /></form>';
		}
	}
?>