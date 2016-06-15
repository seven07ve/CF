<?php
$nombre = $_REQUEST["nombre"];
$tel = $_REQUEST["tel"];
$email = $_REQUEST["email"];
$asunto = $_REQUEST["asunto"];
$consulta = $_REQUEST["consulta"];
//echo $mensaje = $nombre.' '.$tel.' '.$email.' '.$asunto.' '.$consulta;

$para = 'info@cyf-eng.com';

$cuerpo = '<div style="width:90%;min-height:auto;background-color:rgba(231,227,227,1.00);padding:5%"><div style="font-family:\'Open Sans\',Arial;font-size:24px;font-weight:bold;color:#294A99;width:100%;min-height:100px"><img src="http://cyf-eng.com/imagenes/logo.jpg" style="float:left"><div style="float:left;width:60%;padding:2% 5%;text-align:center">C&amp;F Engineering. Solicitud de Información</div></div><br clear="all">
	<div style="width:100%;min-height:auto;border:dashed 1px #6c6c6c;padding:1% 2%">
	<p>Hay una solicitud de información de:  <strong>'.$nombre.'</strong>	</p>
	<p>Correo Electronico: '.$email.'</p>
	<p>Teléfono: '.$tel.'</p>
	<p>Asunto: '.$asunto.'</p>
	<p>Mensaje: '.$consulta.'</p></div></div>';
		//para el envío en formato HTML
		$headers  = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
		$headers .= "From: Contacto-cyf-eng <no_contestar@cyf-eng.com>\r\n";

		mail($para,$asunto,$cuerpo,$headers);
echo $nombre;
return;
?>
