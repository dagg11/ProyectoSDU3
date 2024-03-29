<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.css">
  <link rel="stylesheet" href="includes/bootstrap/dist/css/style.css">
</head>

<body>
  <!-- Fixed navbar -->
  <div class="container">
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand active" href="index.php">JAMES Courses</a>
        </div>

				<?php if(!isset($_SESSION['nombre'])){ ?>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
            <li><a href="curso.php">Cursos</a></li>
            <li><a href="quiensomos.php">¿Quiénes somos?</a></li>
            <li><a href="contacto.php">Contacto</a></li>


          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <button type="button" class="botn botn-primary botn-lg outline" data-toggle="modal" data-target="#myModal2">
                <span class="glyphicon glyphicon-edit"></span> Registrate
              </button>
              <!-- <a href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a> -->
            </li>
            <li>
              <button type="button" class="botn botn-primary botn-lg outline" data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-log-in"></span> Log in
              </button>
              <!-- <a href="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a> -->
            </li>
          </ul>
        </div>
				<?php } else {
					require_once('includes/conexion.php');
					$correo = $_SESSION['nombre'];
					$sql_curso = "select * from usuarios as u, curso as c, curso_has_usuario cu where u.id_usuario = cu.id_usuario and c.id_curso = cu.id_curso and u.curso = $correo;";
					$res_curso = mysql_query($sql_curso, $con);
					 ?>
					<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav">
							<li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
	            <li><a href="curso.php">Cursos</a></li>
	            <li><a href="home.php#curso">Crear Curso</a></li>
							<li><a href="home.php#tutorial">Agregar tutorial</a></li>
              <li><a href="enviarCorreo.php">Enviar correo</a></li>
							
	            <li><a href="contacto.php">Contacto</a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li>
								<li><a href="salir.php"><span class="glyphicon glyphicon-user"></span> <?php echo $correo ?> </a></li>
								<li><a href="salir.php"><span class="glyphicon glyphicon-log-in"></span> Cerrar Sesion</a></li>
							</li>
						</ul>
					</div>
					<?php } ?>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">


        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Iniciar Session</h4>
          </div>
          <div class="modal-body">

            <div class="container">
              <form action="logueo.php" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                  <div class="col-sm-10">
                    <input type="email" name="email" class="form-control input-sm" id="email" placeholder="Enter email">
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Password:</label>
                  <div class="col-sm-10">
                    <input type="password" name="pass" class="form-control input-sm" id="pwd" placeholder="Enter password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Entrar</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- container -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <div class="container">
    <div class="modal fade" id="myModal2" role="dialog">
      <div class="modal-dialog">


        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Registro de Usuario</h4>
          </div>
          <div class="modal-body">

            <div class="container">
              <form action="registro.php" method="post" class="form-horizontal" role="form">
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Nombre:</label>
                    <input type="text" name="nombre" class="form-control input-sm" id="email" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Primer apellido:</label>
                    <input type="text" name="apellido1" class="form-control input-sm" id="email" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Segundo apellido:</label>
                    <input type="text" name="apellido2" class="form-control input-sm" id="email" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Direccion:</label>
                    <input type="text" name="direccion" class="form-control input-sm" id="email" placeholder="Enter Name">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="email">Email:</label>
                    <input type="email" name="email" class="form-control input-sm" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label class="control-label col-sm-2" for="pwd">Password:</label>
                    <input type="password" name="password" class="form-control input-sm" id="pwd" placeholder="Enter password">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Registar</button>
                </div>
              </form>
            </div>
            <!-- container -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script type="text/javascript" src="includes/bootstrap/assets/js/jquery.js"></script>
  <script type="text/javascript" src="includes/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>
