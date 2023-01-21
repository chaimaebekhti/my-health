<?php
class User{

public  $id; 
private $Email;
private $Confirmation;


    
	

   public function getId(){
   	  return $this->id;
   }

    public function setId($id){
        $this->id = $id;
    }

   public function getEmail(){
      return $this->Email;
   }

    public function setEmail($Email){
        $this->Email = $Email;
    }

    public function getConfirmation(){
      return $this->Confirmation;
   }

    public function setConfirmation($Confirmation){
        $this->Confirmation = $Confirmation;
    }


 } 



