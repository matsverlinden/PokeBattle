<?php 
class Attack{
	public $name;
	public $damage;

	public function __construct($name, $damage){
		$this->name = $name;
		$this->damage = $damage;
	}
	public function multiplyDamage($multiplier){
		$this->damage = $this->damage * $multiplier;
	}

	public function reduceDamage($reducedDamage){
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