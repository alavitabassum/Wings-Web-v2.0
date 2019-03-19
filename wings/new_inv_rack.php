
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
                  <h2>New Inventory Rack</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New Rack For Inventory</h3>
                              <form action="new_inv_rack.php" method="post">
                              <table>
                                <tbody>
                                    <tr>
                                    <td colspan="2">
                                    <select style="width: 205px!important;  padding: 8px;" name="Inventory_id" required>
                                    <option value="">Select Inventory</option>
                                    <?=get_all_inventories()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td colspan="2">
                                    <select style="width: 205px!important;  padding: 8px;" name="Inventory_line_id" required>
                                    <option value="">Select Inventory Line</option>
                                    <?=get_all_invLines()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td> <label class="form_label">Enter Inventory rack Name</label></td>
                                    <td><input type="text" name="Inventory_rack" placeholder="Rack name" required></td>
                                    </tr>

                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_invrack" value="Create Rack"></td>
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

if(isset($_POST['submit_invrack'])){

    $Inventory_id = $_POST['Inventory_id'];
    $Inventory_line = $_POST['Inventory_line_id'];
    $Inventory_rack = $_POST['Inventory_rack'];
   

    $sql = '';

    if (!empty($Inventory_id) and !empty($Inventory_line) and !empty($Inventory_rack)) {
        $sql = "INSERT INTO `tbl_inventory_racks`(`inventoryCode`,`lineCode`, `rackName`) VALUES ('$Inventory_id','$Inventory_line','$Inventory_rack')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New Inventory rack Created");
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


   