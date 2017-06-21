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
          <div class="row">
            <h2>Propellant Fracturing - The Concept</h2>
            <hr>
          </div>
          <div class="row">
            <h3>Mechanics of Hydraulic vs. Propellant Fracturing</h3>
            <hr>
            <p>Although hydraulic and propellant fracturing both work based
              on the application of high pressures to the formation, past research
              has shown that the time-scales involved lead to a difference in
              the mechanics of fracture propagation.<p>
        </div>
        <div class="row">
          <div class="table-responsive">
            <table class="table">
              <thead>
                    <tr>
                      <th class="text-center">Propellent Fracturing</th>
                      <th class="text-center">Hydraulic Fracturing</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Solid propellant is ignited to generate a specific volume of gas. This controlled burn rapidly creates the high pressure required to create new fractures in the rock.</td>
                      <td>Hydraulic fracturing introduces fractures along existing zones of weakness in the rock formation by pumping water into the wellbore under high pressure.</td>
                    </tr>
                    <tr>
                      <td>Fractures are propagated by stress waves, which rebound from rock boundaries and isolate fractures to zone of interest.</td>
                      <td>Existing fractures are "lifted" open by water pressure. Permeability is more isolated and difficult to direct as water will follow the path of least resistance.</td>
                    </tr>
                    <tr>
                      <td>The high pressure rise rate creates an oval fracture zone of 4-8 radial fractures.</td>
                      <td>Fracture pathways are usually linear and expand in two radially opposing directions.</td>
                    </tr>
                    <tr class="border_bottom">
                      <td>Local disaggregation removes the need for proppant.</td>
                      <td>Requires a proppant (sand) to hold fractures open.</td>
                    </tr>
            </table>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <h2 class="text-standout">Propellant Fracturing generates 140,000 kPa (20,000 PSI) in 10-1000 milliseconds</h2>
            <figure class="figure">
              <img class="img-responsive center-block" src="/resources/propfrac.png" alt="Propellant Fracture Diagram">
              <figcaption class="figure-caption text-center">Typical multi-radial propellant fracture pattern</figcaption>
            </figure>
          </div>
          <div class="col-md-6">
            <h2 class="text-standout">Hydraulic fracturing generates 35,000 kPa (5,000 PSI) in 1-10 hours.</h2>
            <figure class="figure">
              <img class="img-responsive center-block" src="/resources/hydrofrac.png" alt="Hydraulic Fracture Diagram">
              <figcaption class="figure-caption text-center">Typical bi-radial hydraulic fracture pattern</figcaption>
            </figure>
          </div>
        </div>
        <div class="row">
          <h3>Tailored to Application</h3>
          <hr>
          <div class="col-md-12">
            <div class="pull-left">
              <img class="img-responsive img-wrapped"  src="/resources/pressure_graph.png" alt="Typical Pressure Trace">
            </div>
            <div class="float-left">
              <p>The ability of propellant fracturing to rapidly generate high pressures
                 allow for tailorability not available with hydraulic fracturing, due to
                 physical limits on the pumping rate of water. Solid Propellant is a cornerstone
                 of the space program, and is well understood and infinitely tailorable. Propellant
                 fracturing is the only well fracturing process that can be designed to anticipate
                 the existing stress field and produce the desired fracture pattern. It is readily
                 adaptible, and can be easily modified or fabricated for different lithologies
                 or pressure regimes, as necessary. Additionally, a variable burn rate can be designed
                 to create multiple stress waves for more efficient fracturing.</p>
              <p>Current propellant fracturing methods have only made use of the high pressure rise rates,
                but have not been able to take advantage of the other capabilities of solid propellant due
                to an inability to confine the pressures to the target zone for treatment durations of more
                than a few milliseconds. These methods efficiently open multiple fractures, but cannot
                achieve significant penetration into the formation. RocketFrac will
                overcome these limitations by isolating the target zone and extending treatment duration,
                thereby causing extended fracture growth.
            </div>
          </div>
        </div>
        <div class="row">
          <h3>Comparison of Fracturing Methods</h3>
          <hr>
          <div class="table-responsive">
            <table class="table" id="frac_comp">
              <thead>
                    <tr>
                      <th> </th>
                      <th>Current Propellant</th>
                      <th>PSI-Clone&trade;</th>
                      <th>Hydraulic</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="row-title">Pressure Rise Time</td>
                      <td>300-500 milliseconds</td>
                      <td>10-1000 milliseconds</td>
                      <td>10-100 minutes</td>
                    </tr>
                    <tr>
                      <td class="row-title">Peak Pressure</td>
                      <td>20,000 PSI</td>
                      <td>20,000 PSI</td>
                      <td>&le; P<sub>crit</sub> of formation*</td>
                    </tr>
                    <tr>
                      <td class="row-title">Fractures Opened</td>
                      <td>High and low cohesion fractures</td>
                      <td>High and low cohesion, new fractures</td>
                      <td>Only lowest cohesion fractures</td>
                    </tr>
                    <tr>
                      <td class="row-title">Fracture Pattern</td>
                      <td>4-8 radial fractures</td>
                      <td>4-8 radial fractures</td>
                      <td>2 radially opposed fractures</td>
                    </tr>
                    <tr>
                      <td class="row-title">Fracture Length</td>
                      <td>Short</td>
                      <td>Long</td>
                      <td>Long</td>
                    </tr>
                    <tr>
                      <td class="row-title">Applications</td>
                      <td>Vertical wells</td>
                      <td>Vertical and deviated wells</td>
                      <td>Vertical and deviated wells</td>
                    </tr>
                    <tr>
                      <td class="row-title">Applications</td>
                      <td>Re-entries/re-stimulation</td>
                      <td>New wells, re-entries and damaged completions<sup>&dagger;</sup></td>
                      <td>New wells, re-entries (with specialized casing)</td>
                    </tr>
                    <tr>
                      <td class="row-title">Water Requirement</td>
                      <td>In situ water only</td>
                      <td>In situ water only</td>
                      <td>Average of 5 million gallons per well</td>
                    </tr>
                    <tr class="border_bottom">
                      <td class="row-title">Proppant Required</td>
                      <td>Self-propping by local disaggregation</td>
                      <td>Self-propping by local disaggregation</td>
                      <td>300,000 - 4 million pounds of sand</td>
                    </tr>
            </table>
            <p>*Defined as the minimum pressure to overcome overburden on the formation.</p>
            <p>
              <sup>&dagger;</sup>Damage to surface casing or other completions issues (i.e. blown out heel)
              typically prevents fracturing as critical casing sections can no longer contain the pressure
              necessary to fracture the formation. By isolating pressure application to only the target
              zone, PSI-Clone&trade; can be used in previously un-treatable wells.
            </p>
          </div>
        </div>
    </div>
  </div>

    <?php
      include_once('php/footer.php');
     ?>

</body>

</html>
