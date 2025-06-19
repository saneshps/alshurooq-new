<!DOCTYPE html>
<html lang="en">

<head>



	<title> Armoured Steel|Vehicle Armour Components in Dubai,UAE|Al Shurooq </title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="Armoured Steel Solutions">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Discover our top-notch  vehicle armouring solutions  in Dubai,UAE that significantly enhance the maneuverability of armored vehicles">

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
			<a href="index.php">HOME</a><span> / </span><a href="products.php" class="">PRODUCTS</a> <span> / </span><a class="act">Vehicle Armour Components</a><span> / </span><a href="armoured-steel-solutions.php" class="act-f">Armoured Steel Solutions</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php $page = 'vehicle-1';
					include 'product-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12 product-right">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="img/product/armor-steel-1.png" style="width:100%">
						<img class="mySlides" src="img/product/armor-steel-2.png" style="width:100%">


						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<h3 class="cl"> Comprehensive Vehicle Armoring Solutions </h3>

					<p> Within our extensive portfolio, we actively participate in diverse vehicle armoring projects, offering a comprehensive suite of solutions.At the forefront of vehicle armoring endeavors, we offer a comprehensive suite of solutions, leveraging our extensive portfolio to actively engage in diverse projects.
					</p>

					<h4> Supply of Various </h4>
					<p> We provide a range of ballistic steels tailored to different threat protection levels, meticulously adhering to standards such as STANAG 4569, EN 1522, VPAM PM 2007, and more.

					</p>
					<p> Our commitment extends to providing a diverse range of ballistic steels meticulously crafted to cater to distinct threat protection levels, ensuring the highest quality in every solution.

					</p>
					<h4> Protection Kits </h4>
					<p> Our expertise extends to the supply and fabrication of blast protection kits, a critical component in ensuring optimal safeguarding against various threats.We specialize in the fabrication of blast protection kits meticulously designed to counteract specific threats faced by armored vehicles. Our focus includes:

					</p>

					<h4> a. Blast Protection </h4>
					<p> Our blast protection kits are engineered to mitigate the impact of landmine blasts, enhancing the
						safety of armored vehicles in challenging terrains.
					</p>
					<h4> b. Ballistic Protection </h4>
					<p> We excel in providing comprehensive solutions to safeguard against ballistic threats, ensuring the
						highest standards of protection for personnel and assets within armored vehicles.
					</p>

					<h4> Vehicle Integration Kits: Seamless Armor Incorporation </h4>
					<p> A hallmark of our services, our comprehensive vehicle integration kits streamline the incorporation
						of armor components into a diverse range of vehicle models. This ensures a seamless integration process
						for enhanced protection.

					</p>


					<h4> Augmenting Protection with Insert Plates </h4>
					<p> We supply insert plates meticulously designed to augment the protective capabilities of armored vehicles. These plates ensure heightened resistance against various threats, contributing to the overall resilience of the vehicle.
					</p>

					<h4> Deployable Ballistic Shields for High-Risk Scenarios </h4>
					<p> Our offerings extend to expertly crafted ballistic shields designed to provide mobile and deployable protection in high-risk scenarios, catering to the dynamic needs of armored operations.
					</p>

					<h4> Armored Hatch Components: Secure Access with Structural Integrity </h4>
					<p> Our range includes meticulously designed armored hatch components, providing secure access points while preserving the structural integrity of the armored vehicle.
					</p>

					<h4> Precision Brackets and Hinges for Robust Structures </h4>
					<p> An integral part of our offerings, precision-engineered brackets and hinges contribute to the robust structural framework of armored vehicles, ensuring durability and longevity.
					</p>

					<h4> Turret Bearing Assemblies </h4>
					<p> Specializing in the supply and fabrication of turret bearing assemblies, we provide critical components that significantly enhance the maneuverability of armored vehicles, contributing to operational efficiency. We have expertise and in house capability to manufacture turret bearing assembling to a maximum of up to 2 m in diameter.
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