<?php
	/* Class without __set() and __get() methods */
	class UserWithoutMagicFunctions{
		private $name = null;
		private $age = null;
		
		public function setName( $new_name ){
			$this->name = $new_name;
		}
		public function getName(){ 
			return $this->name;
		}
		public function setAge( $new_age ){
			$this->age = $new_age;
		}
		public function getAge(){
			return $this->age;
		}
		// and many more methods eg. getGender(),getLocation(), ...
	}
	
	// A more generic and robust class that can hanle any property setup and retrieval..
	// NB: Although to me i dont like this approach...i need to watch everything in my class methods
	class UserWithMagicFunctions{
		private $name = null;
		private $age = null;
		
		// set undeclareed property and assign a value
		public function __set( $property, $value ){
			$this->$property = $value;
		}
		// extract an already defined property..
		public function __get( $property ){
			if( isset( $this->$property) ){
				return $this->$property;
			}
		}
	}
?>