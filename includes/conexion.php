<?php
<<<<<<< HEAD
	$con = mysql_connect('localhost','root','') or die("Error al conectar"+mysql_error());
=======
	$con = mysql_connect('localhost','WebPage','esasistemas') or die("Error al conectar"+mysql_error());
>>>>>>> 001a11c4a81aed2ae3633e96abc7c2d7670d3f8c
	$db = "James";
	//if(isset($con)){
	//	echo "Conexión realizada exitosamente";
	//}
	mysql_select_db($db) or die('No se pudo seleccionar la base de datos');;

	mysql_query("SET NAMES 'utf8'");

?>
