<?php
include 'Server.php'; 
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>

			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			<link rel="stylesheet" href="css/bootstrap.css">

</head>
<body>
<div class="container">
  <img src="swatch.jpg" width="800px" height="600" style="padding-left: 180px">
  <div class="bottom-left"><i class="fa fa-heartbeat" style="color: red"> 35</i></p></div>
  <div class="top-left"><i class="fa fa-heartbeat" style="color: red"> 35</i></p></div>
  <div class="top-right"> 35 <i class="fa fa-heartbeat" style="color: red"></i></p></div>
  <div class="bottom-right"> 35 <i class="fa fa-heartbeat" style="color: red"></i></p></div>
  <div class="centered">
  
  <marquee behavior="scroll" direction="left">
    <?php
    echo "Relax";
     ?>
                 
                   </marquee>

  </div>
</div>
</body>
<style type="text/css">
	/* Bottom left text */
.bottom-left {
    position: absolute;
    bottom: 220px;
    left: 500px;
    color: red;
}

/* Top left text */
.top-left {
    position: absolute;
    top: 180px;
    left: 500px;
     color: red;
}

/* Top right text */
.top-right {
    position: absolute;
    top: 180px;
    right: 640px;
     color: red;
}

/* Bottom right text */
.bottom-right {
    position: absolute;
    bottom: 220px;
    right: 645px;
     color: red;
}

/* Centered text */
.centered {
    position: absolute;
    top: 47%;
    left: 40%;
     color: red;
}
</style>
</html>