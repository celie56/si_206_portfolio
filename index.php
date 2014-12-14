<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Elie Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php include "style.html"; ?>
		<?php include "scripts.html"; ?>
		<?php include "submit.php"; ?>
	</head>
	<body>
		<div class="container">
			<header class="row head">
				<div class="one-third column">
				</div>
				<div class="two-thirds column">
					<h1>Chris Elie</h1>
					Thank you for visiting my site, please click on one of the headers below to learn more.
					<br>
					Quick Links: 
					<a href="mailto:celie56@gmail.com">Email Me</a>
					<a href="https://github.com/celie56">Github</a>
				</div>
			</header>
			<div class="row myrow">
				<div class="two columns">
					<h2><a id="about" href="#" class="choice">About</a></h2>
				</div>
				<div class="ten columns">
				</div>
			</div>
			<div class="row myrow">
				<div class="about shide">
					<?php include "pages/about.html"; ?>
				</div>
			</div>
			<div class="row myrow">
				<div class="two columns">
					<h2><a id="resume" class="choice" href="#">Resume</a></h2>
				</div>
				<div class="ten columns">
				</div>
			</div>
			<div class="row myrow">
				<div class="resume shide">
					<?php include "pages/resume.html"; ?>
				</div>
			</div>
			<div class="row myrow">
				<div class="two columns">
					<h2><a id="contact" class="choice" href="#">Contact</a></h2>
				</div>
				<div class="ten columns">
				</div>
			</div>
			<div class="row myrow">
				<div class="contact shide">
					<?php include "pages/contact.html"; ?>
				</div>
			</div>
			<div class="row myrow">
				<div class="two columns">
					<h2><a id="photos" class="choice" href="#">Photos</a></h2>
				</div>
				<div class="ten columns">
				</div>
			</div>
			<div class="row myrow">
				<div class="photos shide">
					<?php include "pages/photos.html"; ?>
				</div>
			</div>
		</div>
		<?php include "pages/footer.html" ?>
	</body>
</html>
