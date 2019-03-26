<?php 
//Hier maak je Pikachu aan met alle waardes die het nodig heeft en dat geef je door naar de class pokemon.
class Pikachu extends Pokemon{
	public function __construct($name){
		$energyType = new EnergyType('Lightning');
		$hitpoints = 60;
		$attacks = [
			"Pika Punch" => new Attack("Pika Punch", 20.0),
			"Electric Ring" => new Attack("Electric Ring", 50.0)
		];
		$weakness = new Weakness("Fire",1.50);
		$resistance = new Resistance("Fighting",20.00);
		parent::__construct($name,$energyType,$hitpoints,$attacks,$weakness,$resistance);
	}
}

 ?>