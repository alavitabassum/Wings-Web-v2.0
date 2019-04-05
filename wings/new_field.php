
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
                  <h2>New field</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New field Record</h3>
                              <form action="new_field.php" method="post">
                              <table>
                                <tbody>
                                    <tr>
                                    <td> <label class="form_label">Enter field Name</label></td>
                                    <td><input type="text" name="field_name" placeholder="field name" required autofocus></td>
                                    </tr>

                                    
                                    <tr>
                                    <td> <label class="form_label">Select Field Category</label></td>
                                    <td>  <select style="width: 184px!important;  padding: 8px;" name="field_cat_name" required>
                                      <option value="">Select Outdoor/Indoor</option>
                                     <option value="outdoor">Outdoor</option>
                                     <option value="indoor">Indoor</option>
                                      </select></td>
                                    </tr>

                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_field" value="Create field"></td>
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
    $field_cat_name = $_POST['field_cat_name'];
   

    $sql = '';

    if (!empty($field_name) and !empty($field_cat_name)) {
        $sql = "INSERT INTO `tbl_fields_info`( `field_name`, `indoor/outdoor`) VALUES ('$field_name', '$field_cat_name')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection) > 0) {
        echo '<script>
        alert("New Field Created");
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


   