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
    include_once('php/header.php');
   ?>

    <div class="container-fluid">
        <div class="container text-background">
          <div class="row">
            <h2>Tool Evolution</h2>
            <hr>
            <p>RocketFrac's PSI-KICK&trade; tool is being developed to deliver key improvements
              to the current state-of-the-art propellant fracturing tools. Existing propellant fracturing
              technologies have been successfully deployed in hundreds
              with exceptional results.</p>
              <p>Despite their success, existing tools face limitations which have prevented
                use in widespread applications. Chief among these is the lack of a
                sealing solution, and instead relying on hydraulic head to contain
                pressure.  This limits operations to short duration treatments
                in vertical wells only. RocketFrac's PSI-KICK&trade; tool will deliver significant
                improvements upon existing technologies including
                a propietary sealing solution to eliminate both of these
                limitations. It will be fully functional in vertical and horizontal
                wells of any length.</p>
          </div>
        <div class="row">
            <h3>Case Studies</h3>
            <hr>
            <p>Current tools have seen rigorous testing internationally, on- and off-shore,in multiple oil, gas, and geothermal wells. To date,
              these tools have been tested in over 600 wells with exceptional results:</p>
            <ul>
              <li>
                <p>225% increase in production vs hydraulically fractured wells.</p>
              </li>
              <li>
                <p>100% production increase in older existing wells.</p>
              </li>
              <li>
                <p>30-50% reduction in pressure required to break down wells.</p>
              </li>
            </ul>
        </div>
        <div class="row">
            <p>Specific results include:<p>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                        <tr>
                          <th>Rock Formation at an average depth of -5000 ft</th>
                          <th>Rock formation at an average depth of -1640 ft</th>
                          <th>Rock formation at an average depth of -2600 ft</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Low permeability with no production on drilling.</td>
                          <td>Skin damage due to perforating must be removed.</td>
                          <td>Coal seam required stimulation for fluids to be pumped in.</td>
                        </tr>
                        <tr class="border_bottom">
                          <td>After treatment 5 wells produce 820 mcf - 1.8 mmcf.</td>
                          <td>Enhanced production from 8.2 - 14.1 mmcf.</td>
                          <td>Test showed resultant negative skin after treatment.</td>
                        </tr>
                </table>
          </div>
        </div>
      </div>
    </div>

    <?php
    include_once('php/footer.php');
     ?>

</body>

</html>
