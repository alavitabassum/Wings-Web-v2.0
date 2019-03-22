
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
                          <h3>Create New Equipment Record</h3>
                              <form action="equipment_list.php" method="post">
                              <table>
                                <tbody>

                                <tr>
                                    <td> <label class="form_label">Enter Sport Name</label></td>
                                    <td>
                                    <select style="width: 184px!important;  padding: 8px;" name="sport_id" required>
                                    <option value="">Select Sport Category</option>
                                    <?=get_sports_list_byID()?>
                                    </select>
                                    </td>
                                    </tr>

                                    <tr>
                                    <td> <label class="form_label">Enter Equipment Name</label></td>
                                    <td><input type="text" name="Equipment_name" placeholder="Equipment name" required autofocus></td>
                                    </tr>
                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_Equipment" value="Create Equipment"></td>
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
    $Equipment_name = $_POST['Equipment_name'];
   

    $sql = '';

    if (!empty($Equipment_name)) {
        $sql = "INSERT INTO `tbl_equipment_info`( `sport_id`, `equip_name`) VALUES ('$sport_id','$Equipment_name')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New equipment Created");
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


   