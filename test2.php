<!DOCTYPE html>
<html>
<head>
	<title>My GitHub Work</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

	<!-- Material Design Bootstrap -->
	<link href="css/mdb.min.css" rel="stylesheet">
	<link href="css/mdb.css" rel="stylesheet">

	<link rel="stylesheet" href="css/style.css">


	<style type="text/css">
	div#iconBars ul.links{
		padding-left: 200px;
	}
</style>

</head>
<body>

	<!--navbar-->
	<?php require 'navbar.php';  ?>

<!--carousel wrapper-->

<div id="carouselIndicators" class="carousel slide carousel-fade" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselIndicators" data-slide-to="1"></li>
		<li data-target="#carouselIndicators" data-slide-to="2"></li>
		<!--   -->
	</ol>

	<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
			<img class="d-block w-100" src="assets/py2.jpg" alt="Python">
		</div>
		<div class="carousel-item ">
			<img class="d-block w-100" src="assets/py.jpg" alt="Python">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="assets/py1.jpg" alt="Python">
		</div>
		
		<!-- <div class="carousel-item">
			<img class="d-block w-100" src="assets/py3.jpg" alt="Python">
		</div> -->
	</div>

	<!--Controls-->
	<a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->

</div><br><br>


<!-- cards -->
<div class="container" id="about">
	<div class="row">
		
		<?php require 'card.php'; ?>
		
		</div><!-- end of row -->
	</div><!-- end of container -->


<!-- news -->
<header style="border-bottom: 2px solid #000;">
	<h1 style="font-family: 'Press Start 2P',sans-serif;">Best News Ever</h1>
</header>

<section id="top-stories">
<?php include 'news.php'; ?>

</section>

<!-- footer -->
<?php include 'footer.php'; ?>


	<!--js is in that order so that dropdown works-->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/popper.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="js/mdb.min.js"></script>
	<script type="text/javascript" src="js/mdb.js"></script>


</body>
</html>