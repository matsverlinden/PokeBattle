<?php 
class Resistance{
	public $energyType;
	public $reducedDamage;

		public function __construct($energyType, $reducedDamage){
		$this->energyType = $energyType;
		$this->reducedDamage = $reducedDamage;
	}
}

 ?>