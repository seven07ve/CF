<?php
	session_start();
	$_SESSION['user_cuenta'];
	// echo "xxxx".$_SESSION['user_cuenta'];
	$_SESSION['pasword_cuenta'];
	include("php/acceso.sev.php");
	$validar = validar_usuario($_SESSION['user_cuenta'],$_SESSION['pasword_cuenta']);
	if(!$_SESSION['user_cuenta'] or !$_SESSION['pasword_cuenta']){
		echo '<SCRIPT LANGUAGE="javascript">location.href = "http://www.google.co.ve/";</SCRIPT>'; 
	}
	include("php/dbconect.php");
	include("php/menu-admin.sev.php");
	date_default_timezone_set('America/Bogota');
?>
