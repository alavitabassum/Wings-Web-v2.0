<?php
 session_start();

//Set session data to an empty array
$_SESSION = array();

session_destroy();

if (isset($_SESSION['first_name'])) {
    header("location: home.php?msg=Error:_Logout_Failed");
} else {
    header("location: index.php");
    exit();
}
// destroy the session 

?>