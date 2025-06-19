<!DOCTYPE html>
<html lang="en">

<head>



	<title> Transformer Tank Manufacturer Company Dubai,UAE|Al Shurooq  </title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="transformer tank manufacturer">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Al Shurooq is a premier manufacturer of Transformer Tanks and associated components in UAE designed for Distribution,Cast Resin,and Power Transformer Industries">

	<!--  Developed by - bigleap -->

	<!--***************************************-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/alshurooq.css">
	<link rel="stylesheet" href="css/products-detail.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/testim.css">
	<link rel="stylesheet" href="css/resp.css">


	<!--***************************************-->



<?php include 'google_analytics.php'; ?></head>

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
			<a href="index.php">HOME</a><span> / </span><a href="products.php" class="">PRODUCTS</a> <span> / </span><a href="" class="act">Fabrication</a><span> / </span><a href="transformer-tanks-&-components.php" class="act-f">Transformer Tanks & Components</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<!-- product-list -->
					<?php $page = 'prod-1';
					include 'product-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 product-right">
					<div class="w3-content w3-display-container product-slider">
						<img class="mySlides" src="img/product/transformer-1.png" style="width:100%">
						<img class="mySlides" src="img/product/transformer-2.png" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<h3 class="cl"> Premier Manufacturer of Transformer Tanks </h3>
					<p> Positioned as a premier manufacturer in the UAE, we specialize in
						the production of Transformer Tanks and associated components.
						Our reputation for excellence extends to the comprehensive range
						of tanks designed for Distribution, Cast Resin, and Power Transformer
						Industries.

					</p>
					<h4> State-of-the-Art Sheet Metal and Plate Processing </h4>
					<p> Equipped with an impressive lineup of sheet metal and plate processing machines, our manufacturing
						capabilities allow us to produce steel tank casings of any size. This includes associated core
						fixing clamps, all meeting stringent quality requirements to ensure optimal performance.

					</p>
					<h4> Stringent Quality Standards in Manufacturing </h4>
					<p> Our manufacturing process adheres to the highest standards, guaranteeing quality and durability
						in every product. Tanks and associated components undergo meticulous shot blasting, achieving
						a surface quality of Sa 2.5. Subsequent painting follows ISO 12944-5:2007 standards,
						meeting diverse environmental and durability criteria.

					</p>

					<h4> Key Components of Transformer Tanks </h4>
					<p> Transformer Tanks consist of three fundamental parts: </p>

					<ul class="uu-l">
						<li> 1. <strong> Iron Core: </strong> Functions as a magnetic conductor. </li>
						<li> 2. <strong> Primary Winding or Coil: </strong> Comprises wire wound around the core. </li>
						<li> 3. <strong> Secondary Winding or Coil: </strong> Another layer of wire wound around the core. </li>


					</ul>

					<h4> Crucial Role in Electrical Distributor Transformers </h4>

					<p> These tanks play a pivotal role in Electrical distributor transformers, acting as containers that hold, protect,
						and facilitate the cooling of the winding and core. In the case of oil-immersed transformers, the core and coil
						assembly are submerged in transformer cooling oil, ensuring efficient heat dissipation and optimal performance.

					</p>
					<h4> Commitment to Precision and Quality </h4>
					<p> Our unwavering commitment to precision and quality underscores our standing as a trusted
						provider of Transformer Tanks and Components in the region. Clients can rely on our expertise
						to deliver products that meet the highest industry standards and contribute to the efficiency
						and reliability of transformer systems.

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