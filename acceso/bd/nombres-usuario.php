<?php
	//busqueda de los nombres y apellidos del usuario
	$query = sprintf("SELECT * FROM administrador WHERE adm_correo='".$_SESSION['user_cuenta']."' AND adm_pass='".$_SESSION['pasword_cuenta']."'");
	//ejecuta la sentencia sql
	$result = $mysqli->query($query);
	$row =$result->fetch_array(MYSQLI_ASSOC);
	$nombres=$row["adm_nombre"];
	$apellidos=$row["adm_apellido"];
?>