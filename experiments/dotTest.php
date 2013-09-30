<?php
	require 'dog.php';
	$fido = new Dog('Fido');
		echo 'The dog name is: ' . $fido->name . '<br>';
		echo 'The dog says: ' . $fido->speak() . '<br>';

	$fifi = new Dog('Fifi');
	echo 'The dog\'s name is: ' . $fifi->name . '<br>';
	echo 'The dog says: ' . $fifi->speak() . '<br>';
