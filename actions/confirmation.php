<?php 

 
if(empty($_POST["Email"])|| empty($_POST["confirmation"])){
   echo "Please enter your name";
 }else{

       $Name = $_POST["Email"];
       $message = $_POST["confirmation"];
       
   
       header("Location:http://localhost/my health/indox?page=primary");


}






 ?>