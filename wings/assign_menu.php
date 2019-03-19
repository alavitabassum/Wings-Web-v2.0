
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
                  <h2>Role Permission</h2>

                  <div class="clearfix"></div>
                </div>

                <div class="x_content">

                        <div class="form-wrapper newForm">
                          <h3>Role wise menu permission</h3>
                              <form action="assign_menu_rolewise.php" method="post">
                              
                                  <select name="menu_id">
                                  <option value="">Select a parent menu (optional)</option>
                                  <?=get_all_menus()?>
                                  </select>
                                  
                                  <select name="user_role_id">
                                  <option value="">Select user roles</option>
                                  <?=get_all_users()?>
                                  </select>
                                  <input  class="btn btn-success btn-ok" type="submit" name="submit" value="Add">
                              </form>
                        </div>



                        <div class="row">

<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>Order Tracker</h2>

      <div class="clearfix"></div>
    </div>
    <div class="x_content">

      <div class="table-responsive">
        <table id="order-table" class="table table-striped jambo_table bulk_action">
          <thead>
            <tr class="headings">
              
              <th class="column-title">Menu Item</th>
              <th class="column-title">User Role</th>
              <!-- <th class="column-title no-link last">
                <span class="nobr">Delete</span>
              </th> -->
             
            </tr>
          </thead>


          <tbody class="tracker_tbody">

        
        <tr class="even pointer">
        <?=display_assigned_menulist()?>
              <!-- <td class=" ">0800228-0157-A5-1Q</td>
              <td class=" ">964585</td>

              <td class=" last">
                <button type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
                  Delete
                </button>
              </td> -->
            </tr> 

            

          </tbody>
        </table>

        <!-- Alert modal-->
        <div class="modal fade bs-example-modal-sm alert-modal" tabindex="-1" role="dialog" aria-hidden="true" id="alertmodal">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">

              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
                <h4 class="modal-title" id="myModalLabel2">Alert!</h4>
              </div>
              <div class="modal-body">
                <p>Are you sure you want to delete the selected records?</p>
              </div>
              <div class="modal-footer">
  
                <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="dltInfo();">Yes</button>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="cnclInfo();">Cancel</button>
              </div>

            </div>
          </div>
        </div>
        <!--/Alert modal-->



      </div>

    </div>
    <!--Pop Up Msg-->

    <div class="x_content bs-example-popovers">

      <div class="alert alert-success alert-dismissible fade in" role="alert" id="dltMsg">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>Deleted selected records.</div>

      <div class="alert alert-info alert-dismissible fade in" role="alert" id="cnclMsg">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>You have made no changes.</div>
    </div>

    <!--/ Pop Up Msg-->
  </div>
</div>
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
