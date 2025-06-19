<?php
session_start();
unset($_SESSION['message']);
if (isset($_REQUEST['subc'])) {
	// (A) EMAIL SETTINGS
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$subject = $_POST['subject'];
	$message = nl2br($_POST['msg']);

	$to = "info@alshurooq.ae";
	$from = $email;
	//$cc = "support@alshurooq.ae";
	$fromName = $name;

	$subject = $subject;
	$head = implode("\r\n", [
		"MIME-Version: 1.0",
		"Content-type: text/html; charset=utf-8",
		"From: " . $fromName . "<" . $from . ">"
	]);
	//,"Cc: " . $cc

	// (B) HTML TEMPLATE
	// (B1) READ INTO STRING
	$html = file_get_contents("mail.html");

	// (B2) STRING REPLACE
	$html = str_replace("{name}", $name, $html);
	$html = str_replace("{email}", $email, $html);
	$html = str_replace("{mobile}", $mobile, $html);
	$html = str_replace("{message}", $message, $html);

	// (C) SEND!
	$result = mail($to, $subject, $html, $head);
	if ($result) {
		$_SESSION['message'] = "Thank you for your enquiry. We will get back to you shortly";
	} else {
		$_SESSION['fail'] = "Thank you for your enquiry. We will get back to you shortly";
	}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>



	<title> Contact Al Shurooq Industries LLC: For Quality Fabrication Solutions </title>
	<link rel="shortcut icon" href="img/favicon.png">
	<meta charset="utf-8">
	<meta name="keywords" content="Contact Us">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="We are here to assist you with expert stainless steel fabrication services. Contact us today for custom solutions at +971 4 42 55988 or info@alshurooq.ae">

	<!--  Developed by - bigleap -->

	<!--***************************************-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/alshurooq.css">
	<link rel="stylesheet" href="css/contact.css">
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
	<?php $page = 'contact';
	include 'header-sub.php'; ?>

	<!-- banner -->
	<section id="banner-ab">
		<div class="ban-cap">
			<!-- <h2>About Us</h2> -->
			<a href="index.php">HOME</a><span> / </span><a href="" class="act-f"><b>CONTACT</b></a>
		</div>


	</section>

	<!-- al-about -->
	<section id="al-product">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h2>Get In Touch</h2>

					<p> Al Shurooq Industries L.L.C., a certified company with ISO 9001:2015, ISO 14001:2015,
						and ISO 45001:2018 accreditations, specializes in Steel Fabrication and Machining.
						With the capability and resources to deliver high-quality solutions, we serve diverse industries,
						including Power Generation, Oil & Gas, Steel Construction, Food Processing, Machine Building,
						Agricultural and Water Management, Prototyping, Electric Vehicle Components Manufacturing,
						Solar Panel Structures, Battery and Power Pack Assemblies, and General Mechanical Industries.

					</p>
				</div>

				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="addr">
						<h3>Head office</h3>
						<p>Al Shurooq Industries LLC <br>
							PO Box – 29249 Saih Shuaib 3, <br>
							Dubai Industrial City, Dubai, UAE</p>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="addr">
						<ul class="f-contact">
							<li> <span> Phone </span> <a href="tel:97144255988"> <span class="colnm"> : </span> +971 4 42 55988 </a> </li>
							<li> <span> Fax </span> <a href="tel:97144298089"> <span class="colnm"> : </span> +971 4 42 98089 </a> </li>
							<li> <span> Mobile </span> <a href="tel:971552479006"> <span class="colnm"> : </span> +971 55 247 9006 </a> </li>
						</ul>

					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-12">
					<div class="addr">


						<ul class="f-contact">
							<li> <span> Email </span> <a href="mailto:info@alshurooq.ae"> <span class="colnm"> : </span> info@alshurooq.ae </a> </li>
							<li> <span> Web Site </span> <a href="http://alshurooq.ae/"> <span class="colnm"> : </span> www.alshurooq.ae </a> </li>
						</ul>
					</div>
				</div>






			</div>
		</div>
	</section>

	<section id="contact-form">
		<div class="container-fluid">

			<div class="row">

				<div class="col-lg-6">
					<div class="row">
						<div class="col-md-12">
							<h2>Quick Enquiry</h2>
							<p>Brief us your requirements below, and let's connect</p>

						</div>

						<?php
						if (isset($_SESSION['message'])) { ?>
							<style>
								.alert-warning {
									color: #ffffff;
									background-color: #017ac9;
									border-color: #017ac9;
								}
							</style>

							<div class="alert alert-warning alert-dismissible" role="alert" style="padding: 18px;">
								<strong><?php echo $_SESSION['message'] ?>!</strong>
								<!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
								<!--  <span aria-hidden="true">&times;</span>-->
								<!--</button>-->
							</div>


						<?php  }
						if (isset($_SESSION['fail'])) { ?>
							<style>
								.alert-warning {
									color: #ffffff;
									background-color: #017ac9;
									border-color: #017ac9;
								}
							</style>

							<div class="alert alert-warning alert-dismissible" role="alert" style="padding: 18px;">
								<strong><?php echo $_SESSION['fail'] ?>!</strong>
								<!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">-->
								<!--  <span aria-hidden="true">&times;</span>-->
								<!--</button>-->
							</div>


						<?php  } ?>

						<form action="" method="post">


							<div class="col-md-6">
								<input type="text" id="fname" name="name" placeholder="Firstname.." required="">
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

								<textarea id="subject" name="msg" placeholder="Message" style="height:200px" required=""></textarea>
							</div>
							<div class="col-md-12">
								<input type="submit" value="Send mail" name="subc">
							</div>
						</form>


					</div>
				</div>

				<div class="col-lg-6">
					<div class="row hi-top">
						<div class="col-md-12">
							<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d57927.958382287776!2d55.059966!3d24.846856!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf07779337b82423!2sAL%20SHUROOQ%20INDUSTRIES!5e0!3m2!1sen!2sae!4v1614584692446!5m2!1sen!2sae" width="100%" height="450" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy"></iframe>
						</div>
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