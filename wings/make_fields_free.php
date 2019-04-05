
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
                  <h2>Update Field Availability</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                         
                              <form action="make_fields_free.php" method="post">
                              <table>
                                <tbody>
                                    <tr>
                                    <td> <label class="form_label">Select Field Name</label></td>
                                    <td>  <select style="width: 184px!important;  padding: 8px;" name="field_name" required>
                                      <option value="">Field Name</option>
                                      <?=get_all_fields()?>
                                      </select></td>
                                    </tr>
                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_field" value="Update"></td>
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

if(isset($_POST['submit_field'])){

    $field_name = $_POST['field_name'];
   

    $sql = '';

    if (!empty($field_name)) {
        $sql = "UPDATE `tbl_fields_info` SET `booking_status` = 'N' WHERE `field_name`= '$field_name'";
    
    } else{
        echo '<script>
        alert("Please select the required field");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)>0) {
        echo '<script>
        alert("Field booking status updated");
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


   