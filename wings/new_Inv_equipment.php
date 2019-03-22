
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
                  <h2>New Equipment</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New Equipment</h3>
                              <form action="new_Inv_equipment.php" method="post">
                              <table>
                                <tbody>

                                    <tr>
                                    <td> <label class="form_label">Enter Sport Name</label></td>
                                    <td>
                                    <select style="width: 184px!important;  padding: 8px;" name="sport_id" required>
                                    <option value="">Select Sport Category</option>
                                    <?=get_sports_list()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <!-- <tr>
                                    <td> <label class="form_label">Enter Equipment Name</label></td>
                                    <td><input type="text" name="Equipment_name" placeholder="Equipment name" required></td>
                                    </tr> -->

                                    <tr>
                                    <td> <label class="form_label">Select Equipment</label></td>
                                    <td>
                                    <select style="width: 184px!important;  padding: 8px;" name="Equipment_name" required>
                                    <option value="">Select Equipment</option>
                                    <?=get_equipment_list()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td> <label class="form_label">Select Inventory Rack</label></td>
                                    <td>
                                    <select style="width: 184px!important;  padding: 8px;" name="rack_id" required>
                                    <option value="">Select Inventory Rack</option>
                                    <?=get_all_invRacks()?>
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

    $sport_id = $_POST['sport_id'];
    $rack_id = $_POST['rack_id'];
    $Equipment_name = $_POST['Equipment_name'];
    $num_of_equipments = $_POST['num_of_equipments'];
    $user_role = $_SESSION['first_name'];


   

    $sql = '';

    if (!empty($sport_id) and !empty($rack_id) and !empty($Equipment_name)) {
        $sql = "INSERT INTO `tbl_inventory_equipment`( `equip_name`, `sport_name`, `rack_name`, `num_of_equipments`, `entry_by`) VALUES ('$Equipment_name','$sport_id', '$rack_id','$num_of_equipments', '$user_role')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New Equipment Created");
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


   