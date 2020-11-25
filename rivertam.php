<!doctype html>
<html lang="en">
	
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Stephanie Cervi">
	<title>RiverTam's Dex || Living Pok&eacute;Dex Tracker</title>

	<!-- Bootstrap core CSS -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="/css/style.css" rel="stylesheet">

	<!-- Favicons -->
	<link rel="apple-touch-icon" href="/assets/favicons/apple-touch-icon.png" sizes="180x180">
	<link rel="icon" href="/assets/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
	<link rel="icon" href="/assets/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
	<link rel="icon" href="/assets/favicons/favicon.ico">
	<meta name="msapplication-config" content="/docs/4.4/assets/img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#563d7c">

</head>

<body>
	
<?php include 'php/header.php' ?>

<main role="main">
    
    <section class="jumbotron text-center">
		<div class="container">
			<p class="lead text-muted">RiverTam's Living Pokedex</p>				
		</div>
	</section>
    
    <?php include "php/usage-key.php" ?>
	
	<div class="container">
		
		<h2 class="dex-heading">National Dex</h2>
        
        <h3 class="show-hide">
            <button class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse-national" id="collapse-national" onclick="changeCollapseState('collapse-national', 'national-dex')">Collapse</button>
            <button class="btn btn-link" type="button" aria-expanded="true" aria-controls="caught-national" id="caught-national" onclick="changeDexCaughtState('national-dex')">Toggle All Caught/Uncaught</button>
        </h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse show" id="national-dex">
			
			<?php
				$dextype = 'normal';
                include 'php/printDexDB.php';
			?>
			
		</div>
        
        <div class="clear"></div>
		
		<h2 class="dex-heading">Alt Forms</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse-alt" id="collapse-alt" onclick="changeCollapseState('collapse-alt', 'alt-dex')">Collapse</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse show" id="alt-dex">
			
			<?php
				$dextype = 'normal';
                include 'php/printDexDBAlt.php';
			?>
			
		</div>
		
		<h2 class="dex-heading">Shiny National Dex</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse-shiny-national" id="collapse-shiny-national" onclick="changeCollapseState('collapse-shiny-national', 'shiny-national-dex')">Expand</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse" id="shiny-national-dex">
			
			<?php
				$dextype = 'shiny';
                include 'php/printDexDB.php';
			?>
			
		</div>
        
        <div class="clear"></div>
		
		<h2 class="dex-heading">Shiny Alt Forms</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" aria-expanded="true" aria-controls="collapse-shiny-alt" id="collapse-shiny-alt" onclick="changeCollapseState('collapse-shiny-alt', 'shiny-alt-dex')">Expand</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse" id="shiny-alt-dex">
			
			<?php
				$dextype = 'shiny';
                include 'php/printDexDBAlt.php';
			?>
			
		</div>
		
	</div>
	
</main>

<?php include 'php/footer.php' ?>
    
<script>
    let caughtToggle = document.getElementsByClassName("dex-entry");
    for (i = 0; i < caughtToggle.length; i++) {
        caughtToggle[i].classList.add("caught");
    }
    let completeBoxes = [
        
    ];
    for (i = 0; i < completeBoxes.length; i++) {
        document.getElementById(completeBoxes[i]).classList.remove("show");
    }
</script>
    
<script>
    
    let movelist = [
        
    ];

    let wishlist = [
        'usageKey-notCaught',
        'usageKey-trading',
        'usageKey-place'
    ];
    
    for (i = 0; i < wishlist.length; i++) {
        document.getElementById(wishlist[i]).classList.remove("caught");
    }
    
    for (i = 0; i < movelist.length; i++) {
        document.getElementById(movelist[i]).classList.remove("caught");
        document.getElementById(movelist[i]).classList.add("place");
    }
    
</script>
	
</html>
