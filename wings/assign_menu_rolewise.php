<?php

if(isset($_POST['submit'])){

    require_once 'db.php';
    $created = assign_menu( $_POST );
    if( $created ){
        header('location: assign_menu.php?success=Menu created successfully!');
    }else{
       header('location: assign_menu.php?error=Error occured while creating menu');
    }

}else{
    header('location: assign_menu.php');

}

