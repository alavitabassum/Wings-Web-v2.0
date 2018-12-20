 <?php require_once 'db.php';?>

 <?php include 'header_index.php';?>
  <?php include 'sidebar.php'?> 
  <?php include 'top_nav.php';?>
<div class="right_col" role="main">
  <div class="">
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h3>New Employee Registration</h3>
            <div class="clearfix"></div>
              <form id="example-form" action="" method="POST" role="form">
                <div>
                  <h3>Employee Details <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                  <section>
                    <label for="name">Name</label>
                    <input type="text" name="name" value="" class="required">

                    <label for="designation">Designation</label>
                    <select class="form-dropdpwn" id="designation_id" name="designation_id">
                      <option>Select Designation</option>
                      <option value=""></option>
                    </select>
                    <br>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" value="" class="required number">

                    <label for="email">Email</label>
                    <input type="text" name="email" value="" class="required email">

                    <label for="address">Address</label>
                    <input type="text" name="address" value="" class="required">
                    
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <label for="district_id">District</label>
                      <select class="form-dropdpwn" id="district_id" name="district_id">
                        <option>Select District</option>
                
                        <option value=""></option>
                      </select>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <label for="thana_id">Thana</label>
                      <select class="form-dropdpwn" id="thana_id" name="thana_id">
                        <option>Select Thana</option>
                     
                        <option value=""></option>
                      </select>
                    </div>

                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <label for="date">Date Of Joining</label>
                      <input type="date" name="date" value="" class="required">
                      <br>
                    </div>
                    </br>

                    <label for="hrbrand">Hr Brand</label>
                    <input type="text" name="hrbrand" value="" class="required">
               
                    <label for="salary">Basic Salary</label>
                    <input type="text" name="salary" value="" class="required number">

                    <label for="hrent">House Rent</label>
                    <input type="text" name="hrent" value="" class="required">

                    <label for="transportallowance">Transport Allowance</label>
                    <input type="text" name="transportallowance" value="" class="required">

                    <label for="qincentive">Quarterly incentive</label>
                    <input type="text" name="qincentive" value="" class="required">

                    <label for="fbonus">Festival Bonus</label>
                    <input type="text" name="fbonus" value="" class="required">

                    <label for="tin">TIN</label>
                    <input type="text" name="tin" value="" class="required number">
                  </section>

                  <h3>General Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span> </h3>
                  <section>
                    <label for="dob">Date Of Birth</label>
                    <input type="date" name="dob" value="" class="required">

                    <label for="mstatus">Marital Status</label>
                    <!-- <input type="text" name="mstatus" value="" class="required"> -->
                    <select class="form-dropdpwn" id="mstatus" name="mstatus">
                      <option value="single">Single</option>
                      <option value="married">Married</option>
                    </select>
                    <br>

                    <label for="bgroup">Blood Group</label>
                    <input type="text" name="bgroup" value="" class="required">

                    <label for="gender">Gender</label>
                    <!-- <input type="text" name="gender" value="" class="required"> -->
                    <select class="form-dropdpwn" id="gender" name="gender">
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                    <br>

                    <label for="gender">Father/Spouse Name</label>
                    <input type="text" name="gender" value="" class="required">

                    <label for="nid">NID</label>
                    <input type="text" name="nid" value="" class="required number">

                    <label for="religion">Religion</label>
                    <input type="text" name="religion" value="" class="required">
                  </section>

                  <h3>Bank Information <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span></h3>
                  <section>
                    <label for="bank_id">Bank</label>                    
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <select class="form-dropdpwn" id="bank_id" name="bank_id">
                        <option>Select Bank</option>
                     
                        <option value="">  </option>
                      </select>
                    </div>
                    <br>

                    <label for="acname">Account Name</label>
                    <input type="text" name="acname" value="" class="required">

                    <label for="acnumber">Account Number</label>
                    <input type="text" name="acnumber" value="" class="required number">
                  </section>

                  <h3>Emergency Contact Detail <span class="white-arrow"><img src="images/white-right-arrow.png" alt="white arrow"></span></h3>
                  <section>
                    <label for="ename">Contact Person</label>
                    <input type="text" name="ename" value="" class="required">

                    <label for="ephone">Phone</label>
                    <input type="text" name="ephone" value="" class="required number">

                    <label for="eaddress">Address</label>
                    <input type="text" name="eaddress" value="" class="required">

                    <label for="relationship">Relationship</label>
                    <input type="text" name="relationship" value="" class="required">
                  </section>
                  <h3>Point Assignment</h3>
                  <section>
                    <label for="point_id">Point Assignment</label>
                    <input type="text" name="point_id" value="" class="required">
                    <input type="hidden" name="_token" value="">
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