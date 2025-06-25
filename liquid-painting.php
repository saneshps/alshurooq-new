<!DOCTYPE html>
<html lang="en">

<head>



	<title>Al Shurooq</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="canonical" href="https://alshurooq.ae/liquid-painting.php">
	<!--  Developed by - bigleap -->

	<!--***************************************-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/alshurooq.css">
	<link rel="stylesheet" href="css/cnc-laser-cutting.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/testim.css">
	<link rel="stylesheet" href="css/resp.css">


	<!--***************************************-->



	<?php include 'google_analytics.php'; ?>
</head>

<body>
	<div class="whatssap"></div>

	<a href="https://api.whatsapp.com/send?phone=+971552479006&text=Hey%20there!%20I%20woud%20like%20to%20know%20more%20about%20your%20products." class="float" target="_blank">
		<i class="demo-icon icon-whatsapp sapp">&#xf232;</i>
	</a>

	<!-- header -->
	<?php $page = 'servi';
	include 'header-sub.php'; ?>

	<!-- banner -->
	<section id="banner-ab">
		<div class="ban-cap">
			<!-- <h2>About Us</h2> -->
			<a href="index.php">HOME</a><span> / </span><a href="services.php" class="act-f"><b>SERVICES</b></a> <span> / </span><a href="liquid-painting.php" class="act-f">Liquid Painting</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php $page = 'serv-14';
					include 'serv-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<!-- <h2 class="cl">CNC Water Jet Cutting</h2> -->
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="img/liquid-painting.jpg" style="width:100%">

						<!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
					  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
					</div>
					<h2 class="cl">Liquid Painting</h2>
					<p>Liquid painting is a process of applying different type of paint by using a spray gun or by dipping or flooding process. Liquid paint can be applied to any type of surfaces and does not require the use of heat to achieve curing. Liquid painting is very common when dealing with smaller, short run quantities that can be done in batches.</p>
					<p>Disposable paint arresting filters are used to collect the over sprayed paint. These filters, after getting chocked, can be removed and disposed off as per the environment norms. The paint booth installed by us can process large parts up to 8 m long and 6 m wide and is fitted with a fresh air delivery system and a baking facility which will increase the rate of curing of the paint.</p>

					<!-- <h3>There are three basic parts of a Transformer Tank:</h3>
					<ul class="uu-l">
						<li>an iron core which serves as a magnetic conductor.
</li>
						<li>a primary winding or coil of wire and.</li>
						<li>a secondary winding or coil of wire.</li>
					</ul>
					 -->
					<div style="margin-top: 30px; display: flex;">
						<div class="col-md-4">
							<img src="img/liquid-painting1.jpg">
						</div>
						<!--<div class="col-md-4">
				<img src="img/robotic-welding2.jpg">
			</div>
			 <div class="col-md-4">
				<img src="img/cad-cam-simulation-services3.jpg">
			</div>  -->
					</div>




				</div>
			</div>







		</div>
	</section>



	<!-- footer -->
	<?php include 'footer.php'; ?>


	<script type="text/javascript" src="js/alshurooqModules.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>



	<script type="text/javascript">
		$('li').click(function() {
			$('li').removeClass('open');
			$(this).toggleClass('open');
		})
	</script>


	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
			showDivs(slideIndex += n);
		}

		function showDivs(n) {
			var i;
			var x = document.getElementsByClassName("mySlides");
			if (n > x.length) {
				slideIndex = 1
			}
			if (n < 1) {
				slideIndex = x.length
			}
			for (i = 0; i < x.length; i++) {
				x[i].style.display = "none";
			}
			x[slideIndex - 1].style.display = "block";
		}
	</script>



</body>

</html>