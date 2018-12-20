 <?php require_once 'db.php';?>
 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>


          <div class="row">
            <!--   <div class="col-md-2 col-sm-2 col-xs-12 form-group pull-right top_search">
                    <div id="datatable-responsive_filter" class="dataTables_filter">
                      <input type="text" class="form-control" placeholder="Search for...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                      </span>
                    </div>
                  </div>-->
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;">
              <span class="label label-info">Order Count:3655</span>
              <span class="label label-primary" style="color: black;">New Orders For Delivery:49</span>
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



                  <!-- Modal -->
                  <div class="modal rightside fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
                    <div class="modal-dialog-right" role="document">
                      <div class="modal-content-right">

                        <div class="modal-header-right">
                          <button type="button" class="rightmodal close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>

                        <div class="modal-body-right">

                          <!-- Product info in modaal-->
                          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 modal-product-details">
                            <h3>Tracking Details - <span>EXCHANGE PRODUCT</span></h3>
                            <div class="row info-row">
                              <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-8 col-md-offset-8 col-sm-offset-0 col-xs-offset-0 timestamp-modal-right">
                                <ul>
                                  <li>
                                    Order ID: 0800228-0157-A5-1Q
                                  </li>
                                  <li>
                                    Order Time: 08:37
                                  </li>
                                </ul>
                              </div>
                              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 prod-info-banner">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list first-bq">
                                  <blockquote>
                                    <h4>Pick Up Details</h4>
                                    <ul>
                                      <li>
                                        Merchant:
                                        <span>AjkerDeal.com</span>
                                      </li>
                                      <li>
                                        Pick Up from:
                                        <span>AjkerDeal.com</span>
                                      </li>
                                      <li>
                                        Pick Up address:
                                        <span>Sumona Goni Trade Center,Plot-2, Level-5, Panthapath, Karwan Bazar,Tejgaon Shilpanchal
                                        </span>
                                      </li>
                                      <li>
                                        Phone number:
                                        <span>01844172328</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list scnd-bq">
                                  <blockquote>
                                    <h4>Package Details</h4>
                                    <ul>
                                      <li>
                                        Package Option:
                                        <span>Standard</span>
                                      </li>
                                      <li>
                                        Delivery Option:
                                        <span>Regular</span>
                                      </li>
                                      <li>
                                        Product Brief:
                                        <span> Screwdriver Set + Card Holder - 41% OFF
                                        </span>
                                      </li>
                                      <li>
                                        Package Price:
                                        <span>890</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 product-list thrd-bq">
                                  <blockquote>
                                    <h4>Customer Details</h4>
                                    <ul>
                                      <li>
                                        Name:
                                        <span>Md Ashraf Hossun</span>
                                      </li>
                                      <li>
                                        Address:
                                        <span>satkhira sadar , Satkhira Sadar</span>
                                      </li>
                                      <li>
                                        Phone number:
                                        <span>01722401872</span>
                                      </li>

                                    </ul>
                                  </blockquote>
                                </div>
                              </div>
                            </div>


                            <!-- Order timeline-->
                            <section class="cd-timeline js-cd-timeline timeline-body">
                              <div class="cd-timeline__container">

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>Close Order</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>CP1</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator-pending"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14 (default)
                                      <span class="note"></span>
                                    </span>

                                    <h2>Banking</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Cash received by Manager. Waiting to be banked.</span>
                                    </span>

                                    <h2>DP2</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Cash Received by Majhar</span>
                                    </span>

                                    <h2>Cash</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Reached Delivery Outpost. Appointment confirmed for delivery</span>
                                    </span>

                                    <h2>Delivery Outpost</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--movie js-cd-img indicator"> </div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">Jan 14
                                      <span class="note">Loaded into the Shuttle</span>
                                    </span>

                                    <h2>Shuttle 2</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--picture js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">15:00, Jan 4
                                      <span class="note">Packaged and Sorted.Ready for shutttle 2</span>
                                    </span>
                                    <h2>Packaging and Sorting</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--location js-cd-img indicator"> </div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">12:00, Jan 4
                                      <span class="note">Data Entry</span>
                                    </span>

                                    <h2>Pre Processing</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--location js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">10:00, Jan 2
                                      <span class="note">by Tonoy Sarkar</span>
                                    </span>

                                    <h2>DP1</h2>
                                  </div>
                                </div>

                                <div class="cd-timeline__block js-cd-block">
                                  <div class="cd-timeline__img cd-timeline__img--movie js-cd-img indicator"></div>
                                  <div class="cd-timeline__content js-cd-content">
                                    <span class="cd-timeline__date">09:00, Jan 2
                                      <span class="note">Order Picked u pby Tonoy Sarkar</span>
                                    </span>

                                    <h2>Pick Up</h2>
                                  </div>
                                </div>
                              </div>
                            </section>
                            <!-- cd-timeline -->
                            <div class="class=col-lg-12 col-md-12 col-sm-12 col-xs-12 fadedScroller_fade"></div>
                          </div>
                        </div>

                      </div>
                      <!-- modal-content -->
                    </div>
                    <!-- modal-dialog -->
                  </div>
                  <!-- modal -->


                  <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">

                    <thead class="tracker-thead">
                      <tr>
                        <th> Order ID</th>
                        <th>Merchant ID</th>
                        <th>Merchant Name</th>
                        <th>Barcode</th>
                        <th>Pick Up Exe.</th>
                        <th>Latest Status</th>
                        <th>Order History</th>
                      </tr>
                    </thead>
                    <tbody class="tracker_tbody">

                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>DP2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Banked</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Shuttle 2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Shuttle 2</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>
                      <tr>
                        <td>0800228-0157-A5-1Q</td>
                        <td>964585</td>
                        <td>Bagdoom</td>
                        <td>0822228564127</td>
                        <td>Sumon Reja</td>
                        <td>Closed</td>
                        <td>
                          <button type="button" class="btn btn-demo tracker-btn" data-toggle="modal" data-target="#myModal1">
                            More Info
                          </button>
                        </td>
                      </tr>

                    </tbody>
                  </table>


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