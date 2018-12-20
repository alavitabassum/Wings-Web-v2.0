<?php 
session_start();

require_once 'db.php';

if (isset($_POST['login'])) {
  if (!empty($_POST['first_name']) && !empty($_POST['password'])) {
      $first_name = trim($_POST['first_name']);
      $password = trim($_POST['password']);

      //$md5Password = md5($password);

      $sql = "SELECT * FROM `tbl_users` WHERE `first_name` = '".$first_name."' AND `password` = '".$password."'";
      $rs = mysqli_query($connection,$sql);
      $getNumRows = mysqli_num_rows($rs);

      if ($getNumRows == 1) {
          $getUserRow = mysqli_fetch_assoc($rs);
          unset($getUserRow['password']);

          $_SESSION = $getUserRow;

          header('location:home.php');
          exit();
      } else {
          $errorMsg = "Wrong username or password";
        //  exit();
          debug($sql);
      }
  }
}

//Set session data to an empty array
if (isset($_GET['lmsg']) && $_GET['lmsg'] == true) {
  $errorMsg = "Login required to access Wings";
}

?>


<?php include 'header_general.php';?>

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
