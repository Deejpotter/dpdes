<!doctype html>
<html lang="en">

  	<head>

		<title> <?php echo $title?> </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bulma CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/bulma.css">
		<!-- Main CSS -->
		<link rel="stylesheet" href="<?php echo $fileLevel ?>css/style.css">

 	</head>


	<body>
		
		<!-- Main header for every page -->
		<nav class="navbar">
			<div class="container">
				<!-- Brand -->
				<div class="navbar-brand">
					<a class="navbar-item" href="<?php echo $fileLevel ?>index.php">
						<img src="<?php echo $fileLevel ?>images/logoOriginal.svg">
					</a>
					<a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
						<span aria-hidden="true"></span>
					</a>
				</div>
				<!-- Navbar menu -->
				<div class="navbar-menu" id="navMenu">
					<div class="navbar-start">
					</div>
					<div class="navbar-end has-text-centered">
						<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Home</a>
						<a class="navbar-item" href="<?php echo $fileLevel ?>contact.php">Cat stuff</a>
						<div class="navbar-item">
							<a class="button is-primary" href="<?php echo $fileLevel ?>contact.php"><strong>Contact me</strong></a>
						</div>
					</div>
				</div>
			</div>
		</nav>