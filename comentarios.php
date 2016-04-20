<?php
require_once('includes/conexion.php');
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$tel = $_POST['telefono'];
$com = $_POST['comentario'];
$sql="INSERT into comentarios VALUES (null,'$nombre','$correo','$tel','$com')";
$res=mysql_query($sql,$con) or die (mysql_error());
header("Location: contacto.php");
?>
