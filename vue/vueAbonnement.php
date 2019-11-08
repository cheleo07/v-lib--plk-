
<div class="conteneur">
<header>
	<?php include 'haut.php' ;?>
	</header>
	<main>
	<div class="texteAccueil">
	<?php 
	//tant que pas appuyé sur un bouton et submitAbo le menu s'affiche
	if(!isset($_POST['d1'])AND !isset($_POST['d2'])AND !isset($_POST['d3'])AND !isset($_POST['d4'])AND !isset($_POST['submitAbo'])AND !isset($_POST['submitAbo2'])){
	?>
		<h1>Achetez vos abonnement en ligne</h1>
    <?php
        echo $formulaireBouton->afficherFormulaire();
	}
	//appuyer sur un bouton affiche le formulaire d'abonnement
	if(isset($_POST['d1'])){
	?>
	    <h1 class="titre">Adhésion 24H</h1>
	    <h2 class="soustitre">Données personnelles</h2>
	<?php
	    echo $formulaireAbonnement->afficherFormulaire();
	}
	else if(isset($_POST['d2'])){
	?>
	    <h1 class="titre">Adhésion 7 Jours</h1>
	    <h2 class="soustitre">Données personnelles</h2>
	<?php
	    echo $formulaireAbonnement->afficherFormulaire();
    }
    else if(isset($_POST['d3'])){
    ?>
	    <h1 class="titre">Adhésion Mensuelle</h1>
	    <h2 class="soustitre">Données personnelles</h2>
	<?php
        echo $formulaireAbonnement2->afficherFormulaire();
    }
    else if(isset($_POST['d4'])){
    ?>
	    <h1 class="titre">Adhésion Anuelle</h1>
	    <h2 class="soustitre">Données personnelles</h2>
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
	<script>
			function popup() {
  				alert("Votre transaction à bien été prise en compte.\nVous recevrez les détails de votre abonnement par mail.");
  				fPayement.submit();
  				}
			function submit(){
				fPayement.submit()
			}
		</script>
	<footer>
		<?php include 'bas.php' ;?>
	</footer>
</div>