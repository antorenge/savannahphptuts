<?php
	/*
	 * OOP interface demonstration by [ Mutinda Boniface::: www.developer.rebmos.com ]
	 *
	 * We assume that in our program, "every" person/user can update profile differently
	 * 
	 * Employee and the employer updates profile the same way
	 * Administrator updates his/her profile in a different way
	 *
	 * interface Person: contains unimplemented updateProfile() which should be implemented 
	 * in classes which implements them: 
	 *		in our case the Employee_Employer_Controller and Administrator
	 
	 * Employee and Employer have common tasks e.g. sendMail:
	 * 		To handle this Employee_Employer_Controller class will solve everythinng
	 *		NB: abstract class means we cant have an instance of the class
	 * 
	 * Employee other than updateProfile() and sendMail can delete an employee
	 *
	 * Administrator is the only user who can delete user_error	
	 *
	 */
	// Best approach since php doesn't support multiple inheritance
	interface Person{
		public function updateProfile( $new_data = array() );
	}

	// abstract: we cant create an object based on the class
	abstract class Employee_Employer_Controller implements Person{
		// employee and employer can update their profile
		public function updateProfile( $new_data = array() ){}
		
		protected function canSendMessage( ){
			return true;
		}
		
		public function sendMail( $options = array() ){
			// have i disabled mail sending to both the employee and the employer
			// you can also modify this to a specific user enable/disable
			if( Employee_Employer_Controller:: canSendMessage() ){
				//continue with sending mail....extract the calling object also
				echo get_called_class()." Is sending a message ...";
			}
		}
	}
	
	class Employer extends Employee_Employer_Controller{
		private $emp_id = null;
		public function __construct( $emp_id ){
			$this->emp_id = $emp_id;
		}
		public function deleteEmployee( $employee_id ){	}
	}
	
	class Employee extends Employee_Employer_Controller{
		// view stats of the sales an employee has recorded..
		public function mySales(  ){}
	}
	
	class Administrator implements Person{
		public function deleteUser( $user_id ){
			echo get_called_class()." Is deleting a user with id {$user_id}";
		}
		public function updateProfile( $new_data = array() ){}
	}
?>