<?php

function titulo($titulo = "") {
	$tit_seg = explode(" ", trim($titulo));
	$ellipsis = strlen(trim($titulo)) > 100 ? ' &#0133' : '';
	foreach ($tit_seg as $clave => $valor) {
		$long_tit = $long_tit + strlen($valor) + 1;
		if ($long_tit <= 115) {
			$new_tit_seg[] = $valor;
		}
	}
	$tit_final = implode(" ", $new_tit_seg);
	echo $tit_final.$ellipsis."\n";
}
?>