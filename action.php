<?php

session_start() ;
include "classes/User.php";
include "classes/UserManager.php";
include "db.php";
include "classes/SessionManager.php";

$userManager = new UserManager($db);
$SessionManager = new SessionManager();

$pages=["primary","confirmation", "login" , "myHealth"];

$page="";
if (isset($_GET["page"])) {
	$page=$_GET["page"];
}

if (!in_array(  $page , $pages)) {
  
  exit;
}
	

include "actions/" . $page . ".php" ;