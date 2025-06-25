<!DOCTYPE html>
<html lang="en">

<head>



	<title> Structural steel fabrication company in Dubai, UAE | Alshurooq </title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="steel structures">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Explore top-tier structural steel fabrication by Alshurooq in UAE. Specialists in bridge structures, pre-engineered buildings, and offshore structures. Contact us for inquiries.">
	<link rel="canonical" href="https://alshurooq.ae/steel-structures.php">
	<!--  Developed by - bigleap -->

	<!--***************************************-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/alshurooq.css">
	<link rel="stylesheet" href="css/products-detail.css">
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
	<?php $page = 'products';
	include 'header-sub.php'; ?>

	<!-- banner -->
	<section id="banner-ab">
		<div class="ban-cap">
			<!-- <h2>About Us</h2> -->
			<a href="index.php">HOME</a><span> / </span><a href="products.php" class="">PRODUCTS</a> <span> / </span><a class="act">Fabrication</a><span> / </span><a href="steel-structures.php" class="act-f">Steel Structures</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php $page = 'prod-3';
					include 'product-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 product-right">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="img/product/Steel-Structures-1.png" style="width:100%">
						<img class="mySlides" src="img/product/Steel-Structures-2.png" style="width:100%">
						<img class="mySlides" src="img/product/Steel-Structures-3.png" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<h3 class="cl"> Cutting-Edge Machinery and Expertise </h3>

					<p> At the heart of our operations lies cutting-edge machinery and a wealth of expertise, positioning us as leaders in the fabrication industry. Our state-of-the-art facilities empower us to create a diverse range of structures, from light to heavy, meticulously crafted to meet the varied specifications of different industries.
					</p>
					<h4> Excellence in Hot Rolled Steel Fabrication </h4>
					<p> Our specialization centers on the fabrication of Hot Rolled Steel structures, a testament to our commitment to quality and precision. This expertise extends to diverse applications, encompassing Factory Buildings, Showrooms, Industrial Hangars, Mezzanine structures, and more. The meticulous processes embedded in our fabrication ensure that our structures not only meet but surpass industry standards.
					</p>
					<h4> Precision in Structural Steel </h4>
					<p> Within the realm of structural steel, we recognize the significance of diverse shapes and profiles. Each elongated beam, characterized by a specific cross-sectional profile, allows us to tailor steel structures with precision. This adaptability is pivotal in meeting the unique requirements of projects, ensuring our solutions seamlessly blend strength, durability, and optimal functionality. Whether for industrial applications or commercial spaces, our unwavering commitment to excellence guarantees the creation of steel structures that withstand the test of time.
					</p>



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