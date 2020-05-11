<!doctype html>
<html lang="en">
	
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Stephanie Cervi">
	<title>Sandbox || Living Pok&eacute;Dex Tracker</title>

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
	
	<!-- National dex -->
	<div class="container">
		
		<?php
            $con = new mysqli("127.0.0.1", "root", "RKrOpOAjglkL7GaW6IZq", "LivingDex");
            $message = $con->query("SELECT username FROM userdata")->fetch_object()->username;
            $con->close();
            echo "$message <br/>";
        ?>
		
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
