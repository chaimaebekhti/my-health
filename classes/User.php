<?php
class User{

public  $id; 
private $Email;
private $Name;
private $Born;

    
	

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

    public function getName(){
      return $this->Name;
   }

    public function setName($Name){
        $this->Name = $Name;
    }

   public function getBorn(){
      return $this->Born;
   }

    public function setBorn($Born){
        $this->Born = $Born;
    }

    
   


 } 



