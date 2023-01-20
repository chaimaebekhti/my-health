<?php

session_start();

$pages=[ "primary" , "confirmation" ]; 

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