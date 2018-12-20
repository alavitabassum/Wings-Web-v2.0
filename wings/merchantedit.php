 <?php require_once 'db.php';?>

 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="merchant-list-table">
          <div class="x_panel merchant-list-table">
            <div class="x_title">
              <h2>Merchants Information</h2>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">        
              <div class="table-responsive">
                <table id="order-table" class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th class="column-title">Merchant Code</th>
                      <th class="column-title">Merchant Name</th>
                      <th class="column-title">Address</th>
                      <th class="column-title">Edit</th>
                      <th class="column-title no-link last">
                        <span class="nobr">Delete</span>
                      </th>                  
                    </tr>
                  </thead>
                  <tbody class="tracker_tbody">
                  
                      <tr class="post{{$merchant->id}}">
                        <td class=" ">{{$merchant->code}}</td>
                        <td class=" ">{{$merchant->merchant_name}}</td>                        
                        <td class=" ">{{$merchant->address}}</td>
                        <td class="a-right a-right ">
                          <button
                          data-id="{{$merchant->id}}" 
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
                          type="button" class="btn btn-demo edit-btn" 
                          data-toggle="modal" 
                          data-target=".single-modal">Edit</button>
                        </td>
                        <td class="a-right a-right ">
                          <button
                          data-id="{{$merchant->id}}" 
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
                          type="button" class="btn btn-demo dlt-btn" 
                          data-toggle="modal" 
                          data-target=".alert-modal">Delete</button>
                        </td>
                      </tr>
                      
                    </tbody>
                </table>

                <div id="myModal" class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true" style=" padding-right: 17px;">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h2 class="modal-title" id="myModalLabel">Alert!</h2>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('editMerchant')}}" method="POST" role="form" id="merchant-update" class="form-horizontal form-label-left">
                          
                          <input type="hidden" id="id" name="id">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Code</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="code" name="code" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Merchant Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="merchant_name" name="merchant_name" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Business Type</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="business_type" name="business_type" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Product Nature</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="product_nature" name="product_nature" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="address" name="address" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="district" name="district" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Thana</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="thana" name="thana" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Website</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="website" name="website" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook Page</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="fb_page" name="fb_page" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Company Phone</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="company_phone" name="company_phone" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">CP Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="cp_name" name="cp_name" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">DP Designation</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="cp_designation" name="cp_designation" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">CP Number</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="cp_number" name="cp_number" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">CP Email</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="cp_email" name="cp_email" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Rate Chart</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="rate_chart" name="rate_chart" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Cod</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="cod" name="cod" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Smart Rate Chart</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="smart_rate_chart" name="smart_rate_chart" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Return Charge</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="return_charge" name="return_charge" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="account_name" name="account_name" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Number</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="account_number" name="account_number" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="bank_name" name="bank_name" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank Branch</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="bank_branch" name="bank_branch" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Routing Number</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="routing_number" name="routing_number" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Payment Method</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="payment_method" name="payment_method" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Point Code</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="point_code" name="point_code" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship Manager</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="relationship_manager" name="relationship_manager" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Monthly Invoice</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="monthly_invoice" name="monthly_invoice" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pickup Sms</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="pickup_sms" name="pickup_sms" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Packaging Required</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="packaging_req" name="packaging_req" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Pickup Route</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="pickup_route" name="pickup_route" class="form-control" placeholder="" required>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">VAT</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="vat" name="vat" class="form-control" placeholder="" required>
                            </div>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <input type="submit" class="btn btn-success pull-right" value="Save Changes">
                        </div>
                      </form>
                    </div>
                  </div>
                </div>


                <div class="modal fade bs-example-modal-sm alert-modal" tabindex="-1" role="dialog" aria-hidden="true" id="myModal-delete" id="myModal-delete">
                  <div class="modal-dialog modal-sm">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                          <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Merchant Form</h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('deleteMerchant')}}" method="POST" role="form" id="merchant-delete" class="form-horizontal form-label-left">
                          
                          <input type="hidden" id="id" name="id">
                          <h2>Are you sure you want to delete ?</h2>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-success pull-right" value="Delete">
                      </div>
                    </form>
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

 

<script src="../vendors/dropzone/dist/min/dropzone.min.js"></script>

<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
  });
  //Update modal - start
  function updateModalClose(){
    $('#myModal').modal('hide');
    alert("Successfully edited");
  }

  $(document).on('click', '.edit-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('merchanteditModal')}}",{id:id},function(data){
    $('#merchant-update').find('#id').val(data.id);
    $('#merchant-update').find('#code').val(data.code);
    $('#merchant-update').find('#merchant_name').val(data.merchant_name);
    $('#merchant-update').find('#business_type').val(data.business_type);
    $('#merchant-update').find('#product_nature').val(data.product_nature); 
    $('#merchant-update').find('#address').val(data.address);
    $('#merchant-update').find('#district').val(data.district); 
    $('#merchant-update').find('#thana').val(data.thana); 
    $('#merchant-update').find('#website').val(data.website); 
    $('#merchant-update').find('#fb_page').val(data.fb_page); 
    $('#merchant-update').find('#company_phone').val(data.company_phone);
    $('#merchant-update').find('#cp_name').val(data.cp_name);
    $('#merchant-update').find('#cp_designation').val(data.cp_designation); 
    $('#merchant-update').find('#cp_number').val(data.cp_number); 
    $('#merchant-update').find('#cp_email').val(data.cp_email);
    $('#merchant-update').find('#rate_chart').val(data.rate_chart); 
    $('#merchant-update').find('#cod').val(data.cod);
    $('#merchant-update').find('#smart_rate_chart').val(data.smart_rate_chart); 
    $('#merchant-update').find('#return_charge').val(data.return_charge); 
    $('#merchant-update').find('#account_name').val(data.account_name);
    $('#merchant-update').find('#account_number').val(data.account_number); 
    $('#merchant-update').find('#bank_name').val(data.bank_name);
    $('#merchant-update').find('#bank_branch').val(data.bank_branch); 
    $('#merchant-update').find('#routing_number').val(data.routing_number); 
    $('#merchant-update').find('#payment_method').val(data.payment_method);
    $('#merchant-update').find('#point_code').val(data.point_code);
    $('#merchant-update').find('#relationship_manager').val(data.relationship_manager);
    $('#merchant-update').find('#monthly_invoice').val(data.monthly_invoice);
    $('#merchant-update').find('#pickup_sms').val(data.pickup_sms);
    $('#merchant-update').find('#packaging_req').val(data.packaging_req);
    $('#merchant-update').find('#pickup_route').val(data.pickup_route);
    $('#merchant-update').find('#vat').val(data.vat);
  })
});

$('#merchant-update').on('submit',function(e){
  e.preventDefault();
  var data = $(this).serialize();
  var url = $(this).attr('action');
  var post = $(this).attr('method');
  console.log(data.id);
  $.ajax({
    type: post,
    url: url,
    data: data,
    dataTy: 'json',
    success:function(data)
    { 
      $('.post'+data.id).replaceWith(

        "<tr class='post"+data.id+"'>"+ 
        "<td>"+data.code+"</td>"+
        "<td>"+data.merchant_name+"</td>"+
        "<td>"+data.business_type+"</td>"+
        "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-code='" + data.code + 
        "' data-merchant_name='" + data.merchant_name + 
        "' data-business_type='" + data.business_type + 
        "' data-product_nature='" + data.product_nature + 
        "' data-address='" + data.address + 
        "' data-district='" + data.district + 
        "' data-thana='" + data.thana + 
        "' data-website='" + data.website + 
        "' data-fb_page='" + data.fb_page + 
        "' data-company_phone='" + data.company_phone + 
        "' data-cp_name='" + data.cp_name + 
        "' data-cp_designation='" + data.cp_designation + 
        "' data-cp_number='" + data.cp_number + 
        "' data-cp_email='" + data.cp_email + 
        "' data-rate_chart='" + data.rate_chart + 
        "' data-cod='" + data.cod + 
        "' data-smart_rate_chart='" + data.smart_rate_chart + 
        "' data-return_charge='" + data.return_charge + 
        "' data-account_name='" + data.account_name + 
        "' data-account_number='" + data.account_number + 
        "' data-bank_name='" + data.bank_name + 
        "' data-bank_branch='" + data.bank_branch + 
        "' data-routing_number='" + data.routing_number + 
        "' data-payment_method='" + data.payment_method + 
        "' data-point_code='" + data.point_code + 
        "' data-relationship_manager='" + data.relationship_manager + 
        "' data-monthly_invoice='" + data.monthly_invoice + 
        "' data-pickup_sms='" + data.pickup_sms + 
        "' data-packaging_req='" + data.packaging_req + 
        "' data-pickup_route='" + data.pickup_route + 
        "' data-vat='" + data.vat + 
        "'>Edit</button></td>"+
        "<td class='a-right a-right'><button class='btn btn-demo dlt-btn' data-toggle='modal' data-target='.alert-modal' data-id='" + data.id +
        "' data-code='" + data.code + 
        "' data-merchant_name='" + data.merchant_name + 
        "' data-business_type='" + data.business_type + 
        "' data-product_nature='" + data.product_nature + 
        "' data-address='" + data.address + 
        "' data-district='" + data.district + 
        "' data-thana='" + data.thana + 
        "' data-website='" + data.website + 
        "' data-fb_page='" + data.fb_page + 
        "' data-company_phone='" + data.company_phone + 
        "' data-cp_name='" + data.cp_name + 
        "' data-cp_designation='" + data.cp_designation + 
        "' data-cp_number='" + data.cp_number + 
        "' data-cp_email='" + data.cp_email + 
        "' data-rate_chart='" + data.rate_chart + 
        "' data-cod='" + data.cod + 
        "' data-smart_rate_chart='" + data.smart_rate_chart + 
        "' data-return_charge='" + data.return_charge + 
        "' data-account_name='" + data.account_name + 
        "' data-account_number='" + data.account_number + 
        "' data-bank_name='" + data.bank_name + 
        "' data-bank_branch='" + data.bank_branch + 
        "' data-routing_number='" + data.routing_number + 
        "' data-payment_method='" + data.payment_method + 
        "' data-point_code='" + data.point_code + 
        "' data-relationship_manager='" + data.relationship_manager + 
        "' data-monthly_invoice='" + data.monthly_invoice + 
        "' data-pickup_sms='" + data.pickup_sms + 
        "' data-packaging_req='" + data.packaging_req + 
        "' data-pickup_route='" + data.pickup_route + 
        "' data-vat='" + data.vat +
        "'>Delete</button></td>"+
        "</tr>"
        );
      updateModalClose();      
    }
  });
});

  var deletedid;
  $(document).on('click', '.dlt-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('merchanteditModal')}}",{id:id},function(data){
    $('#merchant-delete').find('#id').val(data.id);
    deletedid=data.id;
  })
});
$('#merchant-delete').on('submit',function(e){
  e.preventDefault();
  var data = $(this).serialize();
  var url = $(this).attr('action');
  var post = $(this).attr('method');
  $.ajax({
    type: post,
    url: url,
    data: data,
    dataTy: 'json',
    success:function(data)
    {
      $('.post' + deletedid).remove();
      $('#myModal-delete').modal('hide');
      alert("Successfully deleted");
    }
  });
});
//DELETE - End

</script>
 <?php include 'footer_script_tags.php'?>
