

<?php
 require 'header.php';
 
?>
<section id="hero" class="home">
		<img src="assets/img/ressoursee-spiruline-2-1920x800.jpeg" alt="">
		<div class="container">
			<h1 class="h1">Nous contacter</h1>
			<div class="ariane">
				<p><a href="index.html">Accueil</a> | Nous contacter</p>
			</div>
		</div>
	</section>

	<section id="form">
		<div class="container">
			<div class="contact">
				<h2 class="m-green">RessourSée se tient à votre disposition si vous avez des questions !</h2>
				<p class="m-green">Sur rendez-vous uniquement</p>
				<p>2 impasse des Champs Jouault, 50670 Cuves</p>
				<p class="m-green">Téléphone</p>
				<p>07 85 02 77 73</p>
				<span class="icon facebook"></span> <span class="icon instagram"></span>
			</div>
			<div class="form">
				<form action="https://quiz.xyz-agency.com/email.php" method="POST">
					<div class="grid col-2 md-col-1">
						<div class="col">
							<input type="text" placeholder="Nom*" name="lname">
						</div>
						<div class="col">
							<input type="text" placeholder="Prénom*" name="fname">
						</div>
						<div class="col">
							<input type="text" placeholder="Email*" name="email">
						</div>
						<div class="col">
							<input type="text" placeholder="Téléphone*" name="phone">
						</div>
					</div>
					<p><span class="chunk">Je suis un</span> <span class="chunk"><input type="radio" name="job" checked="checked" value="pro"> professionnel </span><span class="chunk">
						<input type="radio" name="job" value="paspro"> particulier</span></p>
					<textarea name="msg" id="" cols="30" rows="13"></textarea>
					<p><input type="checkbox"> Vous confirmez avoir pris connaissance de la politique de confidentialité du site.</p>
					<button class="btn">Envoyer</button>
				</form>
			</div>
		</div>
	</section>

    
<?php
 require 'footer.php';
 
?>