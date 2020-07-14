<?php
require('config/db.php');
require('config/config.php');
// Message variables


$msg = '';
$msgClass = '';
// Email form validation
if (filter_has_var(INPUT_POST, 'submit')) {
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	if (!empty($email)) {
		$msg = 'You have subscribed successfully';
		$msgClass = 'alert-success';
		// if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
		// 	$msg = 'Please use a valid email';
		// 	$msgClass = 'alert-danger';
		// } else {
		// 	$toEmail = $email;
		// 	$subject = 'Subscription Confirmation';
		// 	$body = '<h2>Thank you for Subscribing to our site </h2>
					
		// 			<p>You will be receiving a follow up email very soon.</p><br/>
		// 			<p>Thank you.</p>';
		// 	$headers = "MIME-Version: 1.0" . "\r\n";
		// 	$headers .= "Content-Type:text/html;charset=UTF-8" . "
		// 			\r\n";
		// 	$headers .= "From: Time is Money!";


		// 	if (mail($toEmail, $subject, $body, $headers)) {
		// 		$msg = 'Success... We have sent you an email';
		// 		$msgClass = 'alert-success';
		// 	} else {
		// 		$msg = 'Your email has not been sent...';
		// 		$msgClass = 'alert-danger';
		// 	}
		// }
	} else {
		$msg = 'Please fill in the field';
		$msgClass = 'alert-danger';
	}
	// $query = "INSERT INTO emails(email) VALUES('$email')";
	// if(mysqli_query($conn, $query)) {
	// 	header('Location: '.ROOT_URL. '');
	// 	$msg = 'Success... We have sent you an email';
	// 	$msgClass = 'alert-success';
	// } else {
	// 	echo 'ERROR: '. mysqli_error($conn);
	// 	$msg = 'Your email has not been sent...';
	// 	$msgClass = 'alert-danger';
	// }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./assets/css/style.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
	<title>Document</title>


</head>

<body>
	<div class="Landing-Page">
		<section class="launching">
			<div class="logo">
				<img src="./assets/images/logo.png" alt="" />
			</div>
			<div class="app-info">
				<p>
					<b>TIME IS MONEY</b><br /><br />
					A free Salary Calculating Website That Helps You to Find the Right
					Job You Deserve Based on Your Skills
				</p>
				<div class="red-line"></div>
			</div>
			<div class="countdown">
				<h1>LAUNCHING IN</h1>
				<div class="counter">
					<h1 id="counter"></h1>
				</div>
				<?php if ($msg != '') : ?>
					<div style="width: 60%; height: 60px; text-align:center; margin:auto; margin-bottom:30px" class="alert <?php echo $msgClass; ?>">
						<?php echo $msg ?>
					</div>
				<?php endif; ?>
				<div class="email-reg">
					<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
						<input type="email" placeholder="Enter your email" name="email" id="search-str" value="<?php echo isset($_POST['email']) ? $email : ''; ?>" />
						<button name="submit" type="submit">Submit</button>
					</form>
				</div>

				<div class="sub">
					<h1>
						Subscribe to get latest Information and Launching updates of our
						app
					</h1>
				</div>
			</div>

		</section>

		<section class="app-preview">
			<h1>APP PREVIEW</h1>

			<div class="app-images">
				<div class="app-image">
					<img src="./assets/images/Desktop - 1APP.png" alt="" />
				</div>
				<div class="app-image">
					<img src="./assets/images/Desktop - 2APP.png" alt="" />
				</div>
				<div class="app-image">
					<img src="./assets/images/Desktop - 3APP.png" alt="" />
				</div>
				<div class="app-image">
					<img src="./assets/images/Desktop - 7APP.png" alt="" />
				</div>
				<div class="app-image">
					<img src="./assets/images/Desktop - 4APP.png" alt="" />
				</div>
				<div class="app-image">
					<img src="./assets/images/Desktop - 5APP.png" alt="" />
				</div>
				<!-- <div class="app-image">
					<img src="./assets/images/Desktop - 6APP.png" alt="" />
				</div> -->
			</div>
		</section>

		<section class="about-us">
			<div class="about-info1">
				<div class="red-line"></div>
				<p>
					TIME IS MONEY
					A free Salary Calculating Website That Helps You to Find the Right
					Job You Deserve Based on Your Skills
				</p>
			</div>
			<div class="about-info2">
				<p>
					TIME IS MONEY
					A free Salary Calculating Website That Helps You to Find the Right
					Job You Deserve Based on Your Skills
				</p>
				<div class="red-line"></div>
			</div>
		</section>

		<!-- <section class="stay-connected"></section> -->
	</div>

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="./assets/js/main.js"></script>
	<script src="./assets/js/countdown.js"></script>
</body>

</html>