<!DOCTYPE html>
<html lang="en">

<head>
  <title>Technical - RocketFrac Services Ltd.</title>
	<?php
    while (! file_exists('php'))
    chdir('..');

		include_once('php/head.php')
	 ?>
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
                <h3>The Incentive to Innovate</h3>
                <hr>
                <p>The PSI-KICK&trade; tool is being developed to make well fracturing more cost effective and to address escalating technical and environmental concerns associated with traditional hydraulic fracturing methods. The intent was to create a disruptive
                    tool that would increase the permeability of rock formations and improve overall well performance at a lower cost – all without the use of water.</p>
                <p>RocketFrac is working to complete development of a waterless fracturing process by taking the PSI-KICK&trade; tool from concept to deployment and refining the rocket-fueled technology.</p>
                <p>The PSI-KICK&trade; tool will be fully functional in both vertical and horizontal well applications and will be a powerful enhancement of existing technology.</p>
            </div>
            <div class="row">
                <h3>More</h3>
                <hr>
            </div>
            <div class = "row">

               <div class = "col-sm-6 col-md-6">
                 <a href="/technical/propellantfracturing">
                    <div class = "thumbnail">
                       <img src = "/resources/pressure_graph.png" alt = "Propellant Fracturing">
                    </div>
                  </a>

                  <div class = "caption">
                     <h3>The Propellant Fracturing Concept</h3>
                     <p>Propellant fracturing offers both operational and environmental
                      advantages over traditional hydraulic fracturing.</p>

                  </div>
               </div>

               <div class = "col-sm-6 col-md-6">
                  <a href="/technical/psikick">
                    <div class = "thumbnail">
                       <img src = "/resources/logos/RocketFrac_logo_square.png" alt = "Generic placeholder thumbnail">
                    </div>
                  </a>

                  <div class = "caption">
                     <h3>RocketFrac PSI-KICK&trade; Tool</h3>
                     <p>Brings significant advances over existing technology. Expands applications
                        to both vertical and horizontal applications.</p>
                  </div>
               </div>

            </div>
        </div>
    </div>


    <?php
    include_once('php/footer.php');
     ?>

</body>


</html>
