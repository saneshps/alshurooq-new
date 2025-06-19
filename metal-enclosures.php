<!DOCTYPE html>
<html lang="en">

<head>


 
	<title> Get Top Quality Electrical,Metal Enclosures in Dubai,UAE|Al Shurooq  </title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="Metal Enclosures">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Get Top Quality Metal & Electrical Enclosures in Dubai,UAE .Our Metal & Electrical Enclosures are robust,offering exceptional protection for electronic devices">

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
			<a href="index.php">HOME</a><span> / </span><a href="products.php" class="">PRODUCTS</a>
			<span> / </span><a class="act">Fabrication</a><span> / </span><a href="metal-enclosures.php" class="act-f"> Metal Enclosures & Fire Cabinets </a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php $page = 'prod-2';
					include 'product-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 product-right">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="img/product/metal-enclosures-1.png" style="width:100%">
						<img class="mySlides" src="img/product/metal-enclosures-2.png" style="width:100%">

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<h3 class="cl"> Diverse Range of Electrical Enclosures </h3>
					<p> Positioned as a leading manufacturer, our specialization lies in crafting a diverse range of electrical enclosures.
						This comprehensive lineup includes LV Switchgear Panels, Package Substations, Enclosures for Cast Resin Transformers
						(CRT), Stainless Steel & Aluminium Enclosures, Control Cubicles, Distribution Boards, Marshalling Boxes, and more.
					</p>
					<h4> Cutting-Edge CNC Machinery: Precision Manufacturing </h4>
					<p> At the core of our manufacturing prowess is cutting-edge CNC machinery. This technology empowers us not only
						in the production of standard electrical enclosures but also extends our capabilities to craft bespoke solutions, including Control Panels and various metal cabinets tailored for a multitude of applications.
					</p>
					<h4> Robust Metal Enclosures for Unparalleled Protection </h4>
					<p> Our Metal Enclosures are meticulously engineered to be robust and resilient, offering exceptional protection for electronic devices. Crafted from steel, these enclosures showcase remarkable resistance to fire, pests, and corrosion. Their durability equips them to withstand the rigors of extreme environmental conditions, be it hot climates or wet climates.
					</p>
					<h4> Versatility and Adaptability in Manufacturing </h4>
					<p> Beyond the core electrical enclosures, our capabilities span the entire spectrum of metal cabinets required for diverse applications. This versatility and adaptability in manufacturing ensure that we can meet the specific needs of our clients across various industries, providing solutions that are not only functional but also tailored to precise requirements.
					</p>
					<p> In the realm of electrical enclosures, our commitment to precision, durability, and adaptability shines through. From standard LV Switchgear Panels to bespoke Control Panels, our manufacturing excellence ensures that our clients receive top-tier solutions that align seamlessly with their unique requirements.
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