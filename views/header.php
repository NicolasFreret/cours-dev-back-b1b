<?php 
 $logout = isset($_SESSION['user']) ? '<a href="'.config()->home_url.'/logout/">Déconnexion</a>' : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  	<base href="<?php echo config()->home_url  ?>/public/">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<div class="top__barre">
			<p>-50 % sur les boites de spiruline à DDM courte !</p>
			<img src="assets/img/saveursdenormandie.png" alt="">
		</div>
		<div class="header">
			<div class="logo__cta">
				<div class="logo">
					<a href="#">
						<img src="assets/img/ressoursee-logo.png" alt="">
					</a>
				</div>
				<div class="cta">
					<a href="#">
						<span class="icon magnifier"></span>
					</a>
					<a href="<?php echo config()->home_url  ?>/login/">
						<span class="icon user"></span>
					</a>
					<a href="#">
						<span class="icon cart"></span>
					</a>
				</div>
				<a href="#" id="hbg">
					<span></span>
					<span></span>
					<span></span>
				</a>
			</div>
			<nav>
				<a class="<?php echo $page == "accueil" ? 'active' : '' ?>" href="<?php echo config()->home_url  ?>/">Accueil</a>
				<a class="<?php echo $page == "spiruline" ? 'active' : '' ?>" href="<?php echo config()->home_url  ?>/spiruline/">La spiruline</a>
				<a class="<?php echo $page == "about" ? 'active' : '' ?>" href="<?php echo config()->home_url  ?>/a-propos-de-nous/">Qui sommes-nous ?</a>
				<a href="#">Boutique</a>
				<a href="#">Blog</a>
				<a href="#">Nos points de vente</a>
				<a href="#">FAQ</a>
				<a class="<?php echo $page == "contact" ? 'active' : '' ?>" href="<?php echo config()->home_url  ?>/contact/">Nous contacter</a>
				<?php echo $logout ?>
			</nav>
			
		</div>
	</header>
  <main>