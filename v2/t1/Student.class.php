<?php
	// TODO: nimi ja id kentät
	
	// TODO: konstruktori
	// TODO: tarkasta id:n validius joko konstruktorissa tai tee sitä varten oma metodi
	
	// TODO: metodi joka palauttaa nimen ja id:n
	


	class Student
	{
		private $name, $id; 

		public function __construct($name, $id) {

			if(preg_match('/^[0-9]{7}$/', $id)) {
			$this->name = $name; 
			$this->id = $id; 
			} else {
				throw new Exception("Id must be 7 numbers<br>");
				return 0;
			}

		} 
		function printNameId() { 
			print "Name: $this->name id: $this->id <br>";
		}


	}
 	
?>