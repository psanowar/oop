<?php
class Vehicle {
	public $capacity = 15;
}

class Bus extends Vehicle {
	public function updateCapacity(){
		$this->capacity = 25;
	}
}

$bus = new Bus();
echo $bus->capacity;