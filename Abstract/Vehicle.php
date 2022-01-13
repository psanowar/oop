<?php


abstract class Vehicle {
	public function display() {
		return 'welcome';
	}
	abstract public function capacity();
	abstract public function fuelAmount();
}