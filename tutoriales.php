<?php
require_once('header.php');

	if(!$_GET){
	 echo "<br><br><br>No se han enviado datos sobre el tutorial"."<a href='index.php'>Regresar </a>";
 	}else{
		require_once('includes/conexion.php');
		$curso = $_GET['id_curso'];
		$tutorial = $_GET['id_tutorial'];
		$sql = "SELECT * FROM Tutorial WHERE Tutorial.id_tutorial = '$tutorial' and Tutorial.id_curso = '$curso'";
		$res = mysql_query($sql,$con) or die("Error consultando: ".mysql_error());
		$reg = mysql_fetch_array($res) or die("Error al convertir los registros");

		$sql2 = "SELECT * FROM Curso WHERE id_curso = '$curso'";
		$res2 = mysql_query($sql2,$con) or die("Error consultando: ".mysql_error());
		$reg2 = mysql_fetch_array($res2) or die("Error al convertir los registros");
 ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>JAMES Courses</title>
    <link rel="stylesheet" href="includes/bootstrap/dist/css/style.css">

  </head>

  <body>
  
		<div class="row">
			<div class="panel panel-default col-md-8 col-md-offset-2">
				<div class="panel-heading">
					<h3 class="panel-title"><?php echo "Curso ".$reg2['nombre_curso']." - ".$reg['nombre_tutorial'] ?></h3>
				</div>
				<div class="panel-body">
					<video controls>
						<source src="<?php echo 'cursos/'.$curso.'/'.$tutorial.'.mp4'; ?>" type="video/mp4">
					</video>

					<h3 class="text-danger">Descripción</h3>
					<?php echo $reg['descripcion_tutorial']; ?>
				</div>

				<div class="panel-footer">
					<a href="<?php echo 'cursos/'.$curso.'/'.$tutorial.'.mp4'; ?>" class="btn btn-default" download="<?php echo $reg2['nombre_curso'].' - '.$reg['nombre_tutorial'].'.mp4'; ?>"> Descargar </a>
				</div>
			</div>
		</div>



  </body>

  </html>
  <?php
	}
 ?>
