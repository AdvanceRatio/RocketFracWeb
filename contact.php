<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact - RocketFrac Services Ltd.</title>
	<?php
		include_once('php/head.php')
	 ?>
   <script type="text/javascript" src="js/bootstrapValidator.js"></script>
   <script type="text/javascript" src="js/validator.js"></script>
</head>

<body>
  <?php
    include_once('php/analyticstracking.php');
  ?>

  <?php
    include_once('php/header.php');
   ?>

    <div class="container-fluid">
        <div class="container text-background">
            <div class="row">
              <div class="col-md-8">
                <iframe width="100%" height="500" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJEV-dZR1wcVMRCM-1MoRi2H4&key=AIzaSyAF4bqY-c6pzprGAmzocSzniH8PQYVVSSo" allowfullscreen></iframe>
              </div>
              <div class="col-md-4">
                <h3>Headquarters</h3>
                <hr>
                <p>
                  Central Park Plaza<br>
                  1050, 340 - 12 Avenue SW, <br>
                  Calgary, AB T2R 1L5<br>
                  1 (403) 879-0950
                </p>
                <?php
                  if($_GET["submit"]){
                    include_once('php/success.php');
                  }
                  else{
                    include_once('php/contactform.php');
                  }
                 ?>
              </div>
            </div>
        </div>
    </div>

    <?php
    include_once('php/footer.php');
     ?>

</body>

</html>
