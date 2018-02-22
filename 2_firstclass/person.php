<?php 

/**
* 
*/
class Person
{
	public $name;
	public $age;

	public function sentence() {
		return "Name: " .  $this->name . " Age: " . $this->age ;
	}

}
 ?>