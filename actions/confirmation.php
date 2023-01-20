<?php 

 
if(empty($_POST["Email"])|| empty($_POST["confirmation"])){
   echo "Please enter your Email";
 }else{

       $Email = $_POST["Email"];
       $confirmation = $_POST["confirmation"];
       $user = $userManager->getUserByEmailAndConfirmation($Email , $Confirmation);
       
       
       $_SESSION['id'] = $user->getId();
       header("Location:http://localhost/my-health/indox?page=primary");


}






 ?>