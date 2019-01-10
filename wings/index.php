<?php 
session_start();

require_once 'db.php';
include 'login_session.php';
include 'header_general.php';
/* $query2 ="SELECT `menu_id` FROM `tbl_role_permission`WHERE `user_role_id` =".$_SESSION['user_role_id'];
$rs2 = mysqli_query($connection, $query2);
$row = mysqli_fetch_assoc($rs2);

if(!$rs2){
    header('location:errorpage.php');
}else {
    echo "hoy nai";
} */
?>


  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
          <?php 
			if(isset($errorMsg))
			{
				echo '<div class="alert alert-danger">';
				echo $errorMsg;
				echo '</div>';
				unset($errorMsg);
			}
		?>
           
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
          <div class="form-group">
            <label for="exampleInputName1">Username</label>
            <input class="form-control" id="exampleInputName1" name="first_name" type="username" placeholder="Enter username" required>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="Password" required>
          </div>
          <button class="btn btn-primary btn-block" type="submit" name="login">Login</button>
        </form>
          </section>
        </div>

       
      </div>
    </div>
  </body>
</html>
