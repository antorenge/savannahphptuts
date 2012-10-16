<?php
	/* An animal interface definition */
	interface AnimalInterface{
		public function walk();
	}
	class HumanBeing implements AnimalInterface{
		private $name = null;
		private $age = null;
		
		public function __construct( $par_name, $par_age ){
			$this->name = $par_name;
			$this->age = $par_age;
		}
		// walk method implementation to human beings...walks in 2 legs
		public function walk(){ echo "I am  {$this->name} :	I walk in 2 legs"; }
	}
	
	class Dog implements AnimalInterface{
	
		private $name = null;
		
		public function __construct( $par_name ){
			$this->name = $par_name;
		}
		// walk method implementation to a dog...walks in 4 legs
		public function walk(){ echo "I am  {$this->name} : I walk in 4 legs";}
		public function bark(){ echo "Am barking now....";}
	}

?>