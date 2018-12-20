<?php

if(isset($_POST['submit'])){

    require_once 'db.php';

    $deleted = delete_menu_item( $_POST );
    if( $deleted ){
        header('location: create_menu.php?success=Menu deleted successfully!');
    }else{
       header('location: create_menu.php?error=Error occured while deleting menu');
    }

}else{
    
   header('location: create_menu.php');

}

