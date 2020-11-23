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
    
    <style type="text/css">

        .dex-entry {
            background-color: #ffeeee;
        }
        .caught {
            background-color: white;
        }
        .traded {
            background-color: palegreen;
        }
        
    </style>

</head>

<body>
	
<?php include '../php/header.php' ?>

<main role="main">
	
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
					include '../_archive/printDex.php';
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
				include '../_archive/printDexAlt.php';
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
					include '../_archive/printDex.php';
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
				include '../_archive/printDexAlt.php';
			?>
			
		</div>
		
	</div>
	
</main>

<?php include '../php/footer.php' ?>
    
<script>
    let caughtToggle = document.getElementsByClassName("dex-entry");
    for (i = 0; i < caughtToggle.length; i++) {
        caughtToggle[i].classList.add("caught");
    }
    let completeBoxes = [
        "collapse001",
        "collapse031",
        "collapse061",
        "collapse091",
        "collapse121",
        "collapse151",
        "collapse181",
        "collapse211",
        "collapse241",
        "collapse271",
        "collapse301",
        "collapse331",
        "collapse391",
        "collapse421",
        "collapse451",
        "collapse511",
        "collapse541",
        "collapse571",
        "collapse601",
        "collapse631",
        "collapse661",
        "collapse721",
        "collapse751",
        "collapse811",
        "collapse841",
        "collapse871",
        "collapse-alolan-forms-normal",
        "collapse-galarian-forms-normal",
        "collapse-gender-forms-normal-1",
        "collapse-gender-forms-normal-2",
        "collapse-gender-forms-normal-3",
        "collapse-gender-forms-normal-4",
        "collapse-gender-forms-normal-7"
    ];
    for (i = 0; i < completeBoxes.length; i++) {
        document.getElementById(completeBoxes[i]).classList.remove("show");
    }
</script>
    
<script>
    
    let movelist = [
        
    ];

    let wishlist = [
        "dexEntry-normal-385",
        "dexEntry-normal-386",
        "dexEntry-normal-489",
        "dexEntry-normal-490",
        "dexEntry-normal-720",
        "dexEntry-normal-807",
        "maleDexEntry-normal-404",
        "femaleDexEntry-normal-404",
        "maleDexEntry-normal-418",
        "femaleDexEntry-normal-418",
        "maleDexEntry-normal-424",
        "femaleDexEntry-normal-424",
        "femaleDexEntry-normal-445",
        "maleDexEntry-normal-457",
        "femaleDexEntry-normal-457",
        "altDexEntry-normal-025-pikachu-original-cap",
        "altDexEntry-normal-025-pikachu-johto-cap",
        "altDexEntry-normal-025-pikachu-hoenn-cap",
        "altDexEntry-normal-025-pikachu-sinnoh-cap",
        "altDexEntry-normal-025-pikachu-unova-cap",
        "altDexEntry-normal-025-pikachu-kalos-cap",
        "altDexEntry-normal-025-pikachu-alola-cap",
        "altDexEntry-normal-351-castform-rainy",
        "altDexEntry-normal-351-castform-snowy",
        "altDexEntry-normal-351-castform-sunny",
        "altDexEntry-normal-386-deoxys-normal",
        "altDexEntry-normal-386-deoxys-attack",
        "altDexEntry-normal-386-deoxys-defense",
        "altDexEntry-normal-386-deoxys-speed",
        "altDexEntry-normal-421-cherrim-sunshine",
        "altDexEntry-normal-492-shaymin-land",
        "altDexEntry-normal-492-shaymin-sky",
        "altDexEntry-normal-641-tornadus-incarnate",
        "altDexEntry-normal-641-tornadus-therian",
        "altDexEntry-normal-642-thundurus-incarnate",
        "altDexEntry-normal-642-thundurus-therian",
        "altDexEntry-normal-645-landorus-incarnate",
        "altDexEntry-normal-645-landorus-therian",
        "altDexEntry-normal-646-kyurem",
        "altDexEntry-normal-646-kyurem-black",
        "altDexEntry-normal-646-kyurem-white",
        "altDexEntry-normal-647-keldeo-ordinary",
        "altDexEntry-normal-648-meloetta-pirouette",
        "altDexEntry-normal-658-greninja",
        "altDexEntry-normal-658-greninja-ash",
        "altDexEntry-normal-670-floette-blue",
        "altDexEntry-normal-670-floette-red",
        "altDexEntry-normal-670-floette-orange",
        "altDexEntry-normal-670-floette-white",
        "altDexEntry-normal-671-florges-red",
        "altDexEntry-normal-671-florges-orange",
        "altDexEntry-normal-671-florges-blue",
        "altDexEntry-normal-671-florges-white",
        "altDexEntry-normal-720-hoopa-confined",
        "altDexEntry-normal-720-hoopa-unbound",
        "altDexEntry-normal-774-minior-meteor",
        "altDexEntry-normal-800-necrozma",
        "altDexEntry-normal-800-necrozma-dawn-wings",
        "altDexEntry-normal-800-necrozma-dusk-mane",
        "unownDexEntry-normal-11",
        "unownDexEntry-normal-13",
        "unownDexEntry-normal-14",
        "unownDexEntry-normal-17",
        "unownDexEntry-normal-24",
        "unownDexEntry-normal-25",
        "vivillonDexEntry-normal-0",
        "vivillonDexEntry-normal-1",
        "vivillonDexEntry-normal-4",
        "vivillonDexEntry-normal-7",
        "vivillonDexEntry-normal-8",
        "vivillonDexEntry-normal-9",
        "vivillonDexEntry-normal-12",
        "vivillonDexEntry-normal-13",
        "vivillonDexEntry-normal-15",
        "vivillonDexEntry-normal-16",
        "vivillonDexEntry-normal-17",
        "vivillonDexEntry-normal-18",
        "alcremieDexEntry-normal-4",
        "alcremieDexEntry-normal-5",
        "alcremieDexEntry-normal-11",
        "alcremieDexEntry-normal-12",
        "alcremieDexEntry-normal-13",
        "alcremieDexEntry-normal-14",
        "alcremieDexEntry-normal-16",
        "alcremieDexEntry-normal-17",
        "alcremieDexEntry-normal-18",
        "alcremieDexEntry-normal-19",
        "alcremieDexEntry-normal-20",
        "alcremieDexEntry-normal-21",
        "alcremieDexEntry-normal-23",
        "alcremieDexEntry-normal-24",
        "alcremieDexEntry-normal-25",
        "alcremieDexEntry-normal-26",
        "alcremieDexEntry-normal-28",
        "alcremieDexEntry-normal-29",
        "alcremieDexEntry-normal-30",
        "alcremieDexEntry-normal-31",
        "alcremieDexEntry-normal-32",
        "alcremieDexEntry-normal-33",
        "alcremieDexEntry-normal-34",
        "alcremieDexEntry-normal-35",
        "alcremieDexEntry-normal-36",
        "alcremieDexEntry-normal-37",
        "alcremieDexEntry-normal-38",
        "alcremieDexEntry-normal-39",
        "alcremieDexEntry-normal-40",
        "alcremieDexEntry-normal-41",
        "alcremieDexEntry-normal-46",
        "alcremieDexEntry-normal-47",
        "alcremieDexEntry-normal-48",
        "alcremieDexEntry-normal-51",
        "alcremieDexEntry-normal-52",
        "alcremieDexEntry-normal-53",
        "alcremieDexEntry-normal-54",
        "alcremieDexEntry-normal-55",
        "alcremieDexEntry-normal-56",
        "alcremieDexEntry-normal-57",
        "alcremieDexEntry-normal-58",
        "alcremieDexEntry-normal-59",
        "alcremieDexEntry-normal-60",
        "alcremieDexEntry-normal-61",
        "alcremieDexEntry-normal-62"
    ];
    
    for (i = 0; i < wishlist.length; i++) {
        document.getElementById(wishlist[i]).classList.remove("caught");
    }
    
    for (i = 0; i < movelist.length; i++) {
        document.getElementById(movelist[i]).classList.add("traded");
    }
    
</script>
	
</html>
