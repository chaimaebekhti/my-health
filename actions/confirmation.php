<?php 

 
//var_dump($_POST) ;

if(isset($_POST['Email'])&& isset($_POST['confirmation'])){
       
       $Email = $_POST['Email'];
       $confirmation = $_POST['confirmation'];

       if(strlen($Email) < 5){
         die("Error: Your E-mail is incorrect.");
        }

        if(strlen($confirmation) < 4){
         die("Error: Enter a Password that is at least 4 characters.");
        }
       

       $user = $userManager->createUser($Email, $confirmation);
       if(!$user){
         echo "Error: operachtion fail.";
         exit;
       }

      
        header("Location: http://localhost/my-health/index.php?page=login");
     
    }   











 ?>


