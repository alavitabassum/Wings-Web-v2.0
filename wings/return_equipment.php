
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
                  <h2>Return Equipment</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                       
                              <form action="return_equipment.php" method="post">
                              <table>
                                <tbody>

                                   

                                    <tr>
                                    <td> <label class="form_label">Select Equipment</label></td>
                                    <td>
                                    <select style="width: 184px!important;  padding: 8px;" name="Equipment_name" required>
                                    <option value="">Select Equipment</option>
                                    <?=get_InventoryEquipment_list()?>
                                    </select>
                                    </td>
                                    </tr>
                                         
                                    <tr>
                                    <td> <label class="form_label">Enter Equipment Quantity</label></td>
                                    <td><input type="number" name="num_of_equipments" placeholder="Equipment Quantity" required></td>
                                    </tr>

                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_Equipment" value="Submit Entry"></td>
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

if(isset($_POST['submit_Equipment'])){


    $Equipment_name = $_POST['Equipment_name'];
    $num_of_equipments = $_POST['num_of_equipments'];
    $user_role = $_SESSION['first_name'];


   

    $sql = '';

    if (!empty($Equipment_name)) {
        $sql = "UPDATE `tbl_inventory_equipment` SET `num_of_equipments` = num_of_equipments+$num_of_equipments WHERE `equip_name`= '$Equipment_name'";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("Inventory Updated");
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


   