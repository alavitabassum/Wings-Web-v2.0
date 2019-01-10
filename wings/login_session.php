<?php

if (isset($_POST['login'])) {
    if (!empty($_POST['first_name']) && !empty($_POST['password'])) {
        $first_name = trim($_POST['first_name']);
        $password = trim($_POST['password']);
  
        //$md5Password = md5($password);
  
        $sql = "SELECT * FROM `tbl_users` WHERE `first_name` = '".$first_name."' AND `password` = '".$password."'";
        $rs = mysqli_query($connection,$sql);
        $getNumRows = mysqli_num_rows($rs);
  
        if ($getNumRows == 1) {
            $getUserRow = mysqli_fetch_assoc($rs);
            unset($getUserRow['password']);
  
            $_SESSION = $getUserRow;
  
            header('location:home.php');
            exit();
        } else {
            $errorMsg = "Wrong username or password";
          //  exit();
            debug($sql);
        }
    }
  }
  
  //Set session data to an empty array
  if (isset($_GET['lmsg']) && $_GET['lmsg'] == true) {
    $errorMsg = "Login required to access Wings";
  }
?>
