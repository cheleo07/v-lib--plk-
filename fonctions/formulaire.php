<?php
class Formulaire{
	private $method;
	private $action;
	private $nom;
	private $style;
	private $formulaireToPrint;
	
	private $ligneComposants = array();
	private $tabComposants = array();
	
	public function __construct($uneMethode, $uneAction , $unNom,$unStyle ){
		$this->method = $uneMethode;
		$this->action =$uneAction;
		$this->nom = $unNom;
		$this->style = $unStyle;
	}
	
	
	public function concactComposants($unComposant , $autreComposant ){
		$unComposant .=  $autreComposant;
		return $unComposant ;
	}
	
	public function ajouterComposantLigne($unComposant){
		$this->ligneComposants[] = $unComposant;
	}
	
	public function ajouterComposantTab(){
		$this->tabComposants[] = $this->ligneComposants;
		$this->ligneComposants = array();
	}
	
	public function creerLabel($unLabel){
		$composant = "<label>" . $unLabel . "</label>";
		return $composant;
	}
	
	public function creerInputTexte($unNom, $unId, $uneValue , $placeholder , $required , $pattern){
		$composant = "<input type = 'text' name = '" . $unNom . "' id = '" . $unId . "' ";
		if (!empty($uneValue)){
			$composant .= "value = '" . $uneValue . "' ";
		}
		if (!empty($placeholder)){
			$composant .= "placeholder = '" . $placeholder . "' ";
		}
		if ( $required = 1){
			$composant .= "required ";
		}
		if (!empty($pattern)){
			$composant .= "pattern = '" . $pattern . "' ";
		}
		$composant .= "/>";
		return $composant;
	}
	
	public function creerInputMdp($unNom, $unId,  $required , $placeholder , $pattern, $min, $max){
		$composant = "<input type = 'password' name = '" . $unNom . "' id = '" . $unId . "' ";
		if (!empty($placeholder)){
			$composant .= "placeholder = '" . $placeholder . "' ";
		}
		if ( $required = 1){
			$composant .= "required ";
		}
		if (!empty($pattern)){
			$composant .= "pattern = '" . $pattern . "' ";
		}
		$composant .= "minlength = '" . $min . "' ";
		$composant .= "maxlength = '" . $max . "' ";
		$composant .= "/>";
		return $composant;
	}
	
	public function creerLabelFor($unFor,  $unLabel){
		$composant = "<label for='" . $unFor . "'>" . $unLabel . "</label>";
		return $composant;
	}

	public function creerSelect($unNom, $unId, $unLabel, $options){
		$composant = "<select  name = '" . $unNom . "' id = '" . $unId . "' >";
		foreach ($options as $option){
			$composant .= "<option value = " ;
		}
		$composant .= "</select></td></tr>";
		return $composant;
	}	
	
	public function creerInputSubmit($unNom, $unId, $uneValue){
		$composant = "<input type = 'submit' name = '" . $unNom . "' id = '" . $unId . "' ";
		$composant .= "value = '" . $uneValue . "'/> ";
		return $composant;
	}
	
	public function creerInputBack($unNom, $unId, $onclick, $uneValue){
	    $composant = "<input type = 'button' name = '" . $unNom . "' id = '" . $unId . "' ";
	    if ($onclick = 1){
	        $composant .="onClick= 'window.history.back()' ";
	    }
	    $composant .= "value = '" . $uneValue . "'/> ";
	    return $composant;
	}
	
	public function creerInputCheckbox($unNom, $uneValue, $phrase){
	    $composant = "<input type = 'checkbox' name = '" . $unNom . "' ";
	    $composant .= "value = '" . $uneValue . "' ";
	    $composant .=  ">". $phrase . "";
	    return $composant;
	}
	
	public function creerInputRadio($unNom, $uneValue, $phrase){
	    $composant = "<input type = 'radio' name = '" . $unNom . "' ";
	    $composant .= "value = '" . $uneValue . "' ";
	    $composant .=  ">". $phrase . "";
	    return $composant;
	}
	
	public function creerInputDate($unNom, $unId, $min, $max){
	    $composant = "<input type = 'date' name = '" . $unNom . "' id = '" . $unId . "' ";
	    $composant .= "value = '" . date("m/y") . "' ";
	    $composant .= "max = '" . $max . "' ";
	    $composant .= "min = '" . $min . "'/> ";
	    return $composant;
	}
	
	public function creerInputDate2($unNom, $unId, $min, $max){
	    $composant = "<input type = 'date' name = '" . $unNom . "' id = '" . $unId . "' ";
	    $composant .= "value = '" . date("d/m/Y") . "' ";
	    $composant .= "max = '" . $max . "' ";
	    $composant .= "min = '" . $min . "'/> ";
	    return $composant;
	}
	
	public function creerInputPopup($unNom, $unId, $onclick, $uneValue){
	    $composant = "<input type = 'button' name = '" . $unNom . "' id = '" . $unId . "' ";
	    if ($onclick = 1){
	        $composant .="onClick= 'popup()' ";
	    }
	    $composant .= "value = '" . $uneValue . "'/> ";
	    return $composant;
	}
	
	public function creerInputSubmitForce($unNom, $unId, $onclick, $uneValue){
	    $composant = "<input type = 'button' name = '" . $unNom . "' id = '" . $unId . "' ";
	    if ($onclick = 1){
	        $composant .="onClick= 'submit()' ";
	    }
	    $composant .= "value = '" . $uneValue . "'/> ";
	    return $composant;
	}
	
	public function creerInputReset($unNom, $unId, $uneValue){
	    $composant = "<input type = 'reset' name = '" . $unNom . "' id = '" . $unId . "' ";
	    $composant .= "value = '" . $uneValue . "'/> ";
	    return $composant;
	}
	
	public function creerInputMail($unNom, $unId, $uneValue, $required){
	    $composant = "<input type = 'email' name = '" . $unNom . "' id = '" . $unId . "' ";
	    $composant .= "value = '" . $uneValue . "'";
	    if ($required = 1){
	        $composant .="required";
	    }
	    $composant .= ">";
	    return $composant;
	}

	public function creerInputImage($unNom, $unId, $uneSource){
		$composant = "<input type = 'image' name = '" . $unNom . "' id = '" . $unId . "' ";
		$composant .= "src = '" . $uneSource . "'/> ";
		return $composant;
	}
	
	public function creerImage($unId, $uneSource){
	    $composant = "<img class = '" . $unId . "' ";
	    $composant .= "src = '" . $uneSource . "'/> ";
	    return $composant;
	}
	
	public function creerBouton($unNom, $uneClasse, $unePhrase, $unPrix){
	    $composant = "<button name = '" . $unNom . "' ";
	    $composant .= "class = '" . $uneClasse . "' ";
	    $composant .= "type = 'submit' ";
	    $composant .= "><b>" . $unePhrase ."</b><br />" . $unPrix ."</button>";
	    return $composant;
	}
	
	public function creerFormulaire(){
		$this->formulaireToPrint = "<form method = '" .  $this->method . "' ";
		$this->formulaireToPrint .= "action = '" .  $this->action . "' ";
		$this->formulaireToPrint .= "name = '" .  $this->nom . "' ";
		$this->formulaireToPrint .= "class = '" .  $this->style . "' >";
		
	
		foreach ($this->tabComposants as $uneLigneComposants){
			$this->formulaireToPrint .= "<div class = 'ligne'>";
			foreach ($uneLigneComposants as $unComposant){
				$this->formulaireToPrint .= $unComposant ;
			}
			$this->formulaireToPrint .= "</div>";
		}
		$this->formulaireToPrint .= "</form>";
		return $this->formulaireToPrint ;
	}
	
	public function afficherFormulaire(){
		echo $this->formulaireToPrint ;
	}
	
}