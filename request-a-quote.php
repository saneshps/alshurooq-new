<?php
session_start();
unset($_SESSION['message']);
unset($_SESSION['fail']);

// set config
ini_set('upload_max_filesize', '15M');
ini_set('post_max_size', '300');
//Set maximum php execution time
ini_set('max_execution_time', 0);
ini_set('memory_limit', -1);

if (isset($_REQUEST['sub-req-quote']) && $_SERVER["REQUEST_METHOD"] == "POST") {
	// (A) GET FORM DATAS	
	$company = valid_input($_POST['company']);
	$customer = valid_input($_POST['customer']);
	$email = valid_input($_POST['email']);
	$phone = valid_input($_POST['phone']);
	$website = valid_input($_POST['website']);

	$rfq_reference = valid_input($_POST['rfq_reference']);
	$scope_of_work = valid_input($_POST['scope_of_work']);
	$quote_by = valid_input($_POST['quote_by']);
	$quantity = valid_input($_POST['quantity']);
	$comments = valid_input($_POST['comments']);

	// FILE Atachment
	$filesUp = $_POST['doc_file'][0];
	$filesUp = explode(",", $filesUp);

	// MAIL content prepare

	// (B) HTML TEMPLATE
	// (B1) READ INTO STRING
	$html = file_get_contents("quote-mail.html");

	// (B2) STRING REPLACE
	$html = str_replace("{company}", $company, $html);
	$html = str_replace("{name}", $customer, $html);
	$html = str_replace("{email}", $email, $html);
	$html = str_replace("{phone}", $phone, $html);
	$html = str_replace("{website}", $website, $html);

	$html = str_replace("{rfq}", $rfq_reference, $html);
	$html = str_replace("{scope}", $scope_of_work, $html);
	$html = str_replace("{quote}", $quote_by, $html);
	$html = str_replace("{quantity}", $quantity, $html);
	$html = str_replace("{comments}", $comments, $html);

	/****************************
	 * EMAIL FORMATTING
	 */
	$to = "info@alshurooq.ae";
	$subject = "Request for a quotation";
	$from = $email;
	//$cc = "support@alshurooq.ae";
	$fromName = $customer;


	// (B) GENERATE RANDOM BOUNDARY TO SEPARATE MESSAGE & ATTACHMENTS
	// https://www.w3.org/Protocols/rfc1341/7_2_Multipart.html
	$mailBoundary = md5(time());
	$mailHead = implode("\r\n", [
		"MIME-Version: 1.0",
		"Content-Type: multipart/mixed; boundary=\"$mailBoundary\"",
		"From: " . $fromName . "<" . $from . ">"
	]);
	//,"Cc: " . $cc

	// (C) DEFINE THE EMAIL MESSAGE
	$mailBody = implode("\r\n", [
		"--$mailBoundary",
		"Content-type: text/html; charset=utf-8",
		"",
		$html
	]);


	// (D) MANUALLY ENCODE & ATTACH THE FILES
	for ($i = 0; $i < count($filesUp); $i++) {
		$attach = trim($filesUp[$i]);
		if (!$attach) continue;

		$mailBody .= implode("\r\n", [
			"",
			"--$mailBoundary",
			"Content-Type: application/octet-stream; name=\"" . basename($attach) . "\"",
			"Content-Transfer-Encoding: base64",
			"Content-Disposition: attachment",
			"",
			chunk_split(base64_encode(file_get_contents($attach))),
			"--$mailBoundary"
		]);
	}
	$mailBody .= "--";

	// (C) SEND!
	$result = mail($to, $subject, $mailBody, $mailHead);
	if ($result) {
		$_SESSION['message'] = "Thank you for your quotation request. We will get back to you shortly";
	} else {
		$_SESSION['fail'] = "Thank you for your quotation request. We will get back to you shortly";
	}
}

function multi_attach_mail($input_files, $mailBoundary)
{
	$message = "";
	// Preparing attachment 
	if (!empty($input_files)) {

		for ($i = 0; $i <= count($input_files); $i++) {
			$file = trim($input_files[$i]);

			if (!empty($file)) {
				$file_name = basename($file);

				$message .= implode("\r\n", [
					"",
					"--$mailBoundary",
					"Content-Type: application/octet-stream; name=\"" . $file_name . "\"",
					"Content-Transfer-Encoding: base64",
					"Content-Disposition: attachment",
					"",
					chunk_split(base64_encode(file_get_contents($file))),
					"--$mailBoundary--"
				]);
			}
		}
	}
	return $message;
}

function valid_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
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
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="css/testim.css">
	<link rel="stylesheet" href="css/resp.css">
	<link rel="stylesheet" href="css/x-dummy.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
	<!--***************************************-->
	<style>
		.ui-datepicker-trigger {
			width: 5%;
		}

		.hasDatepicker {
			width: 92%;
			margin-right: 10px;
		}
	</style>


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
			<a href="index.php">HOME</a><span> / </span><a href="" class="act-f"><b> Request a Quote</b></a>
		</div>


	</section>


	<!-- al-about -->


	<section id="contact-form">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>REQUEST FOR A QUOTATION</h2>
				</div>
			</div>

			<form class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
				<div class="r-quote">

					<div class="row form-box">
						<div class="col-lg-6 col-md-12 form-bg">

							<h3> Contact Information </h3>

							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="company"> <span class="star"> * </span> Company : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="text" class="form-control" id="company" name="company" placeholder="Company Name" required="">

								</div>

							</div>

							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="customer"> <span class="star"> * </span> Name : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="text" class="form-control" id="customer" name="customer" placeholder="Your Name" required="">

								</div>

							</div>


							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="email"> <span class="star"> * </span> E-Mail : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="email" name="email" class="form-control" id="email" placeholder="Email Address" required="">


								</div>

							</div>

							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="phone"> <span class="star"> * </span> Mobile : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="text" name="phone" class="form-control" id="phone" placeholder="Your Phone Number" required="">


								</div>

							</div>
							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="website"> Website : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="text" name="website" class="form-control" id="website" placeholder="Your Website">


								</div>

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


						</div>

						<div class="col-lg-6 col-md-12 form-bg">

							<h3> Project Requirements </h3>


							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="rfq_ref"><span class="star"> * </span> RFQ Reference : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input type="text" class="form-control" id="rfq_ref" name="rfq_reference" placeholder="RFQ Reference" required="">

								</div>

							</div>

							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="scope_of_work"><span class="star"> * </span> Scope of Work : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">

									<textarea rows="4" class="form-control" id="scope_of_work" placeholder="Scope of Work" cols="50" name="scope_of_work" required></textarea>
								</div>

							</div>



							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="quote_by"><span class="star"> * </span> Need Quote By : </label>
								<div class="col-md-6 col-lg-7 col-sm-10" id="filterDate2">
									<input type="text" class="form-control" readonly id="quote_by" name="quote_by">
								</div>
							</div>

							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="quantity"><span class="star"> * </span> Quantity : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">
									<input class="form-control" id="quantity" name="quantity" type="number" required min="1">

								</div>

							</div>
							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="comments"> Comments : </label>

								<div class="col-md-6 col-lg-7 col-sm-10">

									<textarea rows="4" class="form-control" id="comments" placeholder="Your comments" cols="50" name="comments"></textarea>
								</div>

							</div>
							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label" for="doc_file">Attachments
								</label>
								<div class="col-md-6 col-lg-7 col-sm-10">
									<!-- <input type="file" class="form-control-file form-control" multiple id="doc_file" name="doc_file[]" onchange="Filevalidation();"> -->

									<input type="hidden" class="form-control-file form-control" multiple id="doc_file" name="doc_file[]">
									<div id="list">Please upload a file. </div>
									<input type="button" id="upBrowse" value="Browse" />
									<input type="button" id="upToggle" value="Pause OR Continue" />
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-3 col-sm-3 control-label">&nbsp;</label>
								<div class="col-md-6 col-lg-7 col-sm-10">
									<ul class="small">
										<li>Max allowed size will be 20MB.</li>
										<li>Allowed File Formats are .pdf, .jpg, .jpeg, .tif, .png, .doc, .docx, .xls, .xlsx, .dwg, .dxf, .step, .stp, .igs, .sldprt, .sldasm. .prt, .epart, .x_t, .x_b etc.</li>
										<li>if you upload multiple file, please do 1 by 1 and wait for it to be done.</li>
									</ul>
								</div>
							</div>

						</div>

						<div class="col-md-12 submit">
							<div class="form-group">
								<div>
									<input type="submit" class="btn btn-default" id="frm-submit-btn" value="Submit" name="sub-req-quote">
								</div>
							</div>
						</div>

					</div>


				</div>
			</form>
		</div>
	</section>
	<?php include 'footer.php'; ?>
	<!-- footer -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
	<script type="text/javascript" src="js/alshurooqModules.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/flow.js/2.14.1/flow.min.js"></script>

	<script type="text/javascript">
		$('li').click(function() {
			$('li').removeClass('open');
			$(this).toggleClass('open');
		})

		/*******************************************
		 * Validate DAte Format
		 *******/
		$(function() {
			$("#quote_by").datepicker({
				showOn: 'button',
				buttonImageOnly: true,
				buttonImage: './img/calendar.png',
				dateFormat: 'dd-mm-yy'
			});
		});
		// Validates that the input string is a valid date formatted as "dd-mm-yyyy"
		function isValidDate(dateString) {
			// First check for the pattern
			if (!/^\d{1,2}\/\d{1,2}\/\d{4}$/.test(dateString))
				return false;

			// Parse the date parts to integers
			var parts = dateString.split("-");
			var day = parseInt(parts[0], 10);
			var month = parseInt(parts[1], 10);
			var year = parseInt(parts[2], 10);

			// Check the ranges of month and year
			if (year < 1000 || year > 3000 || month == 0 || month > 12)
				return false;

			var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

			// Adjust for leap years
			if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0))
				monthLength[1] = 29;

			// Check the range of the day
			return day > 0 && day <= monthLength[month - 1];
		};

		/************************************************************
		 * Upload default image
		 *********/
		function Filevalidation() {

			const oFile = document.getElementById("doc_file");
			const sFile = oFile.files[0];
			const maxSize = 1024 * 1024 * 20;
			// Check if any file is selected.
			if (sFile.size > maxSize) // 20 MiB for bytes.
			{
				alert("File size must under 20MB!");
				oFile.value = "";
				return;
			}
		}
		/*********** FILE UPLOAD CHUNK ***********/

		// (C) INIT FLOWJS
		window.onload = () => {
			// (C1) NEW FLOW OBJECT
			var flow = new Flow({
				target: "3c-resumable.php",
				chunkSize: 1024 * 1024, // 1MB
				singleFile: true
			});

			if (flow.support) {
				// (C2) ASSIGN BROWSE BUTTON
				flow.assignBrowse(document.getElementById("upBrowse"));
				// OR DEFINE DROP ZONE
				// flow.assignDrop(document.getElementById("upDrop"));

				// (C3) ON FILE ADDED
				flow.on("fileAdded", (file, evt) => {
					let maxSize = 1024 * 1024 * 20;
					if (file.size > maxSize) {
						alert('You can upload file size upto 20 MB at a time. Please select smaller files');
						return false;
					}
					let fileslot = document.createElement("div");
					fileslot.id = file.uniqueIdentifier;
					fileslot.innerHTML = `${file.name} (${file.size}) - <strong>0%</strong>`;
					document.getElementById("list").appendChild(fileslot);
				});

				// (C4) ON FILE SUBMITTED (ADDED TO UPLOAD QUEUE)
				flow.on("filesSubmitted", (arr, evt) => flow.upload());

				// (C5) ON UPLOAD PROGRESS
				flow.on("fileProgress", (file, chunk) => {
					let progress = (chunk.offset + 1) / file.chunks.length * 100;
					progress = progress.toFixed(2) + "%";
					let fileslot = document.getElementById(file.uniqueIdentifier);
					fileslot = fileslot.getElementsByTagName("strong")[0];
					fileslot.innerHTML = progress;

					$('#frm-submit-btn').attr('disabled', 'true');
					$('#upBrowse').attr('disabled', 'true');
				});

				// (C6) ON UPLOAD SUCCESS
				flow.on("fileSuccess", (file, message, chunk) => {
					// existing files
					let existing = [];
					var input = document.getElementsByName('doc_file[]');

					for (var i = 0; i < input.length; i++) {
						var p = input[i];
						existing.push(p.value);
					}
					// new path added
					existing.push(message);
					document.getElementById("doc_file").value = existing;

					let fileslot = document.getElementById(file.uniqueIdentifier);
					fileslot = fileslot.getElementsByTagName("strong")[0];
					fileslot.innerHTML = "DONE";

					$('#frm-submit-btn').removeAttr("disabled");
					$('#upBrowse').removeAttr("disabled");
				});

				// (C7) ON UPLOAD ERROR
				flow.on("fileError", (file, message) => {
					let fileslot = document.getElementById(file.uniqueIdentifier);
					fileslot = fileslot.getElementsByTagName("strong")[0];
					fileslot.innerHTML = "ERROR";

					$('#frm-submit-btn').removeAttr("disabled");
					$('#upBrowse').removeAttr("disabled");
				});

				// (C8) PAUSE/CONTINUE UPLOAD
				document.getElementById("upToggle").onclick = () => {
					if (flow.isUploading()) {
						flow.pause();
					} else {
						flow.resume();
					}
				};
			}
		};
	</script>
</body>

</html>