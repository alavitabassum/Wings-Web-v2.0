<?php

session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:index.php?lmsg=true');
    exit;
}

require_once 'db.php';

// if(isset($_POST['submit'])){

//     require_once 'db.php';

//     $deleted = delete_menu_item( $_POST );
//     if( $deleted ){
//         header('location: create_menu.php?success=Menu deleted successfully!');
//     }else{
//        header('location: create_menu.php?error=Error occured while deleting menu');
//     }

// }else{
    
//    header('location: create_menu.php');

// }


if(isset($_POST['get_bookingID'])){


    $bookingID = $_POST['get_bookingID'];
  
  
    $dltSQL = "DELETE FROM `tbl_tmp_booking` WHERE id = '$bookingID'" ;
    $dltresult = mysqli_query($connection, $dltSQL);
    
    if(! $dltresult ) {
       die('Error: Could not delete data: ' . mysql_error());
    }else{
       echo "Deleted data successfully!";
  
    }
    
   
  
  }


  if(isset($_POST['get_Field_bookingID'])){


   $bookingID = $_POST['get_Field_bookingID'];
 
 
   $dltSQL = "DELETE FROM `tbl_field_booking` WHERE id = '$bookingID'" ;
   $dltresult = mysqli_query($connection, $dltSQL);
   
   if(! $dltresult ) {
      die('Error: Could not delete data: ' . mysql_error());
   }else{
      echo "Deleted data successfully!";
 
   }
   
  
 
 }

  if(isset($_POST['get_bookingAcceptedID'])){


   $get_bookingAcceptedID = $_POST['get_bookingAcceptedID'];
   $EquipName = $_POST['get_equipName'];
   $qty = $_POST['get_qty'];


   $updateInventorySQL = "UPDATE `tbl_inventory_equipment`  SET `num_of_equipments` = num_of_equipments-$qty WHERE `equip_name`= '$EquipName'";
   $updateInventoryresult = mysqli_query($connection, $updateInventorySQL);

   if($updateInventoryresult){

       $updateSQL = "UPDATE `tbl_tmp_booking` SET `request_accepted`= 'Y' WHERE `id` = '$get_bookingAcceptedID'" ;
      $updateresult = mysqli_query($connection, $updateSQL);

  
   
   if(! $updateresult ) {
      die('Error: Could not update data: ' . mysql_error());
   }else{
      echo "Update booking successfully!";
 
   }

   }else{
      echo "Error : Inventory not updated";
   }
 
 
 }




 if(isset($_POST['get_field_bookingAcceptedID'])){


   $get_field_bookingAcceptedID = $_POST['get_field_bookingAcceptedID'];
   $get_field_name = $_POST['get_field_name'];


   $updatefieldSQL = "UPDATE `tbl_fields_info`  SET `booking_status` = 'Y' WHERE `field_name`= '$get_field_name'";
   $updateresult = mysqli_query($connection, $updatefieldSQL);

   if($updateresult){
      echo "$get_field_name";

       $updateSQL = "UPDATE `tbl_field_booking` SET `request_accepted`= 'Y' WHERE `id` = '$get_field_bookingAcceptedID'" ;
      $updateresult2 = mysqli_query($connection, $updateSQL);

  
   
   if(! $updateresult2 ) {
      die('Error: Could not update data: ' . mysql_error());
   }else{
      echo "Updated booking successfully! + $get_field_name";
 
   }

   }else{
      echo "Error Accepting Booking";
   }
 
 
 }