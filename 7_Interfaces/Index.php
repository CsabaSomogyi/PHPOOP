<?php 
require 'Collection.php';

$c = new Collection();

$c->add('foo');
$c->add('bar');

echo json_encode($c);
echo "<br>";
echo count($c);


require 'TalkInterface.php';
require 'Dog.php';
require 'Cat.php';

$dog= new Dog();
$cat= new Cat();
echo "<hr>" . $dog->talk() . "<br>". $cat->talk();



 ?>