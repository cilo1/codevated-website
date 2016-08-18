<?php
	error_reporting(0);
	include_once("function_class.php");
	$func = new FunctionClass();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Zalego Training Institute</title>
		<!-- App css -->
		<link rel="stylesheet" href="css/style.css">
		
		<link rel="shortcut icon" href="" />
		
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>	
		
		<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		</head>
    <body>
		<div class="top-color-bar">
			www.codevate.com | professionally equipping budding software engineers
		</div>
		<div class="content">
		<header>
			<div class="logo">
				<img src="img/logo.png"/>
			</div>
			<div class="menu">
				<ul>							
					<li><a href="">Tutoreates (Tutorials)</a></li>
					<li><a href="">Classeates (Classes)</a></li>
					<li><a href="">Projeacts (Pojects)</a></li>
					<li><a href="">Did you know?</a></li>
					
				</ul>
			</div>
			<div class="clear"></div>
		</header>
		<div class="news">
			<h3>News:</h3>
			<div>Zalego institute to start training Tizen.<br/><span>18 Aug 16</span></div>
			<div>A professional diploma course to begin in May 2018 at Zalego<br/><span>17 Aug 16</span></div>
			<div>There will be a sumsang boot camp at university of Nairobi facilitated by Zalego<br/><span>16 Aug 16</span></div>
		</div>
		<div class="ask">
			<a href="">Ask a Q?</a>
		</div>
		<div class="main">
			<div class="say-banner">
				Do you want to move your coding skill to the next level?
			</div>
			<div class="lang-banner">
				Tizen | PHP | Android | Laravel | mysql | Java | Linux | CSS | ReactJs | AngularJS
				| Oracle | Python..<br/> and many more.
				<?php
					$func->getLanguages();
				?>
			</div>
			<div class="say-banner">
				<div>We've gotchu!</div>
				<img id="php" src="img/phpcode.png"/>				
			</div>
			<div class="say-banner">
				 <span>Learning should be fun & easy!</span>
			</div>
			<div class="say-banner">
				Inspired by
				<img id="zalego" src="img/zalego.png"/>
			</div>
		</div>
	<div class="clear"></div>
			<footer>codevate.com 2016 | Inspired and supported by Zalego Institute </footer>
		</div>        
    </body>
</html>