<?php
//---------------------------------------MONTAR ARCHIVO	
$nombre_archivo = $_FILES['pdf']['name']; 
$tipo_archivo = $_FILES['pdf']['type']; 
$tamano_archivo = $_FILES['pdf']['size']; 
$dir_temp = $_FILES['pdf']['tmp_name'];
$error = $_FILES['userfile']['error'];
$uploads_dir = "../pdf/articulos";
/*
echo 'Directorio: '.$dir_temp.'<br>';
echo 'error: '.$error.'<br>';
echo 'nombre: '.$nombre_archivo.'<br>';
echo 'Tipo: '.$tipo_archivo.'<br>';
echo 'tamano: '.$tamano_archivo.'<br>';
*/

//NOMBRE NUEVO DEL ARCHIVO
if (strpos($tipo_archivo, "pdf")){
	$new_name= $id_articulos.".pdf";
	//	echo $new_name;
}
else{
	$new_name = "";
}
//   para comprobar
//echo 'dir: '.$uploads_dir.'/'.$new_name;

//compruebo si las características del archivo son las que deseo 
if ($nombre_archivo){
	if (!((strpos($tipo_archivo, "pdf")) && ($tamano_archivo < 6000000))) { 
		$aviso ='<span style="color:#FF0000; font-size: 16px; font-weight:bold;">El tipo de archivo no es .pdf'; 
	}
	else{ 
		if (copy($_FILES['pdf']['tmp_name'], "$uploads_dir/$new_name")){ 
			$aviso ='El archivo ha sido cargado correctamente. ->';
			//ACTUALIZAR EL NOMBRE DEL pdf
			$usql_pdf=("UPDATE articulos SET pdf='".$new_name."' WHERE id_articulos='".$id_articulos."'");
			//ejecuta la sentencia usql
			$actualizar_pdf = $mysqli->query($usql_pdf);
		}
		else{ 
			$aviso ='Ocurrió algún error al subir el fichero. No pudo guardarse.';
			//ELIMINAR EL NOMBRE DEL pdf
			$bsql="UPDATE articulos SET pdf='' WHERE id_articulos='".$id_articulos."'";
			$borrar = $mysqli->query($bsql);
		} 
	}
}
//////////////////////////////////////////////////////////////////////////////
?>