
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
                  <h2>New sports</h2>
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New Sports Record</h3>
                              <form action="sports_list.php" method="post">
                              <table>
                                <tbody>
                                    <tr>
                                    <td> <label class="form_label">Enter Sports Name</label></td>
                                    <td><input type="text" name="sports_name" placeholder="sports name" required autofocus></td>
                                    </tr>
                                    <tr>
                                    <td><input class="btn btn-success btn-ok" type="submit" name="submit_sports" value="Create sports"></td>
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

if(isset($_POST['submit_sports'])){

    $sports_name = $_POST['sports_name'];
   

    $sql = '';

    if (!empty($sports_name)) {
        $sql = "INSERT INTO `tbl_sports_info`( `sport_name`) VALUES ('$sports_name')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New sport Created");
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


   