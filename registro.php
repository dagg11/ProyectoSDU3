<?php
require_once('includes/conexion.php');
$nombre = $_POST['nombre'];
$correo = $_POST['email'];
$pass = $_POST['password'];
$sql="INSERT into usuarios VALUES (null,'$nombre','$correo','$pass')";
$res=mysql_query($sql,$con) or die (mysql_error());
header("Location: index.php");
?>
