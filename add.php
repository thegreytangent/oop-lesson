<?php 
// test edit
$id_number = $_POST['id_number'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];


class Student { // class name
   
	//attributes
	public string $id_number;
	public string $firstname;
	public string $lastname;
	public string $birthdate;

	//constructor
	public function __construct($id_number,$firstname,$lastname) {
		$this->id_number = $id_number;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
	}

	public function setBirthdate(string $date) { //methods
		$this->birthdate = $date;
	}


	public function getBirthdate() : string { //methods
		return $this->birthdate;
	}

	public function completeName() : string { //methods
		return $this->firstname ." ". $this->lastname;
	}

	public function displayBirthdate() : string {
		$timestamp = strtotime($this->birthdate);
		return date("F j, Y", $timestamp);
	}

}



$student = new Student($id_number, $firstname, $lastname); //blueprint
$student->setBirthdate($birthdate);


echo "Complete name: " .  $student->completeName() . "</br>"; //  John Doe
echo "Birthdate: " . $student->displayBirthdate(); // August 1,2000

