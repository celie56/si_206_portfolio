<!DOCTYPE html>
<html lang="en">
    <head>
		<title>Elie Home</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1">
		<?php include "style.html"; ?>
		<?php include "scripts.html"; ?>
	</head>
	<body>
		<div class="container">
			<header class="row head">
				<div class="one-third column">
				</div>
				<div class="">
					<h1>Chris Elie</h1>
					<br>
					<nav>
						<a id="about" href="#" class="button choice">About</a>
						<a id="resume" class="button choice" href="#">Resume</a>
						<a id="contact" class="button choice" href="#">Contact</a> 
						<a id="photos" class="button choice" href="#">Photos</a> 
					</nav>
				</div>
			</header>
			<div class="row myrow">
				<div class="about shide">
					<?php include "pages/about.html"; ?>
				</div>
			</div>
			<div class="row myrow">
				<div class="resume shide">
					<?php include "pages/resume.html"; ?>
				</div>
			</div>
			<div class="row myrow">
				<div class="contact shide">
					<?php include "pages/contact.html"; ?>
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
