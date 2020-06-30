<?php 
$fileLevel = "";
$title = "Your personal web designer | Deej Potter Designs";
include "templates/header.php" 
?>

<main id="main">
	
	<!-- Hero section -->
	<?php
		$bgColour = "black";
		$textColour = "primary";
		$bgImage = "";
		$sectionH1 = "Astrid";
		$sectionH2 = "Cute and crazy";
		$otherClasses = "";
		include "templates/home-hero.php"
	?>

	<!-- Basic section -->
	<?php
		$bgColour = "light";
		$textColour = "black";
		$bgImage = "";
		$sectionH2 = "I’m a cute kitty cat";
		$sectionP = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!";
		$otherClasses = "";
		include "templates/basic-section.php"
	?>

	<!-- Three col section -->
	<?php
		$bgColour = 'light';
		$textColour = 'black';
		$bgImage = '';
		$col1Icon = 'fas fa-cat';
		$col1H2 = 'I’m a cute kitty cat';
		$col1P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		$col2Icon = 'fas fa-paw';
		$col2H2 = 'Leaving my paw print';
		$col2P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		$col3Icon = 'fas fa-dog';
		$col3H2 = 'No dogs allowed';
		$col3P = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores? Id, similique!';
		include 'templates/three-col.php'
	?>
		
	<?php
		$bgColour = "info";
		$textColour = "black";
		$bgImage = "";
		$sectionH2 = "I was in cats";
		$sectionP = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Porro necessitatibus voluptatum, excepturi consequatur optio in fugit dignissimos aliquam recusandae laborum consectetur labore sunt quisquam nostrum repellat voluptatem maiores?";
		$buttonColour = "black";
		$sectionButtonLink = "contact.php";
		$sectionButtonText = "Do cat stuff";
		$otherClasses = "";
		include "templates/button-section.php"
	?>
	
</main>

<?php include "templates/footer.php" ?>