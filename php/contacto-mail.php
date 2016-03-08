<?php
$nombre = $_REQUEST["nombre"];
$tel = $_REQUEST["tel"];
$email = $_REQUEST["email"];
$asunto = $_REQUEST["asunto"];
$consulta = $_REQUEST["consulta"];
echo $mensaje = $nombre.' '.$tel.' '.$email.' '.$asunto.' '.$consulta;
return;
?>
