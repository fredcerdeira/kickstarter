<?php
require 'Dog.php';
require 'Cat.php';
require 'Fish.php';

$fido = new Dog('Fido');
echo 'The dog\'s name is: ' . $fido->name . '<br>';
echo 'The dog says: ' . $fido->speak() . '<br>';
echo 'The dog plays: ' . $fido->plays() . '<br>';

$mittens = new Cat('Mittens');
echo 'The cat\'s name is: ' . $mittens->name . '<br>';
echo 'The cat says: ' . $mittens->speak() . '<br>';
echo 'The cat plays: ' . $mittens->plays() . '<br>';

$bubbles = new Fish('Bubbles');
echo 'The fish\'s name is: ' . $bubbles->name . '<br>';
echo 'The fish says: ' . $bubbles->speak() . '<br>';
