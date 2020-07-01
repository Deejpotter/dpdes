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
			<p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere soluta explicabo aut ad esse. Architecto nam in iusto ex impedit, qui, nostrum nesciunt sed placeat vero cupiditate ab debitis!</p>
		</div>
		<hr>
		<div class="columns is-centered has-background-success shadow-radius">
			<div class="column has-text-centered is-one-third">
				<a href="http://deejpotter.com"><h3 class="is-size-4">Deej Potter</h3></a>
				<figure class="image is-3by2 is-480x320">
					<img src="https://bulma.io/images/placeholders/480x320.png" class="shadow-radius">
				</figure>
				<p class="is-size-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque placeat, sed, doloremque nobis veniam ipsa iure eum, natus beatae sequi non! Rerum tenetur ducimus in placeat suscipit quibusdam, molestias dolorum.</p>
			</div>
			<div class="column is-1">
			</div>
			<div class="column has-text-centered is-one-third">
				<a href="http://deejpotterdesigns.com"><h3 class="is-size-4">Deej Potter Designs</h3></a>
				<figure class="image is-3by2 is-480x320">
					<img src="https://bulma.io/images/placeholders/480x320.png" class="shadow-radius">
				</figure>
				<p class="is-size-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque placeat, sed, doloremque nobis veniam ipsa iure eum, natus beatae sequi non! Rerum tenetur ducimus in placeat suscipit quibusdam, molestias dolorum.</p>
			</div>
		</div>
	</section>

	<!-- Contact section -->
	<section id="contact" class="section is-medium has-text-centered">
		<div class="container">
			<h2 class="is-size-3">Want your own site?</h2>
			<p class="is-size-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias facere soluta explicabo aut ad esse. Architecto nam in iusto ex impedit, qui, nostrum nesciunt sed placeat vero cupiditate ab debitis!</p>
			<a href="https://deejpotterdesigns.com/contact" class="button is-primary shadow-radius">Contact me here</a>
		</div>
	</section>
	
</main>

<?php include "templates/footer.php" ?>