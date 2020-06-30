<!-- 
	-----EXAMPLE-----
	$bgColour = "light";
	$textColour = "dark";
	$bgImage = "";
	$sectionH2 = "I’m a cute kitty cat";
	$sectionP = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!";
	$otherClasses = "";
	include "templates/basic-section.php"
 -->

 <section class="section has-background-<?php echo $bgColour ?> has-text-<?php echo $textColour ?> <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
	<div class="container">
		<h2 class="is-size-3"><?php echo $sectionH2 ?></h2>
		<p class="is-size-5"><?php echo $sectionP ?></p>
	</div>
</section>