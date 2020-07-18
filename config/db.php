<?php

    $hostname='d9c88q3e09w6fdb2.cbetxkdyhwsb.us-east-1.rds.amazonaws.com';
    $username='la8vx4yjlt5ihg1c';
    $password='z5avw1e8xslrmblc';
    $dbname='xuzppneny4r53hhr';

    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    //  else {
    //      echo "Connected successfully";
    //  }
?>

<!-- 
// $toEmail = $email;
			// $subject = 'Subscription Confirmation';
			// $body = '<h2>Thank you for Subscribing to our site </h2>

			// 		<p>You will be receiving a follow up email very soon.</p><br/>
			// 		<p>Thank you.</p>';
			// $headers = "MIME-Version: 1.0" . "\r\n";
			// $headers .= "Content-Type:text/html;charset=UTF-8" . "
			// 		\r\n";
			// $headers .= "From: Time is Money!";


			// if (mail($toEmail, $subject, $body, $headers)) {
			// 	$msg = 'Success... We have sent you an email';
			// 	$msgClass = 'alert-success';
			// } else {
			// 	$msg = 'Your email has not been sent...';
			// 	$msgClass = 'alert-danger';
			// } -->