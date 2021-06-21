<?php
namespace App;

class Greeter {
	public function greet(string $name = null):Duck {
		if($name) {
			return "Hello, $name!";
		}

		return "Hello!";
	}
}
