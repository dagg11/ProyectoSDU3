<?php
session_start();
  if(!isset($_SESSION['nombre'])){
    echo "No estas logueado. <a href='index.html'>Iniciar Sesión</a>";
  }else{
    require_once('header.php');
    require_once('includes/conexion.php');
    $sqlUsuarios = "SELECT * FROM Usuario";
    $resUsuarios = mysql_query($sqlUsuarios,$con) or die();
    $sqlU = "SELECT * FROM Usuario WHERE correo = '".$_SESSION['nombre']."'";
    $resU = mysql_query($sqlU,$con) or die();
    $regU = mysql_fetch_array($resU)or die();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Enviar correo</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <form class="" action="email.php" method="post">
          <legend> <h3 class="text-primary">Enviar mensaje </h3></legend>
          <div class="form-group">
            <label for="destinatario">Destinatario</label>
            <select name="destinatario" class="form-control">
              <?php while($regUsuarios = mysql_fetch_array($resUsuarios)){ ?>
                <option value="<?php echo $regUsuarios['correo']; ?>"> <?php echo $regUsuarios['nombre_usuario']." ".$regUsuarios['primer_apellido']." ".$regUsuarios['segundo_apellido']."&lt;".$regUsuarios['correo']."&gt;"; ?> </option>
              <?php } ?>
            </select>
          </div>
          <input type="hidden" name="correo" value="<?php echo $_SESSION['nombre']; ?>">
          <input type="hidden" name="nombre" value="<?php echo $regU['nombre_usuario']." ".$regU['primer_apellido']." ".$regU['segundo_apellido']; ?>">
          <div class="form-group">
            <label for="asunto">Asunto</label>
            <input type="text" name="asunto" placeholder="" class="form-control">
          </div>

          <div class="form-group">
            <label for="cuerpo">Cuerpo</label>
            <textarea name="cuerpo" class="form-control"></textarea>
          </div>

          <input type="submit" value="Enviar" class="btn btn-primary">
        </form>
      </div>
    </div>
  </body>
</html>

<?php
  }
 ?>
