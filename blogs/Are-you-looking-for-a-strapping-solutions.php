<!DOCTYPE html>
<html lang="en">

<head>



	<title>Al Shurooq</title>
	<link rel="shortcut icon" href="../img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

	<!--  Developed by - bigleap -->

	<!--***************************************-->
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/alshurooq.css">
	<link rel="stylesheet" href="../css/cnc-laser-cutting.css">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/testim.css">
	<link rel="stylesheet" href="../css/resp.css">


	<!--***************************************-->



</head>

<body>
	<div class="whatssap"></div>

	<a href="../https://api.whatsapp.com/send?phone=+971508993781&text=Hey%20there!%20I%20woud%20like%20to%20know%20more%20about%20your%20products." class="float" target="_blank">
		<i class="demo-icon icon-whatsapp sapp">&#xf232;</i>
	</a>

	<!-- header -->
	<?php $page = 'servi';
	include 'header.php'; ?>

	<!-- banner -->
	<section id="banner-ab">
		<div class="ban-cap">
			<!-- <h2>About Us</h2> -->
			<a href="../index.php">HOME</a><span> / </span><a href="../blogs.php" class="act-f"><b>Blogs</b></a> <span> / </span><a href="Are-you-looking-for-a-strapping-solutions.php" class="act-f">Are you looking for a strapping solution </a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">

				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="../img/cnc-laser.jpg" style="width:100%">

						<!--   <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
					  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
					</div>
					<h2 class="cl">Are you looking for a strapping solution </h2>
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>

					<!-- <h3>There are three basic parts of a Transformer Tank:</h3>
					<ul class="uu-l">
						<li>an iron core which serves as a magnetic conductor.
</li>
						<li>a primary winding or coil of wire and.</li>
						<li>a secondary winding or coil of wire.</li>
					</ul>
					 -->

				</div>

				<div class="col-md-4 col-sm-12 col-xs-12">
					<div class="container">
						<ul>
							<li>

								<div class="content">
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>
									<a href="Are-you-looking-for-a-strapping-solutions.php">Are you looking for a strapping solution</a>

								</div>
							</li>

						</ul>
					</div>
				</div>
			</div>







		</div>
	</section>



	<!-- footer -->
	<?php include 'footer.php'; ?>


	<script type="text/javascript" src="../js/alshurooqModules.js"></script>
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