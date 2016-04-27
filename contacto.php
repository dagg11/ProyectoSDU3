<?php
session_start();
require_once('header.php');
require_once('includes/conexion.php');
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>JAMES Courses</title>
    <link rel="stylesheet" href="includes/bootstrap/dist/css/style.css">

  </head>

  <body>
    <div class="container">
      <div class="col-sm-7">
        <h1>Dejanos un mensaje</h1>
        <br>
        <form action="email.php" method="post" class="form-horizontal" role="form">


          <div class="input-group margin-bottom-sm">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input class="form-control" name="nombre" type="text" placeholder="¿Cual es tu nombre?">
          </div>
          <br>
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input class="form-control" name="correo" type="email" placeholder="¿Cual es tu correo?">
          </div>
          <br>

            <input class="form-control" name="destinatario" type="hidden" value="administrador@james.com">
            <input class="form-control" name="asunto" type="hidden" value="Soporte">


          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-list-alt"></i></span>
            <textarea class="form-control" name="cuerpo" rows="7" id="cuerpo" placeholder="¿Que nos quieres compartir?"></textarea>
          </div>
          <br>

          <br>
          <div class="form-group margin-bottom-sm">
            <div class="col-sm-offset-10 col-sm-10">
              <button type="submit" class="btn btn-default">Enviar</button>
            </div>
          </div>
        </form>
      </div>

      <div class="col-sm-5">
        <h1>Contacto</h1>
        <div class="row">
          <hr>
        </div>
        <div class="row">
          <span class="glyphicon glyphicon-pushpin"></span> Calle la Paz No. 110 Col. Centro San Felipe del Progreso, Edo. Mex.
          <hr>
        </div>
        <div class="row">
          <span class="glyphicon glyphicon-phone"></span> (712)1929-349
          <hr>
        </div>
        <div class="row">
          <span class="glyphicon glyphicon-envelope"></span> jamessoftwarecorporation@gmail.com
          <hr>
        </div>
        <div class="row">
          <span class="glyphicon glyphicon-globe"></span> jamessc.com
          <hr>
        </div>
        <div class="row">
          <span class="glyphicon glyphicon-globe"></span> facebook/james_software_corporation
          <hr>
        </div>

      </div>



    </div>

    <footer class="container-fluid text-right">
      <p>Copyright © 2016 JAMES todos los derechos reservados | Ingenieria en Sistemas Computacionales | IS-801 </p>
    </footer>

  </body>

  </html>
