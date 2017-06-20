<!DOCTYPE html>
<html lang="en">

<head>
  <title>About - RocketFrac Services Ltd.</title>
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
            <div class="col-md-6">
              <div class="row">
                  <h3>Who We Are</h3>
                  <hr>
                  <p>            RocketFrac Services Ltd. is a highly-driven Canadian company
                              focused on the development of innovative well stimulation tools. RocketFrac
                               has designed a break-through fracing
                               technology allowing for economically efficient and environmentally
                               friendly oil and gas recovery without the need for water or proppant.</p>
              </div>
              <div class="row">
                  <h3>What We Do</h3>
                  <hr>
                  <p>RocketFrac is transforming oil and gas production. Our focus is the development of cutting-edge tools and disruptive technologies to address some of the most pressing problems facing the oil and gas industry today. Our environmentally safe, fully-waterless
                     products maximize efficiences, sustainability and economic value for all users and stakeholders.</p>
                  <p>Our team is skilled and highly motivated, offering:<p>
              </div>
              <div class="row">
                      <ul>
                          <li>
                              <p>Experience with small O&G firms up to multi-national corporations</p>
                          </li>
                          <li>
                              <p>Over 25 years of oil and gas industry experience including horizontal, vertical and low permeability development</p>
                          </li>
                          <li>
                              <p>Expertise in financing, mergers & acquisitions, and business development</p>
                          </li>
                          <li>
                              <p>Strong history of successful tool design, development and marketing</p>
                          </li>
                          <li>
                              <p>Extensive network of industry contacts</p>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="col-md-6">
                <img class="img-responsive" src="/resources/Mulywara.jpg" alt="">
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
