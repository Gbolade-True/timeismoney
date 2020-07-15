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
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$msg = 'Please use a valid email';
			$msgClass = 'alert-danger';
		} else {
			$toEmail = $email;
			$subject = 'Subscription Confirmation';
			$body = '<h2>Thank you for Subscribing to our site </h2>
					
					<p>You will be receiving a follow up email very soon.</p><br/>
					<p>Thank you.</p>';
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-Type:text/html;charset=UTF-8" . "
					\r\n";
			$headers .= "From: Time is Money!";


			if (mail($toEmail, $subject, $body, $headers)) {
				$msg = 'Success... We have sent you an email';
				$msgClass = 'alert-success';
			} else {
				$msg = 'Your email has not been sent...';
				$msgClass = 'alert-danger';
			}
		}
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
	<link rel="stylesheet" href="./assets/css/clock.css" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Sansita&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

	<title>Document</title>


</head>

<body>
	<div class="Landing-Page" id="fullpage">
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
				<h1 class="fancy">LAUNCHING IN...</h1>
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

		<section class="clocko">
			<div id="clock">
				<ul id="time">

					<li class="ts"><i class="fa fa-usd" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-gbp" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-usd" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-gbp" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-usd" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-gbp" aria-hidden="true"></i></li>
					<li class="ts"><i class="fa fa-gbp" aria-hidden="true"></i></li>
					<li>Time</li>
					<li>is</li>
					<li>Money</li>
				</ul>
				<div id="second">Time</div>
				<div id="minute">is</div>
				<div id="hour">Money</div>
			</div>

		</section>

		<section class="app-preview">
			<h1>APP PREVIEW</h1>

			<section id="section-carousel">
				<ul class="carousel">
					<li class="items main-pos" id="1">
						<div class="app-image">
							<img src="./assets/images/Desktop - 1APP.png" alt="" />
						</div>
					</li>
					<li class="items right-pos" id="2">
						<div class="app-image">
							<img src="./assets/images/Desktop - 2APP.png" alt="" />
						</div>
					</li>
					<li class="items back-pos" id="3">
						<div class="app-image">
							<img src="./assets/images/Desktop - 3APP.png" alt="" />
						</div>
					</li>
					<li class="items back-pos" id="4">
						<div class="app-image">
							<img src="./assets/images/Desktop - 7APP.png" alt="" />
						</div>
					</li>
					<li class="items back-pos" id="5">
						<div class="app-image">
							<img src="./assets/images/Desktop - 4APP.png" alt="" />
						</div>
					</li>
					<li class="items back-pos2" id="6">
						<div class="app-image">
							<img src="./assets/images/Desktop - 5APP.png" alt="" />
						</div>
					</li>
					<li class="items left-pos" id="7">
						<div class="app-image">
							<img src="./assets/images/Desktop - 6APP.png" alt="" />
						</div>
					</li>
				</ul>
				<span>
					<i class="fa fa-chevron-left" id="prev" aria-hidden="true"></i>
					<i class="fa fa-chevron-right" id="next" aria-hidden="true"></i>
				</span>
			</section>
		</section>

		<div class="about-header">
			<h1>ABOUT US</h1>
		</div>
		<section class="about-us">
			<div class="about-info1">
				<div class="red-line"></div>
				<p>
					We have successfully created a bot that estimates your potential salary per gour with respect to your skills.
				</p>
			</div>
			<div class="about-info2">
				<p>
					We also helps you to find your deservable job and keeps you updates with latest job news.
				</p>
				<div class="red-line"></div>
			</div>
		</section>
		<div class="about-footer">
			<p>Email: timeismoney@hng.tech</p>
		</div>
		<section class="stay-connected">
			<div class="follow">
				<h1>Follow us on</h1>
			</div>
			<div class="social-icons">
				<i class="fa fa-instagram" aria-hidden="true"></i>
				<i class="fa fa-facebook" aria-hidden="true"></i>
				<i class="fa fa-twitter" aria-hidden="true"></i>
				<i class="fa fa-linkedin" aria-hidden="true"></i>
			</div>
			<div class="stay-tuned">
				<h1>STAY TUNED TO KNOW MORE</h1>
			</div><br />

			<div class="line"></div>
			<div class="copyright">
				<h1>&copy; Copyright 2020 | TIME IS MONEY</h1>
			</div>
		</section>

		<!-- <section class="stay-connected"></section> -->
	</div>

	<script src="./assets/js/main.js"></script>
	<script src="./assets/js/clock.js"></script>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="./assets/js/animateP.js"></script>
	<script src="./assets/js/countdown.js"></script>
</body>

</html>