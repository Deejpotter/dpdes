<!-- 
	-----EXAMPLE-----
	$bgColour = "black";
	$textColour = "primary";
	$bgImage = "";
	$sectionH1 = "Astrid";
	$sectionP = "Cute and crazy";
	$otherClasses = "";
	include "templates/hero.php"
 -->

<section class="hero has-background-<?php echo $bgColour ?> has-text-<?php echo $textColour ?> has-text-centered <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
  <div class="hero-body">
    <div class="container">
      <h1 class="title"><?php echo $sectionH1 ?></h1>
      <h2 class="subtitle"><?php echo $sectionP ?></h2>
    </div>
  </div>
</section>