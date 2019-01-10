<?php
  define("HOST","localhost");
  define("DB_USER","root");
  define("DB_PASS","");
  define("DB_NAME","cms");
  
  $connection = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
  
  if(!$connection)
  {
      die(mysqli_error());
  }

 
/* $sql ="SELECT tbl_user_role.*, tbl_role_permission.*, menus.* FROM tbl_user_role left join tbl_role_permission on tbl_user_role.id = tbl_role_permission.user_role_id left join menus on tbl_role_permission.menu_id = menus.id WHERE tbl_role_permission.user_role_id =1";

$result= mysqli_query($connection,$sql);

while($row = mysqli_fetch_assoc($result)){
    if ($row['user_role_id']) {
        if($row['page']){
            echo "success";
        }else{
            echo "no access";
        }
       
    } else {
        header('location:errorpage.php');

    }
    return $row['page'];
} */
