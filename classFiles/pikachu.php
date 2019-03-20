<?php 
class Pikachu extends Pokemon{

	public function __construct($name){
		$attacks = [
			"Pika Punch" => new Attack("Pika Punch, 20.0"),
			"Electric Ring" => new Attack("Electric Ring, 50.0")
		];

		$hitPoints = 60;
	}
}

 ?>