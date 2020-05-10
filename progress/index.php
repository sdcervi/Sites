<!doctype html>
<html lang="en">
	
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Stephanie Cervi">
	<title>Progress &amp; To-dos || Living Pok&eacute;Dex Tracker</title>

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
	  
<?php include '../php/header.php' ?>

<main role="main">
	
	<div class="container info-page">
		
		<h1>Progress &amp; To-dos</h1>
		
		<h2>Features to add:</h2>
        <h3>High priority</h3>
		<ul>
            <li>Add a "mark/unmark all as caught" at the box level</li>
			<li>User account registration to save data</li>
			<li>Lazyload images</li>
            <li>Printer-friendly layout, or printable PDF</li>
            <li>High contrast mode</li>
		</ul>
        <h3>Low priority</h3>
		<ul>
            <li>Come up with better global toggle than "show/hide"</li>
            <li>Pixel block thumbnail preview of boxes with colors</li>
            <ul>
                <li>Black: caught</li>
                <li>Light gray: not caught</li>
                <li>Orange: trading</li>
                <li>Blue: placing</li>
            </ul>
            <li>Add a donate/support page. KoFi? PayPal? Patreon?</li>
			<li>iOS and Android apps, for phone and tablet. Look into service to port webapp to native?</li>
			<li>Dynamically updating caught count for each box</li>
			<li>Dynamically updating caught % at top of page</li>
            <li>Add expand/collapse icons for boxes</li>
            <li>Transparency in favicon</li>
		</ul>
		
		<h2>Bugs to squish</h2>
		<ul>
			<li>Figure out how to store male/female symbols in string for Nidoran, &eacute; for Flab&eacute;b&eacute;</li>
		</ul>
		
		<h2>Changelog</h2>
		<ul>
		<ul>
            <li>2020-05-09</li>
            <ul>
                <li>Set up CSS for trading/placing icons</li>
                <li>Added click toggle functionality for those icons</li>
            </ul>
            <li>2020-05-07</li>
            <ul>
                <li>Got caught state toggle between grayed out and full color to work</li>
            </ul>
            <li>2020-05-06</li>
            <ul>
                <li>Fixed navbar padding issue and added active page link functionality</li>
                <li>Started creating sample dex to show functionality</li>
                <li>Made navbar fixed to top of window</li>
                <li>Fixed ID conflicts so normal and shiny variants have their own unique IDs</li>
                <li>Fixed feedback form mobile experience</li>
            </ul>
            <li>2020-05-05</li>
            <ul>
                <li>Improved layout to allow slightly less tiny text, and made boxes fixed size</li>
                <li>Added a feedback/bug report/error report page</li>
                <li>Added an FAQ page</li>
            </ul>
            <li>2020-05-04</li>
            <ul>
                <li>Finished alt form dex population</li>
                <li>Fixed a few bugs in the alt form dex population</li>
            </ul>
            <li>2020-05-03</li>
            <ul>
                <li>Got the basics of the alt form dex to start displaying</li>
            </ul>
            <li>2020-05-02</li>
            <ul>
                <li>Stored booleans in database for male/female and regional forms</li>
            </ul>
			<li>2020-05-01</li>
			<ul>
				<li>Added 3-across layout for x-large screens</li>
				<li>Made a local copy of the PokeAPI database since that's what was loading slowly</li>
			</ul>
			<li>2020-04-30</li>
			<ul>
				<li>Integrated PokeAPI. Success! (with errors)</li>
				<li>Got PokeAPI values to print correctly after a crash (and burn) course in PHP</li>
			</ul>
			<li>2020-04-29</li>
			<ul>
				<li>Moved this list to a new page</li>
				<li>Fixed text sizing, sort of; it's tiny, but it works</li>
				<li>Fixed page breakpoints</li>
				<li>Removed text-underline on link hover</li>
			</ul>
			<li>2020-04-28</li>
			<ul>
				<li>Added 2-across layout for larger screens</li>
				<li>Moved Header and Footer into files to call remotely</li>
			</ul>
			<li>2020-04-26</li>
			<ul>
				<li>Created first iteration of design</li>
			</ul>
		</ul>
	
	</div>
	
</main>

<?php include '../php/footer.php' ?>
    
<script>
    document.getElementById("nav-progress").classList.add("active");
</script>
	
</html>
