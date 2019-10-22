
<div class="conteneur">
<header>
		<?php include 'haut.php' ;?>
	</header>
	<main>
	<div class="texteAccueil">
	<h1>Abonnements</h1>
	<?php 
	if(!isset($_POST['d1'])AND !isset($_POST['d2'])AND !isset($_POST['d3'])AND !isset($_POST['d4'])){
	?>
	<form action="" method="post">
	<button name="d1" class="bouton bouton1" type="submit"><b>Pass 24H </b><br />1.5€</button>
    <button name="d2" class="bouton bouton2" type="submit"><b>Pass 7 Jours</b><br />7€</button>
    <button name="d3" class="bouton bouton3" type="submit"><b>Pass Mensuel</b><br />10€</button>
    <button name="d4" class="bouton bouton4" type="submit"><b>Pass Annuel</b><br />30€</button>
    </form>
    <?php
	}
	if(isset($_POST['d1'])){
	    echo $formulaireAbonnement->afficherFormulaire();
	}
	else if(isset($_POST['d2'])){
	    echo $formulaireAbonnement->afficherFormulaire();
    }
    else if(isset($_POST['d3'])){
        echo $formulaireAbonnement->afficherFormulaire();
    }
    else if(isset($_POST['d4'])){
        echo $formulaireAbonnement->afficherFormulaire();
    }
    
    if(isset($_POST['submitAbo'])){
        echo $formulairePayement->afficherFormulaire();;
    }
    ?>
	</main>
	</div>
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>