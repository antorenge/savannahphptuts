<?php
	/* animals class implementation php file */
	require "animals.class.php";
	
	$person = new HumanBeing( "Mutinda Boniface", 23 );
	$dog = new Dog( "Puppy" );
	
	// testing walk() method for the two objects...
	$person->walk(); 	echo "<br/>";
	$dog->walk(); 		echo "<br/>";
	$dog->bark(); 		echo "<br/>";
	
	/* users class implementation php file */
	echo "<h2> php oop USERS class... </h2>";
	require "users.class.php";
	
	$employer = new Employer( 123 );
	$employee = new Employee();
	$administrator = new Administrator();
	
	/* calling users methods.. */
	// employer and employee sending an email message..
	$employer->sendMail( array("type"=>"email",
						"data"=>array(
							"to"=>"boniface.info@gmail.com",
							"Subject"=>"Mail subject here " )
						) );
	echo "<br/>";
	$employee->sendMail( array("type"=>"email",
						"data"=>array(
							"to"=>"boniface.info@yahoo.com",
							"Subject"=>"Mail subject here 2 " )
						) );
	echo "<br/>";
	$administrator->deleteUser( 123 );
	
	/* PHP magic functions class implementation php file */
	echo "<h2> php magic functions   __set() and __get() ... </h2>";
	require "magic.functions.class.php";
	
	$user1 = new UserWithoutMagicFunctions();
	$user2 = new UserWithMagicFunctions();
	// set and retrive without magic functions
	$user1->setName("Mutinda Boniface");
	echo $user1->getName();

	
	echo "<br/>";
	// set and extract any propert with magic functions
	$user2->name = "Mutinda Boniface";
	echo $user2->name;
	
	
?>