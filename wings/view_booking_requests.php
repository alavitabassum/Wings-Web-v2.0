
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


$bookingSQL = "SELECT * FROM `tbl_tmp_booking`";
$result = mysqli_query($connection, $bookingSQL);


$InventorySQL = "SELECT `sport_name`, `equip_name`, `num_of_equipments`,
SUM(`num_of_equipments`)  AS totalStock
FROM `tbl_inventory_equipment` 
GROUP BY `equip_name`";
$Inventoryresult = mysqli_query($connection, $InventorySQL);



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


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
        </button>
        <h4 class="modal-title" id="myModalLabel">Stock Available in Inventory</h4>
      </div>
      <div class="modal-body col-md-12 col-sm-12 col-xs-12">
       
        <?php
                        echo ' <table id="datatable-fixed-header" class="table table-striped table-bordered">';
                        echo '<thead>
                            <tr>
                            <th>Sport Name</th>
                            <th>Equipment Name</th>
                            <th>Quantity</th>
                            </tr>
                            </thead>
                            <tbody>';
                        foreach($Inventoryresult as $stockRow){
                                echo'<tr>';
                                echo '<td>'.$stockRow['sport_name'].'</td>';
                                echo '<td>'.$stockRow['equip_name'].'</td>';
                                echo '<td>'.$stockRow['totalStock'].'</td>';
                            echo '</tr>';
                        }
                        echo '</tbody></table>';
                    ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        
      </div>

    </div>
  </div>
</div>

          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
             
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <br>
                    <h2>Booking Requests List</h2>
                    <span style="float:right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="'.$bookingRow['equip_name'].'" >Check Stock Availability</button></span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                        echo ' <table class="table table-hover">';
                        echo '<thead>
                            <tr>
                            <th>Sport Name</th>
                            <th>Equipment Name</th>
                            <th>Quantity</th>
                            <th>Booking From</th>
                            <th>Booking Till</th>
                            <th>Booking Request By</th>
                            <th>Accept Booking</th>
                            <th>Reject Booking</th>
                            </tr>
                            </thead>
                            <tbody>';
                        foreach($result as $bookingRow){
                                echo'<tr>';
                                echo '<td>'.$bookingRow['sports_name'].'</td>';
                                echo '<td>'.$bookingRow['equip_name'].'</td>';
                                echo '<td>'.$bookingRow['quantity'].'</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_startdate'].'<br>Time &nbsp;'.$bookingRow['booking_starttime']. '</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_enddate'].'<br>Time &nbsp;'.$bookingRow['booking_endtime']. '</td>';
                                echo '<td>'.$bookingRow['book_req_by'].'</td>';
                                echo '<td><button type="button" id="accept"  class="btn btn-success" data-id="'.$bookingRow['id'].'"  name="accept" value="Accept" >Accept</button></td>';
                                echo '<td><button type="button" id="reject"  class="btn btn-danger" data-id="'.$bookingRow['id'].'"  name="reject" value="Reject" >Reject</button></td>';
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

  <?php

if(isset($_POST['submit_inventory'])){

    $user_role = $_POST['user_role_id'];
    $Inventory_name = $_POST['Inventory_name'];
    $Inventory_add = $_POST['Inventory_add'];
   

    $sql = '';

    if (!empty($user_role) and !empty($Inventory_name) and !empty($Inventory_add)) {
        $sql = "INSERT INTO `tbl_inventory_info`( `inventory_name`, `inventory_address`, `Inventory_Manager`) VALUES ('$Inventory_name','$Inventory_add', '$user_role')";
    
    } else{
        echo '<script>
        alert("Please fill up all required fields");
        </script>';
    }
    mysqli_query($connection, $sql);

    if (mysqli_affected_rows($connection)) {
        echo '<script>
        alert("New Inventory Created");
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


   