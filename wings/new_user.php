
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
                  <h2>New User</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newUserForm">
                          <h3>Create New User</h3>
                              <form action="" method="post">
                              <table>
                                <tbody>
                                <tr>
                                <td colspan="2">
                                <select style="width: 205px!important;    padding: 8px;" name="user_role_id" required>
                                  <option value="">Select User Role</option>
                                  <?=get_all_users()?>
                                  </select>
                                </td>
                              
                                </tr>
                                <tr>
                                <td> <label class="form_label">Enter First Name</label></td>
                                <td><input type="text" name="firstname" placeholder="First name" required></td>
                                </tr>
                                <tr>
                                <td><label class="form_label">Enter Last Name</label></td>
                                <td> <input type="text" name="lastname" placeholder="Last Name" required></td>
                                </tr>
                                <tr>
                                <td><label class="form_label">Enter Email Address</label></td>
                                <td><input type="text" name="email" placeholder="Email" required></td>
                                </tr>
                                <tr>
                                <td> <label class="form_label">Password</label></td>
                                <td><input type="text" name="password" placeholder="Password" required></td>
                                </tr>
                                <tr>
                                <td><input class="btn btn-success btn-ok" type="submit" name="submit_user" value="Create User"></td>
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

if(isset($_POST['submit_user'])){

    $user_role = $_POST['user_role_id'];
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
   

    $sql = '';

    if (!empty($user_role) and !empty($fname) and !empty($lname) and !empty($email) and !empty($pass)) {
        $sql = "INSERT INTO `tbl_users`( `user_role_id`, `first_name`, `last_name`, `email`, `password`) VALUES ('$user_role','$fname','$lname','$email','$pass')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New User Created");
        </script>';
    }else{
        echo '<script>
        alert("Error!");
        </script>';
    }

}else{
      echo "Something went wrong!";

}

?>
  <?php include 'footer_script_tags.php'?>


   