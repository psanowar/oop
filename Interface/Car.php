<?php

require 'Vehicle.php';

class Car implements Vehicle {

	public function display(){
		return 'welcome';
	}

	public function capacity(){
		return 12;
	}

	public function fuelAmount(){
		return 22;
	}
}


$car = new Car();
echo $car->capacity();
