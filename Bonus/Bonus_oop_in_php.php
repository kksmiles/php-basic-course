<?php
	class Animal
	{
		public $legs;
		public $wings;

		public function __construct ($clegs,$cwings)
		{
			$this->legs = $legs;
			$this->wings = $wings;
		}
		static function talk()
		{
			echo "Animal is talking";
		}
	}

	Animal::talk();
	// talk() ka static so yin Animal::talk(); public so yin Animal->talk();

	class Dog extends Animal
	{

	}

	$bobby = new Dog();
	$bobby->talk();

?>