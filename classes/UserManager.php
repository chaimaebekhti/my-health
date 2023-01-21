<?php 

class UserManager{

private $db;

public function __construct($db) {
        $this->db = $db;
	}

    public function getUsers() {
    	$result = $this->db->query("SELECT * FROM users");

    	$users = [];
    	while($user = $result->fetch_assoc()) {

    	    $userJdid = new User();
    	    $userJdid->setId($user["id"]);
    	    $userJdid->setEmail($user["Email"]);
    	    $userJdid->setConfirmation($user["Confirmation"]);
    	    
    	    

$users[] = $userNew;

    	}

    	return $users;
    }

   
    public function getUserByEmailAndConfirmation($Email , $Confirmation){
        $Email = $this->db->real_escape_string($Email);
        $Confirmation = $this->db->real_escape_string($Confirmation);
        $result = $this->db->query("SELECT * FROM users WHERE Email = '$Email' AND Confirmation = '$Confirmation'");

        $user = $result->fetch_assoc();
        if(!$user){
            return null;
        }

        
        return  $this->arrayToUser($user);
    }



    public function getUserById($id){
         $id = (int) $id;
         $result = $this->db->query("SELECT * FROM users WHERE id=$id");
          $user = $result->fetch_assoc();
           if(!$user){
            return null;
    }
     
     
       
        
        return  $this->arrayToUser($user);
        
    }

     public function createUser($Email , $Confirmation) {
       $Email = $this->db->real_escape_string($Email);
       $Name = $this->db->real_escape_string($Confirmation);
      
    	
       $result=$this->db->query("INSERT INTO users(Email,Name,Born) VALUES ('$Email','$Confirmation')");

       	if ($result) {
       		return true;
       	}else{
       		return false;
       	}
     }


     
      public function updateUserConfirmation($id , $newConfirmation){
        $newName = $this->db->real_escape_string($newConfirmation);
        $id = (int) $id;

        $result = $this->db->query("UPDATE users SET Confirmation = '$newConfirmation' WHERE id = $id'");
            if ($result) {
            return true;
        }else{
            return false;
        }

     }


  private function arrayToUser($user) {
    $userJdid = new User();
    $userJdid->setId($user["id"]);
    $userJdid->setEmail($user["Email"]);
    $userJdid->setConfirmation($user["Confirmation"]);
    

        return $usernew;
    }
  } 

