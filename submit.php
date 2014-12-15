<!DOCTYPE html>
<html lang="en">
<?php
	$message = "";
	foreach($_POST as $key => $value){
		$message .= "$key: $value\n";
	}	
	if ($message != ""){
		$to = "celie56@gmail.com";
		$subject =	'Anonymous comment from portfolio';
		$headers =	'From: si_206@example.com' . "\r\n" .
					'Reply-To: si_206@example.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();

		// sorry, I don't actually want any emails from this form at this time
		// mail($to, $subject, $message, $headers);
	}
?>
	<head>
		<title>Comment Submission</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php include "style.html"; ?>
	</head>
    <body>
		<div class="container">
			<div class="row myrow">
				<h1>Thank you for submiting a comment.</h1>
				<p>You should be redirected shortly, if not please click <a href="index.php">here</a>.
			</div>
			<div class="row myrow">
				<br>
				<?php echo "$message"; ?>
			</div>
		</div>
		<script>
			window.setTimeout(function(){
				window.location.href = "index.php";
			}, 5000);
		</script>
	</body>
</html>
