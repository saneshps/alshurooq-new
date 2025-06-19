<!DOCTYPE html>
<html lang="en">

<head>



	<title>Al Shurooq</title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">

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
			<a href="index.php">HOME</a><span> / </span><a href="products.php" class="">PRODUCTS</a> <span> / </span><a class="act">Fabrication</a><span> / </span><a href="bakery-equipments.php" class="act-f">Bakery Equipments</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-12 col-xs-12">
					<?php $page = 'prod-8';
					include 'product-list.php'; ?>
				</div>
				<div class="col-md-8 col-sm-12 col-xs-12">
					<div class="w3-content w3-display-container">
						<img class="mySlides" src="img/bakery-equipments.jpg" style="width:100%">
						<img class="mySlides" src="img/bakery-equipments1.jpg" style="width:100%">
						<!--  <img class="mySlides" src="img/bakery-equipments2.jpg" style="width:100%"> -->
						<!--  <img class="mySlides" src="img/steel-structures3.jpg" style="width:100%"> -->

						<button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
						<button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
					</div>
					<h2 class="cl">Bakery Equipments</h2>
					<p>We are equipped with all type of CNC machines that will enable us to undertake the various requirements of the food processing industry. Our product line includes Rotary Rack Ovens, Mixers, Dough Moulding Machines, Dough Cutters, Donut Fryers and Automatic Lines in UAE. We have expertise, manufacturing capability and other resources to manufacture and support the customers in the region with European quality machines and equipments. We use all electrical components and drive Motors from reputed brands in Europe. Coupled with a strong local technical support, we strongly believe that we can provide value for money and complete peace of mind to the customers.</p><!-- 
					<p>All the tanks and components are shot blasted according to the surface quality Sa 2.5 and painted according to ISO 12944-5:2007 standards.</p>
					<h3>There are three basic parts of a Transformer Tank:</h3>
					<ul class="uu-l">
						<li>an iron core which serves as a magnetic conductor.
</li>
						<li>a primary winding or coil of wire and.</li>
						<li>a secondary winding or coil of wire.</li>
					</ul>
					
					<p>The Transformer Tanks are used to hold, protect, cool the winding and core in one Electrical distributor transformer. In the oil immersed transformer tanks, core is inside the transformer cooling oil.</p> -->


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