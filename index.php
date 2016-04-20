<?php
session_start();
require_once('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JAMES Courses</title>
	<link rel="stylesheet" href="includes/bootstrap/dist/css/style.css">

</head>
<body>

<div class="container">
<div class="row">
  <div class="col-sm-8">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
      </ol>

      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">

        <div class="item">
          <img src="includes/pictures/php2.jpg" alt="Image" id="carouselimagenes" class="img-responsive" alt="Imagen responsive">
          <div class="carousel-caption">
            <h3>Aprende PHP</h3>
            <p>18 Capitulos</p>
          </div>
        </div>

	<div class="item">
          <img src="includes/pictures/java.png" alt="Image" id="carouselimagenes" class="img-responsive" alt="Imagen responsive">
          <div class="carousel-caption">
            <h3>Aprede JAVA</h3>
            <p>21 Capitulos</p>
          </div>
        </div>

        <div class="item active">
          <img src="includes/pictures/html.jpg" alt="Image" id="carouselimagenes" class="img-responsive" alt="Imagen responsive">
          <div class="carousel-caption">
            <h3>Aprende HTML</h3>
            <p>10 Capitulos</p>
          </div>

        </div>
      </div>

      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </div>
  <div class="col-sm-4">
	<div class="jumbotron">
		<h1 align="center">JAMES</h1>
		<h4 align="center"><b>Software Corporation</b></h4>
		<p align="justify">JAMES Courses es la fuente más popular en el marco de desarrollo de HTML , JAVA , PHP, para tus	 primeros proyectos en la web  y mobile.</p>
	</div>
  </div>
</div>
<hr>
</div>

<div class="container text-center">
  <h3>¿QUE HACEMOS?</h3>
  <br>
  <div class="row">
    <div class="col-sm-3">
      <img src="includes/pictures/java1.jpg" id="imgs" class="img-responsive" alt="Image">
      <p>Desarrollo JAVA en Linux</p>
    </div>
    <div class="col-sm-3">
      <img src="includes/pictures/css.png" id="imgs" class="img-responsive" alt="Image">
      <p>Desarrollo HTML con CSS</p>
    </div>
    <div class="col-sm-3">
      <img src="includes/pictures/html1.jpg" id="imgs" class="img-responsive" alt="Image">
      <p>Desarrollo HTML desce cero</p>
    </div>
    <div class="col-sm-3">
      <img src="includes/pictures/php71.jpg" id="imgs" class="img-responsive" alt="Image">
      <p>Desarrollo PHP con MySql</p>
<br>
    </div>
<br>
<br>
<br>

  </div>
  <hr>
</div>

<!-- <div class="container text-center">
  <h3>Desarrolladores</h3>
  <br>
  <div class="row">
    <div class="col-sm-2">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>José Alan</p>
    </div>
    <div class="col-sm-2">
      <img src="http://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image">
      <p>Misael</p>
    </div>
    <div class="col-sm-2">
      <img src="joker.jpg" class="img-responsive" style="width:100%; height: 80%;" alt="Image">
      <p>Efrén Odilón</p>
    </div>
    <div class="col-sm-2">
      <img src="saul.jpg" class="img-responsive" style="width:100%" alt="Image">
      <p>Saul</p>
    </div>
  </div>
</div>
<br>
-->

<footer class="container-fluid text-right">
  <p>Copyright © 2016 JAMES todos los derechos reservados | Ingenieria en Sistemas Computacionales | IS-801
</p>
</footer>


	<script type="text/javascript" src="includes/js/jquery.js"></script>
	<script type="text/javascript" src="includes/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="includes/js/jquery.validate.js"></script>

</body>

</html>
