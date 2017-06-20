<!DOCTYPE html>
<html lang="en">

<head>
  <title>Technical - RocketFrac Services Ltd.</title>
  <?php
    while (! file_exists('php'))
      chdir('..');

		include_once('php/head.php');
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
          <h2>RocketFrac PSI-KICK&trade; Tool</h2>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <div class="pull-right">
                  <img class="img-responsive center-block" src="/resources/PSI-KICK_RENDER.png" alt="Render of the PSI-KICK tool">
              </div>
              <div class="float-right">
                <p>Existing propellant fracturing
                  technologies have been successfully deployed in hundreds
                  of wells with exceptional results.
                  However, despite their success, existing tools face limitations which constrain
                  their use to short duration treatments in vertical wells. These limitations have prevented
                  their use in widespread applications.</p>
                <p>PSI-KICK&trade; is an evolution of the current state of the art, featuring a range of improved technologies, the most important of which are:</p>
                <ul>
                    <li>
                        <p>Re-usable automatically set sealing elements integrated into the tool.</p>
                    </li>
                    <li>
                        <p>Uniquely formulated propellant developed exclusively to deliver a long-duration, pulsed pressure profile</p>
                    </li>
                </ul>
                <h3>Revolutionary Sealing Solution</h3>
                <hr>
                <p>One of the key aspects of the PSI-KICK&trade; tool is its ability to deliver long duration pressure profiles, thanks to our unique new sealing elements. Early testing showed that
                    conventional wellbore packers would not be able to withstand the pressures our tool would generate, so we are developing our own propietary new sealing solution.</p>
                <!--<img class="img-responsive" src="resources/PACKER-render.png" alt="Render of the PSI-KICK&trade; Packer">-->
                <p>PSI-KICK's integrated sealing elements are:</p>
                <ul>
                    <li>
                        <p>Automatically deployed along with ignition of the solid propellant</p>
                    </li>
                    <li>
                        <p>Fully capable of sealing against the pressure generated by the solid propellant</p>
                    </li>
                    <li>
                        <p>Designed to fully relax once pressure is removed (solid propellant burns out)</p>
                    </li>
                    <li>
                        <p>Fully re-usable</p>
                    </li>
                </ul>
                <h3>Unique Propellant Formulation</h3>
                <hr>
                <p>PSI-KICK&trade; will be the first tool to use specially designed propellant formulations to achieve the optimum pressure-time history for every formation and well. The PSI-KICK&trade; tool is designed to be fully plug-and-play with different propellant formulations, so that one tool, along with the right propellant
                    formulation, can be used for stimulations in many applications.</p>
                <p>Additionally, our propellants are safe to handle and transport, and will be independently lab tested to ensure that there are no harmful by-products, either to personnel or the environment.</p>
            </div>
          </div>
        </div>
        <div class="row">
          <h3>Advantages of the PSI-KICK&trade; Tool</h3>
          <hr>
            <div class="col-md-3">
              <img class="img-responsive center-block" src="/resources/traditional-site.png" alt="Traditional Hydraulic Fracturing Site">
              <h3 class="text-center">Traditional Hydraulic Fracturing Site</h3>
              <img class="img-responsive center-block" src="/resources/RFS-site.png" alt="RocketFrac Fracturing Site">
              <h3 class="text-center">PSI-KICK Fracturing Site</h3>
            </div>
            <div class="col-md-9">
              <p>The PSI-KICK tool offers many economic, environmental and operation benefits over traditional hydraulic fracturing operations:</p>
              <div class="table-responsive">
                <table class="table">
                  <colgroup>
                    <col class="col-md-3">
                    <col class="col-md-4">
                    <col class="col-md-5">
                  </colgroup>
                  <thead>
                        <tr>
                          <th> </th>
                          <th>PSI-KICK&trade;</th>
                          <th>Hydraulic Fracturing</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="row-title">Onsite Personnel</td>
                          <td>3-5</td>
                          <td>20-30</td>
                        </tr>
                        <tr>
                          <td class="row-title">Equipment Required</td>
                          <td>One coiled tubing unit</td>
                          <td>Multiple pumper trucks and water tanks</td>
                        </tr>
                        <tr>
                          <td class="row-title">Water Requirement</td>
                          <td>In situ only</td>
                          <td>Average of 5 million gallons</td>
                        </tr>
                        <tr>
                          <td class="row-title">Proppant Requirement</td>
                          <td>None</td>
                          <td>Up to 4 million pounds</td>
                        </tr>
                        <tr>
                          <td class="row-title">Casing Requirement</td>
                          <td>None</td>
                          <td>Special casing for separating zones/re-entries<br>(i.e. ball drop, sliding sleeve)</td>
                        </tr>
                        <tr>
                          <td class="row-title">Staging</td>
                          <td>No restriction on number of stages or lateral lengths</td>
                          <td>Maximum number of zones depending on well completion</td>
                        </tr>
                        <tr>
                          <td class="row-title">Time Duration (Single Zone)</td>
                          <td>~30 seconds</td>
                          <td>Multiple hours up to days</td>
                        </tr>
                        <tr>
                          <td class="row-title">Multiple Zones</td>
                          <td>Can string tools to simulatneously treat multiple zones</td>
                          <td>Most zones must be treated seperately</td>
                        </tr>
                        <tr>
                          <td class="row-title">Environmental</td>
                          <td>No contaminated water to potentially damage local environment</td>
                          <td>Water must be recycled or disposed, risk of spill and groundwater contamination</td>
                        </tr>
                        <tr class="border_bottom">
                          <td class="row-title">Infrastructure</td>
                          <td>Small equipment required protects local infrastructure</td>
                          <td>Equipment, water and proppant delivery traffic damages roads, inconveniences residents</td>
                        </tr>
                </table>
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
