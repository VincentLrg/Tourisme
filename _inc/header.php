<?php include_once('_inc/config.php')  ?>

<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo $title; ?></title>
	<meta name="description" content="<?php echo $description; ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body class="saison-<?php echo $saison ?>">

	<header role="banner">
		
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo $route['home'] ?><?php saison(true); ?>"><img src="img/logo.png" width="100vw" height="auto"></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse" aria-expended="false">
					<ul class="nav navbar-nav">
						<li <?php if($current=="home"):?>class="active"<?php endif;?>><a href="<?php echo $route['home']; ?><?php saison(true); ?>">Accueil</a></li>
						<li <?php if($current=="about"):?>class="active"<?php endif;?>><a href="<?php echo $route['about']; ?><?php saison(true); ?>">Histoire et patrimoine</a></li>
						<li <?php if($current=="activities"):?>class="active"<?php endif;?>><a href="<?php echo $route['activities-index']; ?><?php saison(true); ?>">Activités</a></li>
						<li <?php if($current=="contact"):?>class="active"<?php endif;?>><a href="<?php echo $route['contact']; ?><?php saison(true); ?>">Nous contacter</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="www.youtube.com" rel="www.youtube.com" target="_blank" class="social-icon-youtube"><i class="fab fa-fw fa-youtube"></i></a></li>
						<li><a href="www.facebook.com" rel="www.facebook.com" target="_blank" class="social-icon-facebook"><i class="fab fa-fw fa-facebook-square"></i></a></li>
						<li><a href="www.instagram.com" rel="www.instagram.com" target="_blank" class="social-icon-instagram"><i class="fab fa-fw fa-instagram"></i></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Saisons<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="<?= currentUrlSaison(1); ?>">Printemps</a></li>
								<li><a href="<?= currentUrlSaison(2); ?>">Été</a></li>
								<li><a href="<?= currentUrlSaison(3); ?>">Automne</a></li>
								<li><a href="<?= currentUrlSaison(4); ?>">Hiver</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
	</header>

	<main>
