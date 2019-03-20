<?php 
class Pokemon{
	public $name;
	public $energyType;
	public $hitpoints;
	public $health;
	public $attack;
	public $weakness;
	public $resistance;

	public function __construct($name, $hitpoints, EnergyType $energyType, Weakness $weakness, Resistance $resistance){
		$this->name = $name;
		$this->hitpoints = $hitpoints;
		$this->energyType = $energyType;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}

	public function attackPokemon(Pokemon $targetPokemon){
		
		$energyType = $this->EnergyType->getName();
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
		public function getAttack(){
		return $this->attack;
	}
		public function getWeakness(){
		return $this->weakness;
	}
		public function getResistance(){
		return $this->resistance;
	}
}

 ?>
