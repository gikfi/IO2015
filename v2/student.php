<?php
require_once("student-class.php"); 	

 	$omid = new Student("omid", "1234567");
	$omid->printNameId();

	$mikko = new Student("Mikko", "234sd");
	$mikko->printNameId();

?>