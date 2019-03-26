<?php 
class Attack{
	public $name;
	public $damage;

	public function __construct($name, $damage){
		$this->name = $name;
		$this->damage = $damage;
	}
	public function multiplyDamage($multiplier){
		//verhoog de damage die de pokemon geeft door de multiplier keer de damage te doen.
		$this->damage = $this->damage * $multiplier;
	}

	public function reduceDamage($reducedDamage){
		//verlaag de damage door de de reducedamage van de normale damage af te halen
		$this->damage = $this->damage - $reducedDamage;
	}
	
	public function getName(){
		return $this->name;
	}
	public function getDamage(){
		return $this->damage;
	}
}

 ?>