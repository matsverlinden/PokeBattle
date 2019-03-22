<?php 
class Charmeleon extends Pokemon{

	public function __construct($name){
		$energyType = new EnergyType('Fire');
		$hitpoints = 60;

		$attacks = [
			"Flare" => new Attack("Flare", 30.00),
			"Head Butt" => new Attack("Head Butt", 10.00)
		];

		$weakness = new Weakness("Water", 2.00);
		$resistance = new Resistance("Lightning", 10.00);
		
		parent::__construct($name,$energyType,$hitpoints,$attacks,$weakness,$resistance);
	}
}

 ?>