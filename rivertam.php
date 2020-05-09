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
        .sword {
            background-color: orange;
        }
        
    </style>

</head>

<body>
	
<?php include 'php/header.php' ?>

<main role="main">

	<section class="jumbotron text-center">
		<div class="container">
			<p class="lead text-muted">This is a sample dex (mine, actually) to show what the caught/not caught difference would be.  Caught Pok&eacute;mon will be full color with names under them, and Pok&eacute;mon that haven't yet been caught will be very faint.</p>				
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
    let caughtToggle = document.getElementsByClassName("dex-entry");
    for (i = 0; i < caughtToggle.length; i++) {
        caughtToggle[i].classList.add("caught");
    }
    let completeBoxes = [
        "collapse001",
        "collapse031",
        "collapse061",
        "collapse091",
        "collapse181",
        "collapse211",
        "collapse241",
        "collapse271",
        "collapse301",
        "collapse331",
        "collapse361",
        "collapse391",
        "collapse421",
        "collapse451",
        "collapse481",
        "collapse511",
        "collapse541",
        "collapse571",
        "collapse601",
        "collapse631",
        "collapse661",
        "collapse691",
        "collapse721",
        "collapse751",
        "collapse811",
        "collapse841",
        "collapse871",
        "collapse-galarian-forms-normal"
    ];
    for (i = 0; i < completeBoxes.length; i++) {
        document.getElementById(completeBoxes[i]).classList.remove("show");
    }
</script>
    
<script>

    let swordlist = [
        "femaleDexEntry-normal-119",
        "maleDexEntry-normal-185",
        "femaleDexEntry-normal-221",
        "maleDexEntry-normal-224",
        "maleDexEntry-normal-272",
        "femaleDexEntry-normal-272",
        "maleDexEntry-normal-275",
        "femaleDexEntry-normal-275",
        "maleDexEntry-normal-315",
        "maleDexEntry-normal-350",
        "femaleDexEntry-normal-350",
        "maleDexEntry-normal-407",
        "femaleDexEntry-normal-407",
        "maleDexEntry-normal-415",
        "femaleDexEntry-normal-415",
        "maleDexEntry-normal-453",
        "femaleDexEntry-normal-453",
        "maleDexEntry-normal-454",
        "femaleDexEntry-normal-454",
        "maleDexEntry-normal-459",
        "femaleDexEntry-normal-459",
        "maleDexEntry-normal-460",
        "femaleDexEntry-normal-460",
        "maleDexEntry-normal-461",
        "femaleDexEntry-normal-461",
        "maleDexEntry-normal-464",
        "femaleDexEntry-normal-464",
        "maleDexEntry-normal-473",
        "femaleDexEntry-normal-473",
        "dexEntry-normal-150",
        "alolanDexEntry-normal-075",
        "dexEntry-normal-808",
        "dexEntry-normal-809",
        "altDexEntry-normal-421-cherrim-overcast",
        "altDexEntry-normal-479-rotom-fan",
        "altDexEntry-normal-479-rotom-heat",
        "altDexEntry-normal-479-rotom-mow",
        "altDexEntry-normal-479-rotom-wash",
        "altDexEntry-normal-711-gourgeist-small",
        "altDexEntry-normal-711-gourgeist-average",
        "altDexEntry-normal-711-gourgeist-large",
        "altDexEntry-normal-711-gourgeist-super",
        "alcremieDexEntry-normal-0",
        "alcremieDexEntry-normal-1",
        "alcremieDexEntry-normal-2",
        "alcremieDexEntry-normal-3",
        "alcremieDexEntry-normal-4",
        "alcremieDexEntry-normal-5",
        "alcremieDexEntry-normal-6",
        "alcremieDexEntry-normal-7",
        "alcremieDexEntry-normal-8",
        "alcremieDexEntry-normal-9",
        "alcremieDexEntry-normal-10",
        "alcremieDexEntry-normal-11",
        "alcremieDexEntry-normal-12",
        "alcremieDexEntry-normal-13",
        "alcremieDexEntry-normal-14",
        "alcremieDexEntry-normal-15",
        "alcremieDexEntry-normal-16",
        "alcremieDexEntry-normal-17",
        "alcremieDexEntry-normal-18",
        "alcremieDexEntry-normal-19",
        "alcremieDexEntry-normal-20",
        "alcremieDexEntry-normal-21",
        "alcremieDexEntry-normal-22",
        "alcremieDexEntry-normal-23",
        "alcremieDexEntry-normal-24",
        "alcremieDexEntry-normal-25",
        "alcremieDexEntry-normal-26",
        "alcremieDexEntry-normal-27",
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
        "alcremieDexEntry-normal-42",
        "alcremieDexEntry-normal-43",
        "alcremieDexEntry-normal-44",
        "alcremieDexEntry-normal-45",
        "alcremieDexEntry-normal-46",
        "alcremieDexEntry-normal-47",
        "alcremieDexEntry-normal-48",
        "alcremieDexEntry-normal-49",
        "alcremieDexEntry-normal-50",
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
    
    let movelist = [
        "maleDexEntry-normal-085",
        "femaleDexEntry-normal-185",
        "dexEntry-normal-146",
        "maleDexEntry-normal-195",
        "maleDexEntry-normal-207",
        
        "dexEntry-normal-145",
        "femaleDexEntry-normal-207",
        "femaleDexEntry-normal-229",
        "dexEntry-normal-144",
        "maleDexEntry-normal-166",
        
        "maleDexEntry-normal-255",
        "femaleDexEntry-normal-308",
        "maleDexEntry-normal-419",
        "femaleDexEntry-normal-419",
        "maleDexEntry-normal-443",
        
        "femaleDexEntry-normal-443",
        "unownDexEntry-normal-2",
        "unownDexEntry-normal-9",
        "femaleDexEntry-normal-026",
        "altDexEntry-normal-802-magearna",
        
        "maleDexEntry-normal-229",
        "maleDexEntry-normal-316",
        "maleDexEntry-normal-323",
        "altDexEntry-normal-669-flabebe-white",
        "altDexEntry-normal-669-flabebe-blue",
        
        "altDexEntry-normal-670-floette-yellow",
        "altDexEntry-normal-774-minior-orange-core",
        "maleDexEntry-normal-097"
    ];

    let wishlist = [
        "dexEntry-normal-162",
        "dexEntry-normal-384",
        "dexEntry-normal-385",
        "dexEntry-normal-386",
        "dexEntry-normal-489",
        "dexEntry-normal-490",
        "dexEntry-normal-717",
        "dexEntry-normal-718",
        "dexEntry-normal-720",
        "dexEntry-normal-807",
        "femaleDexEntry-normal-065",
        "maleDexEntry-normal-154",
        "femaleDexEntry-normal-154",
        "femaleDexEntry-normal-166",
        "maleDexEntry-normal-186",
        "femaleDexEntry-normal-186",
        "femaleDexEntry-normal-190",
        "maleDexEntry-normal-198",
        "femaleDexEntry-normal-198",
        "maleDexEntry-normal-203",
        "femaleDexEntry-normal-203",
        "maleDexEntry-normal-212",
        "femaleDexEntry-normal-212",
        "femaleDexEntry-normal-214",
        "maleDexEntry-normal-217",
        "femaleDexEntry-normal-217",
        "maleDexEntry-normal-232",
        "femaleDexEntry-normal-232",
        "maleDexEntry-normal-256",
        "femaleDexEntry-normal-256",
        "maleDexEntry-normal-257",
        "femaleDexEntry-normal-257",
        "maleDexEntry-normal-267",
        "femaleDexEntry-normal-267",
        "maleDexEntry-normal-269",
        "femaleDexEntry-normal-269",
        "maleDexEntry-normal-307",
        "femaleDexEntry-normal-307",
        "femaleDexEntry-normal-316",
        "maleDexEntry-normal-317",
        "femaleDexEntry-normal-317",
        "maleDexEntry-normal-322",
        "femaleDexEntry-normal-322",
        "maleDexEntry-normal-332",
        "femaleDexEntry-normal-332",
        "maleDexEntry-normal-369",
        "femaleDexEntry-normal-369",
        "maleDexEntry-normal-396",
        "femaleDexEntry-normal-396",
        "maleDexEntry-normal-397",
        "femaleDexEntry-normal-397",
        "maleDexEntry-normal-398",
        "femaleDexEntry-normal-398",
        "maleDexEntry-normal-399",
        "femaleDexEntry-normal-399",
        "maleDexEntry-normal-400",
        "femaleDexEntry-normal-400",
        "maleDexEntry-normal-401",
        "femaleDexEntry-normal-401",
        "maleDexEntry-normal-402",
        "femaleDexEntry-normal-402",
        "maleDexEntry-normal-403",
        "femaleDexEntry-normal-403",
        "maleDexEntry-normal-404",
        "femaleDexEntry-normal-404",
        "maleDexEntry-normal-405",
        "femaleDexEntry-normal-405",
        "maleDexEntry-normal-417",
        "femaleDexEntry-normal-417",
        "maleDexEntry-normal-418",
        "femaleDexEntry-normal-418",
        "maleDexEntry-normal-424",
        "femaleDexEntry-normal-424",
        "maleDexEntry-normal-444",
        "femaleDexEntry-normal-444",
        "maleDexEntry-normal-445",
        "femaleDexEntry-normal-445",
        "maleDexEntry-normal-456",
        "femaleDexEntry-normal-456",
        "maleDexEntry-normal-457",
        "femaleDexEntry-normal-457",
        "maleDexEntry-normal-465",
        "femaleDexEntry-normal-465",
        "altDexEntry-normal-025-pikachu-original-cap",
        "altDexEntry-normal-025-pikachu-johto-cap",
        "altDexEntry-normal-025-pikachu-hoenn-cap",
        "altDexEntry-normal-025-pikachu-sinnoh-cap",
        "altDexEntry-normal-025-pikachu-unova-cap",
        "altDexEntry-normal-025-pikachu-kalos-cap",
        "altDexEntry-normal-025-pikachu-alola-cap",
        "altDexEntry-normal-351-castform",
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
        "altDexEntry-normal-745-lycanroc-dusk",
        "altDexEntry-normal-774-minior-meteor",
        "altDexEntry-normal-774-minior-violet-core",
        "altDexEntry-normal-800-necrozma",
        "altDexEntry-normal-800-necrozma-dawn-wings",
        "altDexEntry-normal-800-necrozma-dusk-mane",
        "altDexEntry-normal-802-magearna-original",
        "unownDexEntry-normal-6",
        "unownDexEntry-normal-11",
        "unownDexEntry-normal-12",
        "unownDexEntry-normal-13",
        "unownDexEntry-normal-14",
        "unownDexEntry-normal-15",
        "unownDexEntry-normal-16",
        "unownDexEntry-normal-17",
        "unownDexEntry-normal-21",
        "unownDexEntry-normal-22",
        "unownDexEntry-normal-23",
        "unownDexEntry-normal-24",
        "unownDexEntry-normal-25",
        "unownDexEntry-normal-26",
        "vivillonDexEntry-normal-0",
        "vivillonDexEntry-normal-1",
        "vivillonDexEntry-normal-2",
        "vivillonDexEntry-normal-4",
        "vivillonDexEntry-normal-5",
        "vivillonDexEntry-normal-6",
        "vivillonDexEntry-normal-7",
        "vivillonDexEntry-normal-8",
        "vivillonDexEntry-normal-9",
        "vivillonDexEntry-normal-10",
        "vivillonDexEntry-normal-11",
        "vivillonDexEntry-normal-12",
        "vivillonDexEntry-normal-13",
        "vivillonDexEntry-normal-14",
        "vivillonDexEntry-normal-15",
        "vivillonDexEntry-normal-16",
        "vivillonDexEntry-normal-17",
        "vivillonDexEntry-normal-18",
        "vivillonDexEntry-normal-19"
    ];
    
    for (i = 0; i < wishlist.length; i++) {
        document.getElementById(wishlist[i]).classList.remove("caught");
    }
    
    for (i = 0; i < movelist.length; i++) {
        document.getElementById(movelist[i]).classList.add("traded");
    }
    
    for (i = 0; i < swordlist.length; i++) {
        document.getElementById(swordlist[i]).classList.add("sword");
    }
    
</script>
	
</html>
