<?php 
class Resistance{
	public $energyType;
	public $reducedDamage;

	public function __construct($energyType, $reducedDamage){
		$this->energyType = $energyType;
		$this->reducedDamage = $reducedDamage;
	}
	public function getType(){
		return $this->energyType;
	}
	public function getReducedDamage(){
		return $this->reducedDamage;
	}
}

 ?>