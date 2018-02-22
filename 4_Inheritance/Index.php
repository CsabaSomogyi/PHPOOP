<?php 
 require 'Bird.php';
 require 'Pigeon.php';
  require 'Penguin.php';

$pigeon  = new Pigeon(true,2);

echo $pigeon->getLegCount();

if ($pigeon->canFly()) {
	echo "<br> Can Fly";
}



$penguin  = new Penguin(false,2);
if (!($penguin->canFly())) {
	echo "<br> Can't Fly";
}

 ?>