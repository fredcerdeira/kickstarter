<?php
	require_once 'pet.php';

class Dog extends Pet

{
	public function speak() {
		return 'Woff! Wo00f!';
	}

	public function plays() {
		return 'fetch';
	}
}