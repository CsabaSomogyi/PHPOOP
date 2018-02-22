<?php 

/**
* 
*/
class Person
{
	public $name;
	public $age;

	// magic method 
	public function __construct($name, $age) {
		$this->name = $name;
		$this->age = $age;
	}



	public function sentence() {
		return "Name: " .  $this->name . " Age: " . $this->age ;
	}

}
 ?>