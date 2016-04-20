<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/bootstrap/dist/css/bootstrap.css" >
	<link rel="stylesheet" href="includes/bootstrap/dist/css/style.css" >
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
          <a class="navbar-brand" href="#">JAMES Courses</a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
	    <li><a href="curso.php">Cursos</a></li>
            <li><a href="quiensomos.php">¿Quiénes somos?</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="socios.php">Instituciones</a></li>
	   
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
        </div><!--/.nav-collapse -->
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
</div><!-- container -->
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
             <div class="col-sm-10">
               <input type="text" name="nombre" class="form-control input-sm" id="email" placeholder="Enter Name">
             </div>
           </div>
	    <div class="form-group">
	     <label class="control-label col-sm-2" for="email">Email:</label>
             <div class="col-sm-10">
               <input type="email" name="email" class="form-control input-sm" id="email" placeholder="Enter email">
             </div>
           </div>
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control input-sm" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Registar</button>
      </div>
    </div>
  </form>
</div><!-- container -->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
 </div>



	<script type="text/javascript" src="includes/js/jquery.js"></script>
	<script type="text/javascript" src="includes/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="includes/js/jquery.validate.js"></script>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="includes/bootstrap/assets/js/jquery.js"></script>
    <script src="includes/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
