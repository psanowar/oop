<?php
class Persion {
	public static $name = 'Sanowar Hossain';

	public static function display() {
		echo "Wellcome to dhaka";
	}

	public function Name() {
		return self::$name;
	}
}


Persion::display();
echo '<br>';
echo Persion::$name;
echo '<br>';

$obj = new Persion();
$obj1 = new Persion();
echo 'From Object 1:' . $obj->Name();
echo '<br>';
echo 'From Object 2:' . $obj1->Name();
echo '<br>';

Persion::$name = 'shihab';

echo 'From Object 1:' . $obj->Name();
echo '<br>';
echo 'From Object 2:' . $obj1->Name();