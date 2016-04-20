<?php require_once('header.php'); ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Videos</title>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="includes/css/bootstrap.min.css">
	<link rel="stylesheet" href="includes/css/style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">			

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
<br>
<div class="container">
  <div class="row">
    <div class="col-sm-6">
        <h2>16:9 Responsive Aspect Ratio</h2>
	<div class="embed-responsive embed-responsive-16by9">
	<embed class="embed-responsive-item" src="ev1.mp4" controls>
	</div>
    </div>
    <div class="col-sm-6">
	<h2>16:9 Responsive Aspect Ratio</h2>
	<div class="embed-responsive embed-responsive-16by9">
	<embed class="embed-responsive-item" src="ev2.mp4" controls>
	</div>
    </div>

    <div class="col-sm-6">
	<h2>16:9 Responsive Aspect Ratio</h2>
	<div class="embed-responsive embed-responsive-16by9">
	<embed class="embed-responsive-item" src="ev3.mp4">
	</div>
    </div>
    <div class="col-sm-6">
	<h2>16:9 Responsive Aspect Ratio</h2>
	<div class="embed-responsive embed-responsive-16by9">
	<embed class="embed-responsive-item" src="ev4.mp4">
	</div>
    </div>
</div>
<br><br>



</body>
</html>



