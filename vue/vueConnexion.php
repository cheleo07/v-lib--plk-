<div class="conteneur">
	<header>
		<?php include 'haut.php';?>
		
	</header>
	<main>
		<div class="droite">
			<div class="connexion">
					<?php 
					   echo $formulaireConnexion->afficherFormulaire();
					?>
			</div>
		</div>
	</main>
	<footer>
		<?php include 'bas.php';?>
	</footer>
</div>