<!doctype html>
<html lang="en">
	
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Stephanie Cervi">
	<title>Sample Dex || Living Pok&eacute;Dex Tracker</title>

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
			<p class="lead text-muted">This is a sample dex to show what the caught/not caught difference would be.  Caught Pok&eacute;mon will be full color with names under them, and Pok&eacute;mon that haven't yet been caught will be very faint.</p>
            <p>Click on a Pok&eacute;mon to toggle Caught on or off.</p>
		</div>
	</section>
	
	<!-- National dex -->
	<div class="container">
		
		<h2 class="dex-heading">National Dex</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#national-dex" aria-expanded="true" aria-controls="collapse-national">Show/Hide</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse show" id="national-dex">
			
			<?php
				$dextype = 'normal';
				$maxBoxes = 30;
				for ($i = 0; $i < $maxBoxes; $i++){
					$boxNum = $i + 1;
					include 'php/printDex.php';
				}
			?>
			
		</div>
        
        <div class="clear"></div>
		
		<h2 class="dex-heading">Alt forms and regional variants</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#alt-forms" aria-expanded="true" aria-controls="collapse-alt-forms">Show/Hide</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse show" id="alt-forms">
			
			<?php
				$dextype = 'normal';
				include 'php/printDexAlt.php';
			?>
			
		</div>
        
        <hr size="1" />
        
        <div class="clear"></div>
		
		<h2 class="dex-heading">Shiny National Dex</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#national-dex-shiny" aria-expanded="true" aria-controls="collapse-national-shiny">Show/Hide</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse" id="national-dex-shiny">
			
			<?php
				$dextype = 'shiny';
				$maxBoxes = 30;
				for ($i = 0; $i < $maxBoxes; $i++){
					$boxNum = $i + 1;
					include 'php/printDex.php';
				}
			?>
			
		</div>
        
        <div class="clear"></div>
		
		<h2 class="dex-heading">Shiny alt forms and regional variants</h2>
        
        <h3 class="show-hide"><button class="btn btn-link" type="button" data-toggle="collapse" data-target="#alt-forms-shiny" aria-expanded="true" aria-controls="collapse-alt-forms-shiny">Show/Hide</button></h3>
        
        <div class="clear"></div>

		<div class="card-deck collapse" id="alt-forms-shiny">
			
			<?php
				$dextype = 'shiny';
				include 'php/printDexAlt.php';
			?>
			
		</div>
		
	</div>
	
</main>

<?php include 'php/footer.php' ?>
    
<script>
    document.getElementById("nav-sample").classList.add("active");
</script>
    
<script>
    function changeCaughtState (divID) {
        document.getElementById(divID).classList.toggle("caught");
    }
</script>
	
</html>
