<?php 
$fileLevel = "";
$title = "Random stuff | DPDes";
include "templates/header.php" 
?>

<main id="main">
	
	<section class="hero inset-background-cover has-text-centered is-primary is-medium" style='background-image:url(<?php echo $fileLevel ?>images/contact-image-50-800x600.png);'>
	  <div class="hero-body">
		<div class="container">
		  <h1 class="title">DPDes</h1>
		  <h2 class="subtitle">A place to store websites.</h2>
		</div>
	  </div>
	</section>
	
	<section class="section">
		<div class="container">
			<h2 class="is-size-3">My other sites</h2>
			<p class="is-size-5">I set this website up to store temporary or free websites on sub domains so there is not much to see here. If you are interested in me or my work visit one of my websites below.</p>
		</div>
		<hr>
		<div class="columns is-centered has-background-success shadow-radius">
			<div class="column has-text-centered is-one-third">
				<figure class="image is-3by2 is-480x320">
					<img src="<?php echo $fileLevel ?>images/deejpotterdesignsScreenshot.png" class="shadow-radius">
				</figure>
				<a href="http://deejpotterdesigns.com"><h3 class="is-size-4">Deej Potter Designs</h3></a>
				<p class="is-size-5">Deej Potter Designs is my web design business. You can find information about web design and contact me if you like what you see and want your own website.</p>
			</div>
			<div class="column is-1">
			</div>
			<div class="column has-text-centered is-one-third">
				<figure class="image is-3by2 is-480x320">
					<img src="<?php echo $fileLevel ?>images/deejpotterScreenshot.png" class="shadow-radius">
				</figure>
				<a href="http://deejpotter.com"><h3 class="is-size-4">Deej Potter</h3></a>
				<p class="is-size-5">This is my personal website. You will find information about me and more technical stuff about web design and my personal projects.</p>
			</div>
		</div>
	</section>

	<!-- Contact section -->
	<section id="contact" class="section is-medium has-text-centered">
		<div class="container">
			<h2 class="is-size-3">Want your own site?</h2>
			<p class="is-size-5">Follow the button below to contact me and you could have your own website as soon as next week!</p>
			<a href="https://deejpotterdesigns.com/contact" class="button is-primary shadow-radius">Contact me here</a>
		</div>
	</section>
	
</main>

<?php include "templates/footer.php" ?>