<?php
 require 'header.php';
 ?>

<section id="hero" class="home">
		<img src="assets/img/ressoursee-spiruline-2-1920x800.jpeg" alt="">
		<div class="container">
			<h1 class="h1">Connexion</h1>
			<div class="ariane">
				<p><a href="<?php echo config()->home_url  ?>/">Accueil</a> | Se connecter</p>
			</div>
		</div>
	</section>

	<section id="form">
		<div class="container">
			<div class="form">
				<form action="<?php echo config()->home_url  ?>/login-post/" method="POST">
					<div class="grid col-2 md-col-1">
						<div class="col">
							<input type="text" placeholder="Email*" name="email">
						</div>
						<div class="col">
							<input type="text" placeholder="Password*" name="password">
						</div>
                        <input type="hidden" name="csrf" value="<?php echo $token ?>">
					</div>
					<button class="btn">Se connecter</button>
				</form>
			</div>
		</div>
	</section>

<?php
 require 'footer.php';
