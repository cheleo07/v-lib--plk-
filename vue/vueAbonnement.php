
<div class="conteneur">
<header>
		<?php include 'haut.php' ;?>
		<script>
			function popup() {
  				alert("Votre transaction à bien été prise en compte.\nVous recevrez les détails de votre abonnement par mail.");
  				fPayement.submit();
  				}
		</script>
	</header>
	<main>
	<div class="texteAccueil">
	<?php 
	//tant que pas appuyé sur un bouton et submitAbo le menu s'affiche
	if(!isset($_POST['d1'])AND !isset($_POST['d2'])AND !isset($_POST['d3'])AND !isset($_POST['d4'])AND !isset($_POST['submitAbo'])AND !isset($_POST['submitAbo2'])){
	?>
	<h1>Abonnements</h1>
	<form action="" method="post">
	<button name="d1" class="bouton bouton1" type="submit"><b>Pass 24H </b><br />1.5€</button>
    <button name="d2" class="bouton bouton2" type="submit"><b>Pass 7 Jours</b><br />7€</button>
    <button name="d3" class="bouton bouton3" type="submit"><b>Pass Mensuel</b><br />10€</button>
    <button name="d4" class="bouton bouton4" type="submit"><b>Pass Annuel</b><br />30€</button>
    </form>
    <?php
	}
	//appuyer sur un bouton affiche le formulaire d'abonnement
	if(isset($_POST['d1'])){
	?>
	    <h1>Adhésion 24H</h1>
	    <h2>Données personnelles</h2>
	<?php
	    echo $formulaireAbonnement->afficherFormulaire();
	}
	else if(isset($_POST['d2'])){
	?>
	    <h1>Adhésion 7 Jours</h1>
	    <h2>Données personnelles</h2>
	<?php
	    echo $formulaireAbonnement->afficherFormulaire();
    }
    else if(isset($_POST['d3'])){
    ?>
	    <h1>Adhésion Mensuelle</h1>
	    <h2>Données personnelles</h2>
	<?php
        echo $formulaireAbonnement2->afficherFormulaire();
    }
    else if(isset($_POST['d4'])){
    ?>
	    <h1>Adhésion Anuelle</h1>
	    <h2>Données personnelles</h2>
	<?php
        echo $formulaireAbonnement2->afficherFormulaire();
    }
    //appuyer sur continuer affiche le formulaire de payement
    if(isset($_POST['submitAbo'])){
    ?>
    <div class="payement">
        <?php echo $formulairePayement->afficherFormulaire();?>
    </div>
    <?php
    }
    if(isset($_POST['submitAbo2'])){
    ?>
    <div class="payement">
        <?php echo $formulairePayement2->afficherFormulaire();?>
    </div>
    <?php
    }
    ?>
	</main>
	</div>
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>