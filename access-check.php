<?php 

// Run all the code to see if user can access the file

//session_start(); // For testing
//$_SESSION['scormtoken'] = '222'; // For testing
//$_SESSION["user_logged_in"] = true;

$scormtoken = $_GET['scormtoken'] ?? false;

if (session_status() === PHP_SESSION_NONE) die("Requires login"); 
 
if ( empty($_SESSION["user_logged_in"]) ) die("No direct access"); 

if ( empty($_SESSION['scormtoken']) ) die('Token not found');

if ( $scormtoken !== $_SESSION['scormtoken'] ) die('Not your file'); // Session scorm token is created when user tries to open a scorm link

//session_destroy(); // For testing