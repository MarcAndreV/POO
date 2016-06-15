<?php


/* ======= DEFINITION DE LA CLASSE ========*/
class Automobile {

	/* PROPRIETES D'INSTANCES (relative à l'objet) : */
	protected $marque; // ferrari, citroen, etc ... 
	protected $vitesse = 0;
	protected $moteur = 0; // 0 : eteint, 1 : allumé
	protected $vitesseMax;

	// propriete de classe 
	public static $langue = "francais";

	// methode de classe
	public static function changerLangue($lang) {
		self::$langue = $lang;
	}


	/* METHODES D'INSTANCES (relative à l'objet): */
	function __construct($v_max) { // cette methode n'agit qu'une seule fois
		$this->vitesseMax = $v_max;
	}

	public function bonjour() {
		if(self::$langue == "francais"){
			echo "Bonjour";
			echo "Hello";
		} else {
			echo "Hello";
		}
	}
	
	public function demarrer(){
		//mettre le moteur en route 
		return $this->moteur = 1;
	}

	public function arreter(){
		// mettre le moteur à l'arret: condition : vitesse == 0
		if ($this->vitesse == 0) {
			$this->moteur = 0;		
		} else {
			echo "Impossible : votre véhicule roule encore ";
			echo $this->etat();
		}
	}

	public function accellerer($speed){	// je place un argument à ma fonction pour pouvoir la modifier à l'appel
		if ($speed + $this->vitesse > $this->vitesseMax) {
			$this->vitesse = $this->vitesseMax;
		} else {
			$this->vitesse += $speed; 
		}	
	}

	public function ralentir($speed) {
		$this->vitesse -= $speed; 
	}

	public function etat(){
		echo "moteur = " . $this->moteur . "<br>";
		echo "vitesse = " . $this->vitesse . "<br>";
		echo "<hr>";
	}	
}

echo "<meta charset='utf-8'>";