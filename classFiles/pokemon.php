<?php 
class Pokemon{
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attacks;
	public $weakness;
	public $resistance;

	public function __construct($name, $energyType, $hitpoints, $attacks, $weakness, $resistance){
		$this->name = $name;
		$this->hitpoints = $hitpoints;
		$this->health = $hitpoints;
		$this->attacks = $attacks;
		$this->energyType = $energyType;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function attackPokemon(Pokemon $targetPokemon){
		
		$energyType = $this->energyType->getName();
		$weaknessEnergyType = $targetPokemon->getWeakness()->getType();
		$multiplier = $targetPokemon->getWeakness()->getmultiplier();

		if ($energyType == $weaknessEnergyType) {
			$attack->multiplyDamage($multiplier);
		}
		$resistanceEnergyType = $targetPokemon->getResistance()->getType();
		$reducedDamage = $targetPokemon->getResistance()->getReducedDamage();

		if ($energyType == $resistanceEnergyType) {
			$attack->reduceDamage($reducedDamage);
		}

	}
		public function damage($damage){
			$this->health = $this->health - $damage;
	}

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
