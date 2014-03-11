<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js"></script>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<title>Vita project</title>
</head>
<body>
<div id="wrapper">

<div id="home" data-role="page"> <!--- Page Starts -->
<header data-role="header" data-theme="b">
	<h1>THE BEST APP IN THE WORLD</h1>
	<nav data-role="navbar">
		<ul>
			<li><a href="#home" data-role="button" data-icon="info" class="ui-btn-active ui-state-persist">Home</a></li>
			<li><a href="#news" data-role="button" data-icon="cloud">News</a></li>
			<li><a href="#projects" data-role="button" data-icon="grid">Projects</a></li>
			<li><a href="#about" data-role="button" data-icon="info">About</a></li>
		</ul>
	</nav>
</header>

<div id="home-content" data-role="content">
	<h1>Dette er en app test</h1>
	<p>Tilfældig tekst kommer ind her</p>
</div>

<footer data-role="footer" data-position="fixed" data-theme="b">
	<h1>Dette er en Footer</h1>
</footer>
</div> <!--- Page ends -->



<!--- NEWS -->
<div id="news" data-role="page"> <!--- Page Starts -->
	<header data-role="header" data-theme="b">
		<h1>News</h1>
			<nav data-role="navbar">
			<ul>
				<li><a href="#home" data-role="button" data-icon="info">Home</a></li>
				<li><a href="#news" data-role="button" data-icon="cloud" class="ui-btn-active ui-state-persist">News</a></li>
				<li><a href="#projects" data-role="button" data-icon="grid">Projects</a></li>
				<li><a href="#about" data-role="button" data-icon="info">About</a></li>
			</ul>
		</nav>
	</header>

<article data-role="content">
	<ul data-role="listview">
		<li>
			<a href="#apps">
				<h1>Apps er det nye</h1>
					<img src="img/apps.jpg" alt="apps" />
						<p>Rigtigt mange laver apps i dag, og det er super sjovt.</p>
			</a>
		</li>
		<li>
			<a href="#apps">
				<h1>Apps er mega nice</h1>
					<img src="img/apps2.jpg" alt="apps sppa" />
						<p>Rigtigt mange laver apps i dag, og det er super sjovt.</p>
			</a>
		</li>
		<li>
			<a href="#apps">
				<h1>Apps er fantastiske</h1>
					<img src="img/apps3.jpg" alt="apps too" />
						<p>Rigtigt mange laver apps i dag, og det er super sjovt.</p>
			</a>
		</li>
	</ul>
</article>

<footer data-role="footer" data-theme="b">
	<h1>Dette er en Footer</h1>
</footer>
</div> <!--- Page ends -->



<!--- APPS -->
<div id="apps" data-role="page"> <!--- Page Starts -->
	<header data-role="header" data-theme="b">
		<h1>Apps er det nye</h1>
			<nav data-role="navbar">
			<ul>
				<li><a href="#home" data-role="button" data-icon="info">Home</a></li>
				<li><a href="#news" data-role="button" data-icon="cloud" class="ui-btn-active ui-state-persist">News</a></li>
				<li><a href="#projects" data-role="button" data-icon="grid">Projects</a></li>
				<li><a href="#about" data-role="button" data-icon="info">About</a></li>
			</ul>
		</nav>
	</header>

<img id="a-img" src="img/appss.jpg" alt="apps" />

<footer data-role="footer" data-theme="b">
	<h1>Dette er en Footer</h1>
</footer>
</div> <!--- Page ends -->



<!--- PROJECTS -->
<div id="projects" data-role="page"> <!--- Page Starts -->
	<header data-role="header" data-theme="b">
		<h1>Projects</h1>
			<nav data-role="navbar">
			<ul>
				<li><a href="#home" data-role="button" data-icon="info">Home</a></li>
				<li><a href="#news" data-role="button" data-icon="cloud">News</a></li>
				<li><a href="#projects" data-role="button" data-icon="grid" class="ui-btn-active ui-state-persist">Projects</a></li>
				<li><a href="#about" data-role="button" data-icon="info">About</a></li>
			</ul>
		</nav>
	</header>

<div id="projects-content" data-role="content">
	<h1>Dette er en app test</h1>
	<p>Tilfældig tekst kommer ind her</p>
</div>

<footer data-role="footer" data-position="fixed" data-theme="b">
	<h1>Dette er en Footer</h1>
</footer>
</div> <!--- Page ends -->



<!--- ABOUT -->
<div id="about" data-role="page"> <!--- Page Starts -->
	<header data-role="header" data-theme="b">
		<h1>About</h1>
			<nav data-role="navbar">
				<ul>
					<li><a href="#home" data-role="button" data-icon="info">Home</a></li>
					<li><a href="#news" data-role="button" data-icon="cloud">News</a></li>
					<li><a href="#projects" data-role="button" data-icon="grid">Projects</a></li>
					<li><a href="#about" data-role="button" data-icon="info" class="ui-btn-active ui-state-persist">About</a></li>
				</ul>
			</nav>
	</header>

<div id="about-content" data-role="content">
	<h1>Dette er en app test</h1>
	<p>Tilfældig tekst kommer ind her</p>
</div>

<footer data-role="footer" data-position="fixed" data-theme="b">
	<h1>Dette er en Footer</h1>
</footer>
</div> <!--- Page ends -->

</div>
</body>
</html>