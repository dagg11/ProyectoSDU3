<?php
session_start();
require_once('header.php');
require_once('includes/conexion.php');

$sql_curso = "select * from curso";
$res_curso = mysql_query($sql_curso, $con) or die(mysql_error());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JAMES Courses</title>
	<link rel="stylesheet" href="includes/bootstrap/dist/css/style.css">

</head>
<body>

<div>
<br><br><br>
  <h2>Lista de cursos</h2>

          <?php while($reg_curso = mysql_fetch_array($res_curso)){
            $id_curso = $reg_curso['id_curso'];
            ?>
            <dl>
            <dt><h3><?php echo $reg_curso['nombre']; ?></h3></dt>
            <?php
            $sql_tuto = "select tutorial.nombre, tutorial.id_tutorial, curso.id_curso from tutorial, curso where tutorial.id_curso = $id_curso and curso.id_curso = $id_curso";
            $res_tuto = mysql_query($sql_tuto,$con);
            while($reg_tuto = mysql_fetch_array($res_tuto)){
            ?>
            <ul>
             <li>
             <?php if($_SESSION){ ?>
            <a href="tutoriales.php?id_curso=<?php echo $reg_tuto['id_curso'];?>&id_tutorial=<?php echo $reg_tuto['id_tutorial']; ?>"><label> <?php echo $reg_tuto['nombre']; ?> </label></a>
            <?php } else { ?>
            <label> <?php echo $reg_tuto['nombre']; ?> </label>
            <?php } ?>
            </li>
            </ul>
            <?php } ?>

            </dl>
          <?php } ?>
</div>

</body>
</html>
