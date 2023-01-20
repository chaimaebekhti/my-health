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
    	    $userJdid->setName($user["Name"]);
    	    $userJdid->setBorn($user["Born"]);
    	    

$users[] = $userNew;

    	}

    	return $users;
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

     public function createUser($Email , $Name, $Born) {
       $Email = $this->db->real_escape_string($Email);
       $Name = $this->db->real_escape_string($Name);
       $Born = (int) $Born;
    	
       $result=$this->db->query("INSERT INTO users(Email,Name,Born) VALUES ('$Email','$Name',$Born)");

       	if ($result) {
       		return true;
       	}else{
       		return false;
       	}
     }


     
      public function updateUserName($id , $newName){
        $newName = $this->db->real_escape_string($newName);
        $id = (int) $id;

        $result = $this->db->query("UPDATE users SET Name = '$newName' WHERE id = $id");
            if ($result) {
            return true;
        }else{
            return false;
        }

     }


  private function arrayToUser($user) {
    $userJdid = new User();
    $userJdid->setId($user["id"]);
    $userJdid->setName($user["Name"]);
    $userJdid->setEmail($user["Email"]);
    $userJdid->setBorn($user["Born"]);

        return $userJdid;
    }
  } 

