

<?php
// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['subc'])) {

	// Sanitize inputs
	$name     = htmlspecialchars(trim($_POST['name'] ?? ''));
	$email    = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
	$mobile   = htmlspecialchars(trim($_POST['mobile'] ?? ''));
	$subject  = htmlspecialchars(trim($_POST['subject'] ?? ''));
	$message  = nl2br(htmlspecialchars(trim($_POST['msg'] ?? '')));
	$recaptcha = $_POST['g-recaptcha-response'] ?? '';

	// Validate fields
	if (!$name || !$email || !$mobile || !$subject || !$message) {
		//header("Location: contact-us.php?error=" . urlencode("All fields are required."));
		echo "<script>window.location.href='contact-us.php?error=" . urlencode("All fields are required.") . "';</script>";
		exit;
	}

	// reCAPTCHA verification
	$secret_key = '6LdwFm0rAAAAADCWE2yEgBT-ukyUGsznffmZIh-Z';
	$verify_url = "https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha}";
	$verify_response = file_get_contents($verify_url);
	$response_data = json_decode($verify_response);

	if (!$response_data || !$response_data->success) {
		echo "<script>window.location.href='contact-us.php?error=" . urlencode("reCAPTCHA verification failed.") . "';</script>";
		//header("Location: contact-us.php?error=" . urlencode("reCAPTCHA verification failed."));
		exit;
	}

	// Email settings
	// $to        = "info@alshurooq.ae";

	$to        = "info@alshurooq.ae";
	$from      = $email;
	$fromName  = $name;

	$headers = implode("\r\n", [
		"MIME-Version: 1.0",
		"Content-type: text/html; charset=utf-8",
		"From: {$fromName} <{$from}>"
	]);

	// Load email template
	$html = file_get_contents("mail.html");
	if (!$html) {
		echo "<script>window.location.href='contact-us.php?error=" . urlencode("Unable to load mail template.") . "';</script>";
		// header("Location: contact-us.php?error=" . urlencode("Unable to load mail template."));
		exit;
	}

	// Replace placeholders
	$html = str_replace(
		['{name}', '{email}', '{mobile}', '{message}'],
		[$name, $email, $mobile, $message],
		$html
	);

	// Send email
	if (mail($to, $subject, $html, $headers)) {
		echo "<script>window.location.href='contact-us.php?error=" . urlencode("Thank you for your enquiry. We will get back to you shortly.") . "';</script>";
		// header("Location: contact-us.php?success=" . urlencode("Thank you for your enquiry. We will get back to you shortly."));
		exit;
	} else {
		echo "<script>window.location.href='contact-us.php?error=" . urlencode("Failed to send email. Please try again later.") . "';</script>";
		// header("Location: contact-us.php?error=" . urlencode("Failed to send email. Please try again later."));
		exit;
	}
}
?>




