<?php

session_start();
include "classes/User.php";
include "classes/UserManager.php";
include "classes/SessionManager.php";
include "db.php";

$userManager = new UserManager($db);
$SessionManager = new SessionManager();


$pages=[ "primary" , "confirmation" , "login" , "myHealth" ,"disease", "liver" , "intestine"]; 

$page="";
if (isset($_GET["page"])) {
	$page=$_GET["page"];
}

if (!in_array($page , $pages)) {
     $page = "primary" ;
}     


include "corps/top.php";

include "pages/" . $page . ".php" ;

include "corps/bottom.php";
?>