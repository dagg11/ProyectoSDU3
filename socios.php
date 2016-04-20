<?php require_once('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Imagenes</title>
	<meta charset="UTF-8">

  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }

    /* Remove the jumbotron's default bottom margin */
     .jumbotron {
      margin-bottom: 0;
    }

    /* Add a gray background color and some padding to the footer */
    footer {
	  background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<br>
<br>

<div class="jumbotron">
  <div class="container text-center">
    <h1>Conoce a Nuestros Socios</h1>
    <p>6 de las mejores Empresas e Instituciones del Mundo nos Respaldan</p>
  </div>
</div>

<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Google</div>
        <div class="panel-body"><img src="/includes/pictures/google.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-danger">
        <div class="panel-heading">W3School</div>
        <div class="panel-body"><img src="includes/pictures/w3.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-success">
        <div class="panel-heading">Oracle</div>
        <div class="panel-body"><img src="includes/pictures/oracle.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Coursera</div>
        <div class="panel-body"><img src="includes/pictures/coursera.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Google</div>
        <div class="panel-body"><img src="google.jpg" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">Linux</div>
        <div class="panel-body"><img src="linux.png" class="img-responsive" style="width:100%" alt="Image"></div>
        <div class="panel-footer"></div>
      </div>
    </div>
  </div>
</div><br><br>


</body>
</html>
