<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>index.html</title>

    <!-- Bootstrap core CSS -->
    <link href="css/vendor/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
	<body>
		<div id="wrapper" class="container"> 
		<header>
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php" >
						Piemonte
						</a >
					</div>
					<ul class="nav navbar-nav">
						<li<?php if ($title == "alpi") { print ' class="active"';}?>><a href="alpi.php">alpi</a></li>
						<li<?php if ($title == "lago") { print ' class="active"';}?>><a href="lago-maggiore.php">lago maggiore</a></li>
						<li<?php if ($title == "novara") { print ' class="active"';}?>><a href="novara.php">novara</a></li>
						<li<?php if ($title == "novara1") { print ' class="active"';}?>><a href="novara1.php">monumenti e luoghi di interesse</a></li>
						<li<?php if ($title == "novara2") { print ' class="active"';}?>><a href="novara2.php">centro storico</a></li>
						<li<?php if ($title == "novara3") { print ' class="active"';}?>><a href="novara3.php">architetture civili</a></li>						
					</ul>
				</div>
			</nav>
		</header>
		
