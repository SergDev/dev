<?php
//session_start();
//$_SESSION["name"] = "Serg";


//session_destroy();
ini_set('session.name', "mySeesonSerg");
//session_start();
//echo $_SESSION["name"];
session_start();
$_SESSION["lastName"] = "Per";
echo $_SESSION['lastName'];

//ini_set("session.gc_maxlifetime", 2);
//session_gc();
//session_destroy();
echo $_SESSION['lastName'];