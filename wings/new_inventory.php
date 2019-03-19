
<?php
session_start();

if (!isset($_SESSION['id'], $_SESSION['user_role_id'])) {
    header('location:index.php?lmsg=true');
    exit;
}

require_once 'db.php';
//get_menus();
//display_menu();
include 'header_general.php';
include 'sidebar.php';
include 'top_nav.php';

?>
     
 <!-- page content -->
 <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>New Inventory</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New Inventory</h3>
                              <form action="new_inventory.php" method="post">
                              <table>
                                <tbody>
                                    <tr>
                                    <td colspan="2">
                                    <select style="width: 205px!important;  padding: 8px;" name="user_role_id" required>
                                    <option value="">Select Inventory Manager</option>
                                    <?=get_all_user_names()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td> <label class="form_label">Enter Inventory Name</label></td>
                                    <td><input type="text" name="Inventory_name" placeholder="Inventory name" required></td>
                                    </tr>

                                    <tr>
                                    <td><label class="form_label">Enter Inventory Address</label></td>
                                    <td> <input type="text" name="Inventory_add" placeholder="Inventory address" required></td>
                                    </tr>

                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_inventory" value="Create Inventory"></td>
                                    </tr>
                                </tbody>
                              </table>
                                
                                  
                              </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->
    </div>
  </div>

  <?php

if(isset($_POST['submit_inventory'])){

    $user_role = $_POST['user_role_id'];
    $Inventory_name = $_POST['Inventory_name'];
    $Inventory_add = $_POST['Inventory_add'];
   

    $sql = '';

    if (!empty($user_role) and !empty($Inventory_name) and !empty($Inventory_add)) {
        $sql = "INSERT INTO `tbl_inventory_info`( `inventory_name`, `inventory_address`, `Inventory_Manager`) VALUES ('$Inventory_name','$Inventory_add', '$user_role')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New Inventory Created");
        </script>';
    }else{
        echo '<script>
        alert("Error!");
        </script>';
    }

}else{
  echo "";

}

?>
  <?php include 'footer_script_tags.php'?>


   