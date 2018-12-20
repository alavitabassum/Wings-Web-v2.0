 <?php require_once 'db.php';?>

 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title m-e-form ">
            <h3>New Merchant Registration</h3>
            <div class="clearfix"></div>
              <form id="example-form" action="store" method="POST" role="form" >
                <div>
                    <h3>Basic Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                    <section>
                        <label for="code">Code</label>
                        <input type="text" name="code" value="" class="required">

                        <label for="merchant_name">Name</label>
                        <input type="text" name="merchant_name" value="" class="required">

                        <label for="business_type">Business Type</label>
                        <input type="text" name="business_type" value="">

                        <label for="product_nature">Product Nature</label>
                        <input type="text" name="product_nature" value="" class="required">

                        <label for="address">Address</label>
                        <input type="text" name="address" value="" class="required">

                        <label for="district">District</label>                        
                        <select required="true" class="form-dropdpwn" name="district">
                          <option value="">Select District</option>
              
                          <option value="{{ $dDistrict }}">  </option>
                        </select>

                        <label for="thana">Thana</label>                        
                        <select required="true" class="form-dropdpwn" name="thana">
                          <option value="">Select Thana</option>
                       
                          <option value="{{ $thana }}">  </option>
                        </select>
                        <br>

                        <label for="website">Website</label>
                        <input type="text" name="website" value="" class="required">

                        <label for="fb_page">Facebook Page</label>
                        <input type="text" name="fb_page" value="" class="required">

                        <label for="company_phone">Company Phone</label>
                        <input type="text" name="company_phone" value="" class="required number">
                    </section>
                    <h3>Contact Person Details <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                    <section>
                        <label for="cp_name">Name</label>
                        <input type="text" name="cp_name" value="" class="required">

                        <label for="cp_designation">Designation</label>
                        <input type="text" name="cp_designation" value="" class="required">

                        <label for="cp_number">Contact Number</label>
                        <input type="text" name="cp_number" value="" class="required number">

                        <label for="cp_email">Email</label>
                        <input type="text" name="cp_email" value="" class="required email">
                    </section>
                    <h3>Delivery Charge Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                    <section>
                        <label for="rate_chart">Rate Chart</label>
                        <input type="text" name="rate_chart" value="" class="required">

                        <label for="cod">COD %</label>
                        <input type="text" name="cod" value="" class="required number">

                        <label for="smart_rate_chart">Smart Rate Chart</label>
                        <input type="text" name="smart_rate_chart" value="" class="required">

                        <label for="return_charge">Return Charge</label>
                        <input type="text" name="return_charge" value="" class="required number">
                    </section>
                    <h3>Bank Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                    <section>
                        <label for="account_name">Account Name</label>
                        <input type="text" name="account_name" value="" class="required">

                        <label for="account_number">Account Number</label>
                        <input type="text" name="account_number" value="" class="required number">

                        <label for="bank_name">Bank Name</label>
                        <select required="true" class="form-dropdpwn" name="bank_name">
                          <option value="">Select Bank</option>
                 
                          <option value="{{ $bank }}">  </option>
                        </select>
                        <br>

                        <label for="bank_branch">Bank Branch</label>
                        <input type="text" name="bank_branch" value="" class="required">

                        <label for="routing_number">Routing Number</label>
                        <input type="text" name="routing_number" value="" class="required">

                        <label for="payment_method">Payment Method</label>
                        <input type="text" name="payment_method" value="" class="required">
                    </section>
                    <h3>Other Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                    <section>
                        <label for="point_code">Point Code</label>
                        <input type="text" name="point_code" value="" class="required">

                        <label for="relationship_manager">Relationship Manager</label>
                        <input type="text" name="relationship_manager" value="" class="required">

                        <label for="monthly_invoice">Monthly Invoice</label>
                        <select class="form-dropdpwn" name="monthly_invoice">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>

                        <label for="pickup_sms">Pick-Up Sms</label>
                        <select class="form-dropdpwn" name="pickup_sms">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                        <br>

                        <label for="packaging_req">Packaging Required</label>
                        <select class="form-dropdpwn" name="packaging_req">
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                        <br>

                        <label for="pickup_route">Pick-Up Route</label>
                        <input type="text" name="pickup_route" value="" class="required">

                        <label for="vat">Vat %</label>
                        <input type="text" name="vat" value="" class="required number">

                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                    </section>
                    <h3>Excel Format</h3>
                    <section>
                    
                        <label for="monthly_invoice">Format Type</label>
                        <select class="form-dropdpwn" name="monthly_invoice">
                          <option value="full">Full</option>
                          <option value="partial">Partial</option>
                        </select>
<br/>
                        <label for="">Order ID</label>
                        <input type="text" name="" value="" class="required">

                        <label for="">Item ID</label>
                        <input type="text" name="" value="" class="required">

                        
                        <label for="">Item Description</label>
                        <input type="text" name="" value="" class="required">
                        
                        <label for="">Quantity</label>
                        <input type="text" name="" value="" class="required">
                        
                        <label for="">Amount</label>
                        <input type="text" name="" value="" class="required">

                        <label for="">Pick Up Merchant Name</label>
                        <input type="text" name="" value="" class="required">

                        <label for="">Pick Up Merchant Address</label>
                        <input type="text" name="" value="" class="required">

                          <label for="">Pick Up Merchant Phone</label>
                        <input type="text" name="" value="" class="required">

                          <label for="">Customer Name</label>
                        <input type="text" name="" value="" class="required">

                          <label for="">Customer Address</label>
                        <input type="text" name="" value="" class="required">

                          <label for="">Customer Phone</label>
                        <input type="text" name="" value="" class="required">

                    </section>
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


 
 <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <script src="../vendors/nprogress/nprogress.js"></script>
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <script src="../vendors/jquerysteps/js/jquery.serializejson.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.js"></script>
    <script src="../vendors/jquerysteps/js/jquery.steps.js"></script>

  <script>
    var form = $("#example-form");

    form.children("div").steps({
      headerTag: "h3",
      bodyTag: "section",
      transitionEffect: "slideLeft",
      onStepChanging: function (event, currentIndex, newIndex)
      {
        form.validate().settings.ignore = ":disabled,:hidden";
        return form.valid();
      },
      onFinishing: function (event, currentIndex)
      {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
      },
      onFinished: function (event, currentIndex)
      {
        form.submit();
      }
    });
  </script>
 <?php include 'footer_script_tags.php'?>
