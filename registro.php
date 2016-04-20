<?php
require_once('includes/conexion.php');
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$direccion = $_POST['direccion'];
$correo = $_POST['email'];
$pass = $_POST['password'];
$sql="INSERT INTO Usuario VALUES (null,'$nombre','$apellido1','$apellido2','$direccion','$correo',md5('$pass'))";
$res=mysql_query($sql,$con) or die (mysql_error());
header("Location: index.php");
?>
