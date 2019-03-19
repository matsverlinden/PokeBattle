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

}


 ?>
