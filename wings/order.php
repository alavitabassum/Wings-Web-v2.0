<?php require_once 'db.php';?>

<?php include 'header_general.php';?>
<?php include 'sidebar.php'?>
<?php include 'top_nav.php';?>
<div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;margin-top: 5em;">
              <span class="label label-info" data-toggle="modal" data-target=".single-modal">New Single Order</span>
              <!--edit/delete/reset status/ duplicate-->
              <span class="label label-primary" data-toggle="modal" data-target=".batch-modal" style="color: black;">New Batch Order</span>
            </div>
          </div>

          <div class="clearfix"></div>
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
                          <th>
                            <input type="checkbox" id="check-all" class="flat">
                          </th>
                          <th class="column-title">Order ID</th>
                          <th class="column-title">Merchant ID</th>
                          <th class="column-title">Merchant Name</th>
                          <th class="column-title">Price</th>
                          <th class="column-title">Package Option</th>
                          <th class="column-title">Delivery Option</th>
                          <th class="column-title">Customer Thana</th>
                          <th class="column-title">Customer Phone</th>
                          <th class="column-title">Edit</th>
                          <th class="column-title">Delete</th>
                          <th class="column-title no-link last">
                            <span class="nobr">Reset Status</span>
                          </th>
                          <th class="bulk-actions" colspan="11">
                            <li role="presentation" class="dropdown" style="list-style: none;">
                              <a id="drop4" class="antoo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"
                                style="columns: #000000; font-weight:700; color: #000000;">Bulk Actions (
                                <span class="action-cnt"> </span> )
                                <i class="fa fa-chevron-down"></i>
                              </a>
                              <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                                <li role="presentation">
                                  <a role="menuitem" tabindex="-1" data-toggle="modal" href="#alertmodal">Delete Selected</a>
                                </li>
                                <li role="presentation">
                                  <a role="menuitem" tabindex="-1" href="#">Reset Status</a>
                                </li>
                                <li role="presentation" class="divider"></li>
                                <li role="presentation">
                                  <a role="menuitem" tabindex="-1" href="#">Duplicate Selected</a>
                                </li>
                              </ul>
                            </li>


                          </th>
                        </tr>
                      </thead>


                      <tbody class="tracker_tbody">
                        <tr class="even pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">0800228-0157-A5-1Q</td>
                          <td class=" ">964585</td>
                          <td class=" ">Bagdoom</td>
                          <td class=" ">5000</td>
                          <td class=" ">Standard</td>
                          <td class=" ">Regular</td>
                          <td class=" ">44</td>
                          <td class=" ">01710496115</td>
                          <td class="a-right a-right ">
                            <button type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
                              Edit
                            </button>
                          </td>
                          <td class="a-right a-right ">
                            <button type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
                              Delete
                            </button>
                          </td>
                          <td class=" last">
                            <button type="button" class="btn btn-demo reset-btn" data-toggle="modal" data-target="#myModal1">
                              Reset
                            </button>
                          </td>
                        </tr>

                        <tr class="odd pointer">
                          <td class="a-center ">
                            <input type="checkbox" class="flat" name="table_records">
                          </td>
                          <td class=" ">0800228-0157-A5-1Q</td>
                          <td class=" ">964585</td>
                          <td class=" ">Bagdoom</td>
                          <td class=" ">5000</td>
                          <td class=" ">Standard</td>
                          <td class=" ">Regular</td>
                          <td class=" ">44</td>
                          <td class=" ">01710496115</td>
                          <td class="a-right a-right ">
                            <button type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
                              Edit
                            </button>
                          </td>
                          <td class="a-right a-right ">
                            <button type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
                              Delete
                            </button>
                          </td>
                          <td class=" last">
                            <button type="button" class="btn btn-demo reset-btn" data-toggle="modal" data-target="#myModal1">
                              Reset
                            </button>
                          </td>
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

                    <!--Modal for Order Edit-->

                    <div class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Order Details</h4>
                          </div>
                          <div class="modal-body">
                            <form class="form-horizontal form-label-left">
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Merchant</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select class="form-control">
                                    <option>Stylish Mart</option>
                                    <option>Daraz Bangladesh Limited</option>
                                    <option>Bagdoom.com</option>
                                    <option>IWEAR</option>
                                    <option>Electro Haat</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sub Merchant</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <select class="form-control">
                                    <option>Sub Merchant 1</option>
                                    <option>Sub Merchant 2</option>
                                    <option>Sub Merchant 3</option>
                                    <option>Sub Merchant 4</option>
                                    <option>Sub Merchant 5</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Merchant Order Ref.</label>
                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <input type="text" class="form-control" placeholder="Default Input">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 col-sm-3 col-xs-12 control-label">Pick Up From
                                  <br>
                                  <small class="text-navy">Select One</small>
                                </label>

                                <div class="col-md-9 col-sm-9 col-xs-12">
                                  <div class="radio">
                                    <label>
                                      <input type="radio" class="flat" checked name="iCheck" onclick="orderMerchnat();"> Pick Up From Ordering Merchant
                                    </label>
                                  </div>
                                  <div class="radio">
                                    <label>
                                      <input type="radio" class="flat" name="iCheck" onclick="otherMerchnat();"> Pick Up From Other Merchant
                                    </label>
                                  </div>
                                  <div class="form-group" id="pickup" style="display:none;">
                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Merchant Order Ref.</label>
                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                      <input type="text" class="form-control" placeholder="Default Input">
                                    </div>
                                  </div>
                                  <!--  <script>
                                      function otherMerchnat() {
                                        document.getElementById('pickup').style.display = "block";
                                      }
        
                                      function orderMerchnat() {
                                        document.getElementById('pickup').style.display = "none";
                                      }
                                    </script>
                                   -->

                                </div>
                              </div>
                              <div>
                                <div class="divider-dashed"></div>
                                <h4>Pick Up Details</h4>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pick Up Merchant Name</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">District/ Sub-District</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" disabled="disabled">
                                      <option>Dhaka</option>
                                      <option>Savar</option>
                                      <option>Kushtia</option>
                                      <option>Jamalpur</option>
                                      <option>Khulna</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Thana</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control" disabled="disabled">
                                      <option>Adabor</option>
                                      <option>Gulshan</option>
                                      <option>Kalabagan</option>
                                      <option>Demra</option>
                                      <option>Wari</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pick Up Merchant Phone</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Pick Up Merchant Address</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" disabled="disabled" placeholder="Disabled Input">
                                  </div>
                                </div>
                              </div>

                              <div>
                                <div class="divider-dashed"></div>
                                <h4>Package and Delivery Details</h4>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Package Option</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                      <option>Standard</option>
                                      <option>Large</option>
                                      <option>Special</option>
                                      <option>Special Plus</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Delivery Option</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                      <option>Regualar</option>
                                      <option>Express</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Brief</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Product Brief">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Package Price (maximum 7 digits)</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Product Brief">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Packaging Required</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                      <option value="Y">Yes</option>
                                      <option value="N">No</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                              <div>
                                <div class="divider-dashed"></div>
                                <h5>Customer Details</h5>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Name</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="Customer name">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Address</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="address">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Customer Mobile/Phone</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <input type="text" class="form-control" placeholder="01xxxxxxxxx">
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">District/ Sub-District</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                      <option>Dhaka</option>
                                      <option>Savar</option>
                                      <option>Kushtia</option>
                                      <option>Jamalpur</option>
                                      <option>Khulna</option>
                                    </select>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Thana</label>
                                  <div class="col-md-9 col-sm-9 col-xs-12">
                                    <select class="form-control">
                                      <option>Adabor</option>
                                      <option>Gulshan</option>
                                      <option>Kalabagan</option>
                                      <option>Demra</option>
                                      <option>Wari</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </form>

                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btnSave">Save changes</button>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!--/ Modal for Order Edit-->


                    <!--Modal for Batch Order-->

                    <div class="modal fade bs-example-modal-lg batch-modal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Order Details</h4>
                          </div>
                          <div class="modal-body">

                            <div class="page-title">
                              <div class="title_left">
                                <h3>Batch Order Upload </h3>
                              </div>

                              <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                  <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search for...">
                                    <span class="input-group-btn">
                                      <button class="btn btn-default" type="button">Go!</button>
                                    </span>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="clearfix"></div>

                            <div class="row">
                              <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                  <div class="x_title">
                                    <h2>Dropzone multiple file uploader</h2>
                                    <div class="clearfix"></div>
                                  </div>
                                  <div class="x_content">
                                    <p>Drag multiple files to the box below for multi upload or click to select files. This
                                      is for demonstration purposes only, the files are not uploaded to any server.</p>
                                    <form action="form_upload.html" class="dropzone"></form>
                                    <br />
                                    <br />
                                    <br />
                                    <br />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary btnSave">Save</button>
                          </div>

                        </div>
                      </div>
                    </div>
                    <!--/ Modal for Batch Order-->
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

 <script>
    function dltInfo() {
      var x = document.getElementById("dltMsg");
      var y = document.getElementById("cnclMsg");
      x.style.display = "block";
      y.style.display = "none";
    }
    function cnclInfo() {
      var x = document.getElementById("dltMsg");
      var y = document.getElementById("cnclMsg");
      x.style.display = "none";
      y.style.display = "block";
    }
  </script>
<?php include 'footer_script_tags.php'?>