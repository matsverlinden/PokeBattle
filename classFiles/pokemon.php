<?php 
class Pokemon{
	//Hier geef je de waardes van de acces modifiers mee
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
		//haal alle waarde op van de pokemon die nu aanvalt
		$this->name = $name;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
		$this->attacks = $attacks;
		$this->energyType = $energyType;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function attackPokemon(Pokemon $targetPokemon, Attack $attack){
		echo 'De HP van ' . $targetPokemon->name . ' is momenteel ' . $targetPokemon->health . '/' . $targetPokemon->hitpoints . '<br>';
		echo $this->name . ' heeft ' . $targetPokemon->name .' aangevallen met '. $attack->getName() . '!<br>';

		$energyType = $this->energyType->getName();
		//haal de weakness en de multiplier van de pokemon die aangevallen word op
		$weaknessEnergyType = $targetPokemon->getWeakness()->getType();
		$multiplier = $targetPokemon->getWeakness()->getmultiplier();
			//vergelijk of de energytype van de pokemon die aanvalt gelijk is aan de weakness van de andere pokemon.
			//wanneer dit het geval is zal de attack meer damage doen door de multiplier.
		if ($energyType == $weaknessEnergyType) {
			$attack->multiplyDamage($multiplier);

		}
		//haal de resistance en de hoeveelheid damage op van de pokemon die word aangevallen.
		$resistanceEnergyType = $targetPokemon->getResistance()->getType();
		$reducedDamage = $targetPokemon->getResistance()->getReducedDamage();
			//als de energytype van de pokemon die aanvalt en resistance van de andere gelijk is dan moet er minder damage uitgedeeld worden met de attack.
		if ($energyType == $resistanceEnergyType) {
			$attack->reduceDamage($reducedDamage);

		}

		$damage = $attack->getDamage();
		$targetPokemon->reduceHealth($damage);

		echo $targetPokemon->name . ' heeft na de aanval nog ' . $targetPokemon->health . '/' . $targetPokemon->hitpoints . ' HP over!';


	}
		//haal het aantal damage dat is gedaan van de health af.
		public function reduceHealth($damage){
			$this->health = $this->health - $damage;
	}

	//hier return je alle waarde met getters
	public function getName(){
		return $this->name;
	}
	public function getType(){
		return $this->energyType;
	}
	public function getHitpoints(){
		return $this->hitpoints;
	}
	public function getHealth(){
		return $this->health;
	}
	public function getAttacks(){
		return $this->attacks;
	}
	public function getWeakness(){
		return $this->weakness;
	}
	public function getResistance(){
		return $this->resistance;
	}

}

 ?>
