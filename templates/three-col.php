<!-- 

	-----EXAMPLE-----
	$bgColour = 'light';
	$textColour = 'dark';
	$bgImage = 'images\logoOriginal.svg';
	$col1Icon = 'fas fa-cat';
	$col1H2 = 'I’m a cute kitty cat';
	$col1P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
	$col2Icon = 'fas fa-cat';
	$col2H2 = 'I’m a cute kitty cat';
	$col2P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
	$col3Icon = 'fas fa-cat';
	$col3H2 = 'I’m a cute kitty cat';
	$col3P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
	include 'templates/three-col.php'

 -->


<section class="section has-background-<?php echo $bgColour ?> has-text-<?php echo $textColour ?> <?php echo $otherClasses ?>" style='background-image:url(<?php echo $bgImage ?>);'>
	<div class="container">
		<div class="columns has-text-centered">
		  <div class="column">
		  	<i class="<?php echo $col1Icon ?>"></i>
		  	<h2 class="is-size-3"><?php echo $col1H2 ?></h2>
			<p class="is-size-6"><?php echo $col1P ?></p>
		  </div>
		  <div class="column">
		  	<i class="<?php echo $col2Icon ?>"></i>
		  	<h2 class="is-size-3"><?php echo $col2H2 ?></h2>
			<p class="is-size-6"><?php echo $col2P ?></p>
		  </div>
		  <div class="column">
		  	<i class="<?php echo $col3Icon ?>"></i>
		  	<h2 class="is-size-3"><?php echo $col3H2 ?></h2>
			<p class="is-size-6"><?php echo $col3P ?></p>
		  </div>
		</div>
	</div>
</section>