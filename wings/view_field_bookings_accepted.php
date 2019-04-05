
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


$bookingSQL = "SELECT * FROM `tbl_field_booking` WHERE `request_accepted` = 'Y' ";
$result = mysqli_query($connection, $bookingSQL);

?>

<style>
.dataTables_filter{
  margin-right: 2%;

}
  </style>
 <!-- page content -->

 

 <div class="right_col" role="main">
        <div class="">
<!-- Large modal -->



          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
             
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <br>
                    <h2>Accepted Bookings List</h2> 
                   <div class="clearfix"></div>
                   <i><span style="color:red;">If you do not see you booking request in this list within 48 hours of booking request, <br> please contact administration. You booking request may have been rejected.</span></i>
                  </div>
                  <div class="x_content">
                    <?php
                        echo ' <table id="datatable-fixed-header" class="table table-striped table-bordered">';
                        echo '<thead>
                            <tr>
                            <th>Booking ID</th>
                            <th>Sport Name</th>
                            <th>Equipment Name</th>
                            <th>Quantity</th>
                            <th>Booking From</th>
                            <th>Booking Till</th>
                            <th>Booking Request By</th>
                            </tr>
                            </thead>
                            <tbody>';
                        foreach($result as $bookingRow){
                                echo'<tr>';
                                echo '<td>'.$bookingRow['id'].'</td>';
                                echo '<td>'.$bookingRow['sports_name'].'</td>';
                                echo '<td>'.$bookingRow['equip_name'].'</td>';
                                echo '<td>'.$bookingRow['quantity'].'</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_startdate'].'<br>Time &nbsp;'.$bookingRow['booking_starttime']. '</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_enddate'].'<br>Time &nbsp;'.$bookingRow['booking_endtime']. '</td>';
                                echo '<td>'.$bookingRow['book_req_by'].'</td>';
                                echo '</tr>';
                        }
                        echo '</tbody></table>';
                    ?>
                      

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
 

 

  <?php include 'footer_script_tags.php'?>


?>