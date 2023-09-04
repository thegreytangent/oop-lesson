<?php
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
 