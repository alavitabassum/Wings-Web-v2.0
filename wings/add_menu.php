<?php

if(isset($_POST['submit'])){

    require_once 'db.php';
    $created = add_new_menu_item( $_POST );
    if( $created ){
        header('location: create_menu.php?success=Menu created successfully!');
    }else{
       header('location: create_menu.php?error=Error occured while creating menu');
    }

}else{
    header('location: create_menu.php');

}

