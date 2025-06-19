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
	<link rel="stylesheet" href="css/career.css">
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
	<?php $page = 'career';
	include 'header-sub.php'; ?>

	<!-- banner -->
	<section id="banner-ab">

		<div class="ban-cap">
			<h2>Career</h2>
			<a href="index.php">HOME</a><span> / </span><a href="" class="act">CAREER</a>
		</div>


	</section>



	<!-- al-about -->
	<section id="al-about">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<h3>
						Careers with Al Shurooq
					</h3>
					<ul class="uu-l">
						<li>an iron core which serves as a magnetic conductor.
						</li>
						<li>a primary winding or coil of wire and.</li>
						<li>a secondary winding or coil of wire.</li>
					</ul>
					<!-- <a href="" class="read rh"> Read More</a> -->
					<h4><span>Send your CV</span></h4>
					<p class="wi">We are looking for top talent in all areas to make a significant contribution to our products, technology, and company. If you’re passionate about technology, maniacally focused on customers, and fearless about leading a transformation, you’ve come to the right place. To apply, please email your resume and a cover letter to hr@asind.ae.</p>
				</div>

			</div>
		</div>
	</section>



	<section id="contact-form">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>Send your CV</h2>
					<p>Brief us your requirements below, and let's connect</p>

				</div>
			</div>


			<div class="row">
				<form action="" method="post">


					<div class="col-md-6">
						<input type="text" id="fname" name="firstname" placeholder="Firstname.." required="">
					</div>

					<div class="col-md-6">
						<input type="email" id="lname" name="email" placeholder="E-mail.." required="">
					</div>


					<div class="col-md-6">
						<input type="text" id="lname" name="mobile" placeholder="Mobile.." required="">
					</div>

					<div class="col-md-6">
						<input type="text" id="lname" name="subject" placeholder="Subjects.." required="">
					</div>
					<div class="col-md-12">
						<input class="fileup uploadfile" type="File" style="" required="" name="images" placeholder="Use doc, docx, pdf">
					</div>

					<div class="col-md-12">

						<textarea id="subject" name="msg" placeholder="Message" style="height:200px" required=""></textarea>
					</div>

					<div class="col-md-12">
						<input type="submit" value="Send mail" name="subc">
					</div>
				</form>


			</div>





		</div>
	</section>




	<!-- footer -->
	<?php include 'footer.php'; ?>


	<script type="text/javascript" src="js/alshurooqModules.js"></script>

</body>

</html>