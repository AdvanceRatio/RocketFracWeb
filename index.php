<!DOCTYPE html>
<html lang="en">

<head>
	<title>RocketFrac Services Ltd.</title>
	<?php
		include_once('php/head.php')
	 ?>
	 <script type="text/javascript" src="/js/jquery.bcSwipe.min.js"></script>
	 <script type="text/javascript" src="/js/index.js"></script>
</head>

<body id="indexbody">

	<?php
		include_once('php/analyticstracking.php');
	?>

	<!-- Navigation -->
	<header>
	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="index-navbar">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	      <a class="navbar-brand" href="/">
	        <img class="header-logo" src="/resources/logos/RocketFrac_logo_web.png" alt="RFS Logo">
	      </a>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li>
	          <a href="/"><span>Home</span></a>
	        </li>
					<li class="dropdown">
	          <a href="/about" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	            <span>About Us <span class="caret"></span><span>
	          </a>
	          <ul class="dropdown-menu">
	            <li><a href="/about">Overview</a></li>
	            <li><a href="/about/directors">Board of Directors</a></li>
	            <li><a href="/about/management">Management</a></li>
	          </ul>
	        </li>
	        <li>
	          <a href="/whyRFS"><span>Why RocketFrac</span></a>
	        </li>
					<li class="dropdown">
	          <a href="/technical" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	            <span>Technical <span class="caret"></span><span>
	          </a>
	          <ul class="dropdown-menu">
	            <li><a href="/technical">Overview</a></li>
	            <li><a href="/technical/propellantfracturing">Propellant Fracturing</a></li>
	            <li><a href="/technical/psikick">RocketFrac PSI-CLONE&trade;</a></li>
	          </ul>
	        </li>
					<li>
						<a href="/news/">News</a>
					</li>
	        <li>
	          <a href="/contact"><span>Contact</span></a>
	        </li>
	      </ul>
	    </div>
	    <!-- /.navbar-collapse -->
	  </div>
	  <!-- /.container -->
	</nav>
	</header>

	<div class="container-fluid">
			<div class="row carousel-row">
				<div id="homeCarousel" class="carousel slide" data-ride="carousel" data-pause="false">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#homeCarousel" data-slide-to="1"></li>
						<li data-target="#homeCarousel" data-slide-to="2"></li>
					</ol>
					<!-- Wrapper for slides -->
					<div class="carousel-inner" role="listbox">
						<div class="item active">
							<a href="/about">
								<div class="carousel-crop">
									<div class="fill" style="background-image:url('/resources/slide1.jpg');"></div>
								</div>
								<div class="carousel-caption">
									<h2>WATERLESS FRACTURING TECHNOLOGY</h2>
									<h3>Revolutionizing Oil & Gas Recovery</h3>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="/whyRFS">
								<div class="carousel-crop">
                	<div class="fill" style="background-image:url('/resources/slide2.jpg');"></div>
								</div>
								<div class="carousel-caption">
									<h2>CLEAN, EFFICIENT, PROFITABLE</h2>
									<h3>Rocket Fuel Fracturing Process</h3>
								</div>
							</a>
						</div>

						<div class="item">
							<a href="/technical">
								<div class="carousel-crop">
									<div class="fill" style="background-image:url('/resources/slide3.jpg');"></div>
								</div>
								<div class="carousel-caption">
									<h2>SUSTAINABLE WATER SAVING INNOVATION</h2>
									<h3>The Future of the Oil & Gas Industry</h3>
								</div>
							</a>
						</div>
					</div>

					<!-- Left and right controls -->
					<a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>

				</div>
			</div>
			<!--<div class="row" id="tagline">
				<p>RocketFrac, a revolutionary green break-through technology.<br>
					Economic. Productive. Efficient. Superior.</p>
			</div>-->
			<!--<div class="container text-background">
			<div class="row">
				<h2 id="latest-news">LATEST NEWS</h2>
				<hr>
			</div>
			<div class="row">
				<div class="col-md-2">
					<h4>May 1, 2017</h4>
				</div>
				<div class="col-md-10">
					<a class="news-link" href="/news">
					<h3>RocketFrac Closes Oversubscribed Initial Round of Financing</h3></a>
					<p>Waterless Fracing Technology Draws High Level of Investor Interest</p>
				</div>
			</div>
		</div>-->
	</div>

	<?php
	include_once('php/footer.php');
	 ?>

</body>

</html>
