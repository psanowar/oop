<?php
require 'Vehicle.php';

class Bus implements Vehicle {

	public function display(){
		return 'welcome';
	}
	
	public function capacity(){
		return 10;
	}

	public function fuelAmount(){
		return 20;
	}

	public function applyBreaks(){
		return 'Breaked';
	}
}


$bus = new Bus();
echo $bus->display();

