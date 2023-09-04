<?php 

include 'classes/Student.php';

$id_number = $_POST['id_number'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$birthdate = $_POST['birthdate'];


$student = new Student($id_number, $firstname, $lastname); //blueprint
$student->setBirthdate($birthdate);

echo "Complete Name: " . $student->completeName();
echo "<br/>";
echo "birthdate: " . $student->getBirthdate();


//Redirect to url
// header("location: /CastellanoJason/index.php");

