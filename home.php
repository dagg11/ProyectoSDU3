<?php
session_start();
if($_SESSION['nombre']){
?>

  <!DOCTYPE html>
  <html>

  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/bootstrap/dist/css/navbar-fixed-top.css">
    <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="includes/bootstrap/dist/css/css/style.css">
    <link rel="shortcut icon" href="includes/bootstrap/assets/ico/favicon.png">

    <style>
      #curso {
        padding-top: 50px;
        height: 500px;
      }

      #tutorial {
        padding-top: 50px;
        height: 500px;
      }
    </style>
  </head>

  <body>

?>



      <?php require_once('header.php') ?>

      <br>
      <br>
      <br>
      <div class="container text-center">

        <div id="curso" class="col-sm-10 text-left">
          <br>
          <h2>Crear nuevo curso</h2>
          <br>
          <form action="crearCurso.php" method="post">
            <table>
              <tr>
                <td>
                  <label>Nombre del curso: </label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="nombre" class="form-control" placeholder="nombre" </input>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Nombre del asesor: </label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="nombreAsesor" class="form-control" placeholder="nombre del asesor"></input>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Descripción: </label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="descripcion" class="form-control" placeholder="descripcion"></input>
                </td>
                <td>
                  <input type="text" name="correo" value="<?php $correo; ?>"></input>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="submit" class="btn btn-default" value="Crear curso"></input>
                </td>
              </tr>
            </table>
          </form>
        </div>

        <div id="tutorial" class="col-sm-10 text-left">
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <h2>Crear nuevo tutorial</h2>
          <form action="crearCurso.php" method="post">
            <table>
              <tr>
                <td>
                  <label>Nombre del tutorial: </label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="nombre" class="form-control" placeholder="nombre del tutorial"></input>
                </td>
              </tr>
              <tr>
                <td>
                  <label>Descripción: </label>
                </td>
              </tr>
              <tr>
                <td>
                  <input type="text" name="descripcion" class="form-control" placeholder="descripcion"></input>
                </td>
              </tr>
              <tr>
                <select>
                  <?php while($reg_curso = mysql_fetch_array($res_curso)) { ?>
                    <option value=" <?php echo $reg_curso['nombre']; ?> "></option>
                    <?php
				      				 }
				      				 ?>
                </select>
              </tr>
              <tr>
                <td>
                  <input type="submit" class="btn btn-default" value="Enviar"></input>
                </td>
              </tr>
            </table>
          </form>
        </div>

      </div>



      <script src="includes/bootstrap/assets/js/jquery.js"></script>
      <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
  </body>

  </html>

  <?php
}else{
	echo "<script type='text/javascript'>".
	"alert('Usted no esta logueado');".
	"document.location.href = 'index.php';</script>";
}

?>
