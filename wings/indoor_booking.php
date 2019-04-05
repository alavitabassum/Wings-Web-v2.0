
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
     <style>
     .daterangepicker{
       width:auto !important;
     }
     </style>
 <!-- page content -->
 <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Indoor Field Booking</h2>
    
          
                  <div class="clearfix"></div>
                </div>

                <div class="x_content">
                <div class="well" style="overflow: auto">
                      <div class="col-md-5">
                   
                        <form class="form-horizontal" action="indoor_booking.php" method="post">
                          <fieldset>
                            
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-3">Select Field Name</label>
                        <select style="width: 184px!important;  padding: 8px;" name="field_name" required>
                                      <option value="">Field Name</option>
                                      <?=get_indoorList()?>
                                      </select>
                      </div>

                      <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Booking Start Date</label>
                        <div class='input-group date' id='myDatepicker2'>
                            <input type='text' class="form-control" name="booking_startdate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Booking Start Time</label>
                        <div class='input-group date' id='myDatepicker3'>
                            <input type='text' class="form-control" name="booking_starttime"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>

                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-3">Booking End Date</label>
                        <div class='input-group date' id='myDatepicker22'>
                            <input type='text' class="form-control" name="booking_enddate" />
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-3">Booking End Time</label>
                        <div class='input-group date' id='myDatepicker33'>
                            <input type='text' class="form-control" name="booking_endtime"/>
                            <span class="input-group-addon">
                               <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                      <div class="form-group">
                      <input class="btn btn-success btn-ok" type="submit" name="req_booking" value="Request Booking">
                      </div>
                          </fieldset>
                        </form>
                      </div>
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

if(isset($_POST['req_booking'])){

    $field_name = $_POST['field_name'];
    $booking_startdate = $_POST['booking_startdate'];
    $booking_starttime = $_POST['booking_starttime'];
    $booking_enddate = $_POST['booking_enddate'];
    $booking_endtime = $_POST['booking_endtime'];
    $user_role = $_SESSION['first_name'];
    //$booking_duration = STR_TO_DATE('$reservation','%Y%m%d %h%i')

    $sql = '';

    if (!empty($field_name)) {
        
        $sql = "INSERT INTO `tbl_field_booking`( `field_name`, `booking_startdate`,`booking_starttime`,`booking_enddate`,`booking_endtime`, `book_req_by`) 
        VALUES ('$field_name','$booking_startdate','$booking_starttime','$booking_enddate','$booking_endtime','$user_role')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("Booking request submitted");
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


   