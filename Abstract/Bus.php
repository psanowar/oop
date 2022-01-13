<?php
require 'Vehicle.php';

class Bus extends Vehicle {
	
	public function capacity(){
		return 10;
	}

	public function fuelAmount(){
		return 20;
	}
}


$bus = new Bus();
echo $bus->fuelAmount();

