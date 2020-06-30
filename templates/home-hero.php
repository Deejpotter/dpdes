<!-- 
	-----EXAMPLE-----
	$bgColour = "black";
	$textColour = "primary";
	$bgImage = "";
	$sectionH1 = "Astrid";
	$sectionH2 = "Cute and crazy";
	$otherClasses = "";
	include "templates/home-hero.php"
 -->

 <section class="hero has-background-<?php echo $bgColour ?> has-text-<?php echo $textColour ?> is-medium has-text-centered <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-<?php echo $textColour ?> is-size-1"><?php echo $sectionH1 ?></h1>
      <h2 class="subtitle has-text-<?php echo $textColour ?> is-size-4"><?php echo $sectionH2 ?></h2>
	  <i class="fas fa-chevron-down"></i>
    </div>
  </div>
</section>
	