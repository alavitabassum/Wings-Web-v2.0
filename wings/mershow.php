 <?php require_once 'db.php';?>

 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>



    <div class="clearfix"></div>
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of Merchants</h2>

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
                    <th class="column-title"> Merchant Name</th>
                    <th class="column-title"> Code</th>
                    <th class="column-title"> Address</th>
                    <th class="column-title">View</th>
                    <th class="bulk-actions" colspan="11">
                      <li role="presentation" class="dropdown" style="list-style: none;">
                        <a id="drop4" class="antoo dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"
                        style="columns: #000000; font-weight:700; color: #000000;">Bulk Actions (
                        <span class="action-cnt"> </span> )
                        <i class="fa fa-chevron-down"></i>
                      </a>
                      <ul id="menu6" class="dropdown-menu animated fadeInDown" role="menu">
                        <li role="presentation">
                          <a role="menuitem" tabindex="-1" href="#">Delete Selected</a>
                        </li>
                      </ul>
                    </li>
                  </th>
                </tr>
              </thead>


              <tbody class="tracker_tbody">
                

                 <tr class="post{{$merchant->id}}">
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                        <td class=" ">{{$merchant->code}}</td>
                        <td class=" ">{{$merchant->merchant_name}}</td>                        
                        <td class=" ">{{$merchant->address}}</td>
                  <td class="a-right a-right ">
                    <button data-id="{{$merchant->id}}" 
                          data-code="{{$merchant->code}}" 
                          data-merchant_name="{{$merchant->merchant_name}}" 
                          data-business_type="{{$merchant->business_type}}"
                          data-product_nature="{{$merchant->product_nature}}" 
                          data-address="{{$merchant->address}}" 
                          data-district="{{$merchant->district}}" 
                          data-thana="{{$merchant->thana}}" 
                          data-website="{{$merchant->website}}" 
                          data-fb_page="{{$merchant->fb_page}}" 
                          data-company_phone="{{$merchant->company_phone}}"
                          data-cp_name="{{$merchant->cp_name}}" 
                          data-cp_designation="{{$merchant->cp_designation}}" 
                          data-cp_number="{{$merchant->cp_number}}" 
                          data-cp_email="{{$merchant->cp_email}}" 
                          data-rate_chart="{{$merchant->rate_chart}}" 
                          data-cod="{{$merchant->cod}}" 
                          data-smart_rate_chart="{{$merchant->smart_rate_chart}}" 
                          data-return_charge="{{$merchant->return_charge}}" 
                          data-account_name="{{$merchant->account_name}}" 
                          data-account_number="{{$merchant->account_number}}" 
                          data-bank_name="{{$merchant->bank_name}}" 
                          data-bank_branch="{{$merchant->bank_branch}}" 
                          data-routing_number="{{$merchant->routing_number}}" 
                          data-payment_method="{{$merchant->payment_method}}"
                          data-point_code="{{$merchant->point_code}}"
                          data-relationship_manager="{{$merchant->relationship_manager}}"
                          data-monthly_invoice="{{$merchant->monthly_invoice}}"
                          data-pickup_sms="{{$merchant->pickup_sms}}"
                          data-packaging_req="{{$merchant->packaging_req}}"
                          data-pickup_route="{{$merchant->pickup_route}}"
                          data-vat="{{$merchant->vat}}"
                      type="button" 
                      class="btn btn-demo empView-btn" 
                      data-toggle="modal"
                      data-target=".view-record-modal">View</button>
                    </td>
                  </tr>
                  
                </tbody>
              </table>

             <div id="myModal" class="modal fade bs-example-modal-lg view-record-modal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">

                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Merchant Record</h4>
                          </div>
                          <div class="modal-body">

                            
                           
            <div class="row">
           
                <div class="clearfix"></div>

              
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Basic Information</h2>
                   
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th for="">ID</th>
                                  <td id="i"></td>
                                </tr>
                                <tr>
                                  <th>Code</th>
                                  <td id="c"></td>
                                </tr>
                                <tr>
                                  <th>Merchant name</th>
                                  <td id="mn"></td>
                                </tr>
                                <tr>
                                  <th>Business type:</th>
                                  <td id="bt"></td>
                                </tr>
                                <tr>
                                  <th >Product nature</th>
                                  <td id="pn"></td>
                                </tr>
                                <tr>
                                  <th>Address</th>
                                  <td id="a"></td>
                                </tr>
                                <tr>
                                  <th>District</th>
                                  <td id="d"></td>
                                </tr>
                                <tr>
                                  <th>Thana</th>
                                  <td id="t"></td>
                                </tr>
                                <tr>
                                  <th>Website</th>
                                  <td id="w"></td>
                                </tr>
                                <tr>
                                  <th>Facebook Page</th>
                                  <td id="fb"></td>
                                </tr>
                                <tr>
                                  <th>Company Phone</th>
                                  <td id="cp"></td>
                                </tr>
                               
                          </tbody>
                        </table>
    
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Contact Person Details</h2>
                   
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                             <tr>
                                  <th>Contact Name</th>
                                  <td id="cpn"></td>
                                </tr>
                                <tr>
                                  <th>Contact Designation</th>
                                  <td id="cpd"></td>
                                </tr>
                                <tr>
                                  <th>Contact Number</th>
                                  <td id="cpnu"></td>
                                </tr>
                                <tr>
                                  <th>Contact Email</th>
                                  <td id="cpe"></td>
                                </tr>
                              
                                
                               
                          </tbody>
                        </table>
    
                      </div>
                    </div>
                  </div>
                  
                  
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Delivery Charge Information</h2>
                   
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th>Rate Chart</th>
                                  <td id="rc"></td>
                                </tr>
                                <tr>
                                  <th>COD</th>
                                  <td id="cd"></td>
                                </tr>
                                <tr>
                                  <th>Smart Rate Chart</th>
                                  <td id="src"></td>
                                </tr>
                                <tr>
                                  <th>Return Charge</th>
                                  <td id='rce'></td>
                                </tr>
                               
                          </tbody>
                        </table>
    
                      </div>
                    </div>
                  </div>
  
                  <div class="clearfix"></div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Bank Information</h2>
                   
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                              <tr>
                                  <th>Accountant Name</th>
                                  <td id='an'></td>
                                </tr>
                                <tr>
                                  <th>Account Number</th>
                                  <td id='anu'></td>
                                </tr>
                                <tr>
                                  <th>Bank</th>
                                  <td id='bn'></td>
                                </tr>
                                <tr>
                                  <th>Bank Branch</th>
                                  <td id='bb'></td>
                                </tr>
                                <tr>
                                  <th>Routing Number</th>
                                  <td id='rn'></td>
                                </tr>
                                <tr>
                                  <th>Payment Method</th>
                                  <td id='pm'></td>
                                </tr>
                          </tbody>
                        </table>
    
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
               
              </div>
              <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Other Information</h2>
                   
                        <div class="clearfix"></div>
                      </div>
                      <div class="x_content">
    
                        <table class="table table-striped">
                          <thead>
                            <tr>
                              <th></th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                               <tr>
                                  <th>Point Code</th>
                                  <td id='pc'></td>
                                </tr>
                                <tr>
                                  <th>Relationship Manager</th>
                                  <td id='rm'></td>
                                </tr>
                                <tr>
                                  <th>Monthly Invoice</th>
                                  <td id='mi'></td>
                                </tr>
                                <tr>
                                  <th>Pickup SMS</th>
                                  <td id='ps'></td>
                                </tr>
                                <tr>
                                  <th>Packaging Required</th>
                                  <td id='pr'></td>
                                </tr>
                                <tr>
                                  <th>Product Route</th>
                                  <td id='pro'></td>
                                </tr>
                                <tr>
                                  <th>VAT</th>
                                  <td id='v'></td>
                                </tr>

                                
                                </tr>
                          </tbody>
                        </table>
    
                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>
               
              </div>

                          

                        </div>
                      </div>
                    </div>

                    
                     
              

            </div>
          </div>
        </div>

      </div>

    </div>
  </div>
</div>
</div>
</div>
</div>
<script>
//Show-Employee Details
$(document).on('click', '.empView-btn', function() {
 console.log('is it calling or not');
  $('#i').text($(this).data('id'));
    $('#c').text($(this).data('code'));
    $('#mn').text($(this).data('merchant_name'));
     $('#bt').text($(this).data('business_type'));
    $('#pn').text($(this).data('product_nature'));
    $('#a').text($(this).data('address'));
     $('#d').text($(this).data('district'));
    $('#t').text($(this).data('thana'));
    $('#w').text($(this).data('website'));
     $('#fb').text($(this).data('fb_page'));
    $('#cp').text($(this).data('company_phone'));
    $('#cpn').text($(this).data('cp_name'));
     $('#cpd').text($(this).data('cp_designation'));
    $('#cpnu').text($(this).data('cp_number'));
    $('#cpe').text($(this).data('cp_email'));
     $('#rc').text($(this).data('rate_chart'));
    $('#cd').text($(this).data('cod'));
    $('#src').text($(this).data('smart_rate_chart'));
     $('#rce').text($(this).data('return_charge'));
    $('#an').text($(this).data('account_name'));
    $('#anu').text($(this).data('account_number'));
     $('#bn').text($(this).data('bank_name'));
    $('#bb').text($(this).data('bank_branch'));
    $('#rn').text($(this).data('routing_number'));
    $('#pm').text($(this).data('payment_method'));
     $('#pc').text($(this).data('point_code'));
    $('#rm').text($(this).data('relationship_manager'));
    $('#mi').text($(this).data('monthly_invoice'));
     $('#ps').text($(this).data('pickup_sms'));
    $('#pr').text($(this).data('packaging_req'));
    $('#pro').text($(this).data('pickup_route'));
     $('#v').text($(this).data('vat'));

});
//End Empoyee Details
</script>
 <?php include 'footer_script_tags.php'?>

