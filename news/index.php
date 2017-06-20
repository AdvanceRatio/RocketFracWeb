<!DOCTYPE html>
<html lang="en">

<head>
  <title>News - RocketFrac Services Ltd.</title>
	<?php
    while (! file_exists('php'))
    chdir('..');

		include_once('php/head.php')
	 ?>
</head>

<body>

  <?php
    include_once('php/header.php');
   ?>

    <div class="container-fluid">
        <div class="container text-background">
          <div class="row" id="news-padding">
            <div class="col-md-2">
              <h4>June 20, 2017</h4>
            </div>
            <div class="col-md-10">
              <input type="checkbox" class="read-more-state" id="pr-1"/>
                <a class="news-link" href="/news/RocketFrac_Spoehel_Appointment_Press_Release_FINAL_2017_06_20_with_Logo">
                <h3>RocketFrac Announces Former NASA Senior Executive
                    Hon. Ronald R. Spoehel Appointed Chairman Of The Board</h3></a>
                <div class="read-more-wrap">
                  <?php include_once('news/june2017_pr.php'); ?>
                </div>
                <!--<label for="pr-1" class="read-more-trigger btn btn-default"></label>-->
                <a class="btn btn-default" href="/news/RocketFrac_Spoehel_Appointment_Press_Release_FINAL_2017_06_20_with_Logo" role="button">Download as PDF</a>
            </div>
        </div>
      </div>
    </div>

    <?php
    include_once('php/footer.php');
     ?>

</body>

</html>
