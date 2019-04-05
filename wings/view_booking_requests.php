
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


$bookingSQL = "SELECT * FROM `tbl_tmp_booking` WHERE `request_accepted` IS NULL";
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


 
                            <input type="hidden" id="booking_id" name="booking_id" >

                            <input type="hidden" id="qty" name="qty" >
                            <input type="hidden" id="equipName" name="equipName" >
                            <input type="hidden" id="booking_id_accepted" name="booking_id_accepted" >
                              


          <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
             
                <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <br>
                    <h2>Booking Requests List</h2>
                 
                    <span style="float:right;"><button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" data-id="'.$bookingRow['id'].'" >Check Stock Availability</button></span>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php
                        echo ' <table class="table table-hover">';
                        echo '<thead>
                            <tr>
                            <th>Booking ID</th>
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
                                echo '<td>'.$bookingRow['id'].'</td>';
                                echo '<td>'.$bookingRow['sports_name'].'</td>';
                                echo '<td>'.$bookingRow['equip_name'].'</td>';
                                echo '<td>'.$bookingRow['quantity'].'</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_startdate'].'<br>Time &nbsp;'.$bookingRow['booking_starttime']. '</td>';
                                echo '<td> Date &nbsp;'.$bookingRow['booking_enddate'].'<br>Time &nbsp;'.$bookingRow['booking_endtime']. '</td>';
                                echo '<td>'.$bookingRow['book_req_by'].'</td>';
                                echo '<td><button type="button" id="acceptbtn"  class="btn btn-success" data-id="'.$bookingRow['id'].'" data-name="'.$bookingRow['equip_name'].'" data-qty="'.$bookingRow['quantity'].'" name="accept" value="Accept" >Accept</button></td>';
                                echo '<td><button type="button" id="rejectbtn"  class="btn btn-danger"  data-id="'.$bookingRow['id'].'"  name="reject" value="delete" >Reject</button></td>';
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


<script type="text/javascript">
    //pass booking id to the modal
$(document).on('click', '#rejectbtn', function(){ 
 console.log(bookingid);
 var bookingid = $(this).attr("data-id");
 

 $("#booking_id").val(bookingid);


 
 var r = confirm("You are about to Remove the booking request!");
  if (r == true) {
   // txt = "You pressed OK!";

               var bID = $('#booking_id').val();
            
               console.log(bID);

                $.ajax(
                   {
                       type: 'post',
                       url: 'handleBookings.php',
                       data:
                       {
                           get_bookingID: bID,
                           
                     
                       },
                       success: function (response)
                       {
                         //alert(response)
                           var str = response;
                           var n = str.search("Error");
                           if (n < 0)
                           {
                             alert("Booking Request Deleted");
                             location.reload();  
                           } else
                           {
                              
                          alert("error");
                           }
                       }
                   });
  } else {
  
  }


});


$(document).on('click', '#acceptbtn', function(){ 
 console.log(bookingid);
 var bookingid = $(this).attr("data-id");
 var bookingEquipName = $(this).attr("data-name");
 var bookingQty = $(this).attr("data-qty");
 

 $("#equipName").val(bookingEquipName);
 $("#qty").val(bookingQty);
 $("#booking_id_accepted").val(bookingid);

 
 var r = confirm("Accept Booking?");
  if (r == true) {
   // txt = "You pressed OK!";

               var bAID = $('#booking_id_accepted').val();
               var qty = $('#qty').val();
               var equipName = $('#equipName').val();


               console.log(bAID);

                $.ajax(
                   {
                       type: 'post',
                       url: 'handleBookings.php',
                       data:
                       {
                           get_bookingAcceptedID: bAID,
                           get_qty: qty,
                           get_equipName: equipName,
                           
                     
                       },
                       success: function (response)
                       {
                         //alert(response)
                           var str = response;
                           var n = str.search("Error");
                           if (n < 0)
                           {
                             alert("Booking Request Accepted");
                             location.reload();  
                           } else
                           {
                              
                          alert("error");
                           }
                       }
                   });
  } else {
  
  }


});
</script>

<?php

// if(isset($_GET['reject']))
//    {
    
    
//     global $connection;


//     $delete_id =$_GET['reject'];
//     $sql = "DELETE FROM  tbl_tmp_booking where id = '$delete_id'";
 
//      mysqli_query($connection, $sql);

//     if (mysqli_affected_rows($connection)) {
//         return true;

//     }
//     return false;
//   }else{
//     echo "error";
//   }
  
?>