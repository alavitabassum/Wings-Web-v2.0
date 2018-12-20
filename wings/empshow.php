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
            <h2>List of Employees</h2>

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
                    <th class="column-title"> Employee Name</th>
                    <th class="column-title"> Designation</th>
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


                <tr class="post{{$employee->id}}">
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                  <td class=" ">{{$employee->name}}</td>
                  <td class=" ">{{$employee->designation->title}}</td>
                  <td class=" ">{{$employee->address}}</td>
                  <td class="a-right a-right ">
                    <button data-id="{{$employee->id}}"
                      data-name="{{$employee->name}}"
                      data-designation_id="{{$employee->designation_id}}"
                      data-phone="{{$employee->phone}}"
                      data-email="{{$employee->email}}"
                      data-district_id="{{$employee->district_id}}"
                      data-thana_id="{{$employee->thana_id}}"
                      data-address="{{$employee->address}}"
                      data-gender="{{$employee->gender}}"
                      data-dob="{{$employee->dob}}"
                      data-bgroup="{{$employee->bgroup}}"
                      data-religion="{{$employee->religion}}"
                      data-mstatus="{{$employee->mstatus}}"
                      data-tin="{{$employee->tin}}"
                      data-nid="{{$employee->nid}}"
                      data-date="{{$employee->date}}"
                      data-hrbrand="{{$employee->hrbrand}}"
                      data-salary="{{$employee->salary}}"
                      data-hrent="{{$employee->hrent}}"
                      data-transportallowance ="{{$employee->transportallowance}}"
                      data-qincentive="{{$employee->qincentive}}"
                      data-fbonus="{{$employee->fbonus}}"
                      data-bank_id="{{$employee->bank_id}}"
                      data-acname="{{$employee->acname}}"
                      data-acnumber="{{$employee->acnumber}}"
                      data-ename="{{$employee->ename}}"
                      data-ephone="{{$employee->ephone}}"
                      data-eaddress="{{$employee->eaddress}}"
                      data-relationship="{{$employee->relationship}}"
                      data-point_id="{{$employee->point_id}}"
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
                            <h4 class="modal-title" id="myModalLabel">Employee Record</h4>
                          </div>
                          <div class="modal-body">



            <div class="row">

                <div class="clearfix"></div>


                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                      <div class="x_title">
                        <h2>Employee Deatils</h2>

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
                                  <th for="">Employee Name</th>
                                  <td id="na"></td>
                                </tr>
                                <tr>
                                  <th>Designation</th>
                                  <td id="desig"></td>
                                </tr>
                                <tr>
                                  <th>Phone</th>
                                  <td id="ph"></td>
                                </tr>
                                <tr>
                                  <th>Email</th>
                                  <td id="em"></td>
                                </tr>
                                <tr>
                                  <th >District</th>
                                  <td id="dd"></td>
                                </tr>
                                <tr>
                                  <th>Thana</th>
                                  <td id="th"></td>
                                </tr>
                                <tr>
                                  <th>Address</th>
                                  <td id="ad"></td>
                                </tr>
                                <tr>
                                  <th>Date of Joining</th>
                                  <td id="doj"></td>
                                </tr>
                                <tr>
                                  <th>HR Brand</th>
                                  <td id="hr"></td>
                                </tr>
                                <tr>
                                  <th>Basic Salary</th>
                                  <td id="bs"></td>
                                </tr>
                                <tr>
                                  <th>House rent</th>
                                  <td id="hrnt"></td>
                                </tr>
                                <tr>
                                  <th>Transport Allowance</th>
                                  <td id="ta"></td>
                                </tr>
                                <tr>
                                  <th>Quarterly Incentive</th>
                                  <td id="qi"></td>
                                </tr>
                                <tr>
                                  <th>Festival Bonus</th>
                                  <td id="fb"></td>
                                </tr>
                                <tr>
                                  <th>TIN NUmber</th>
                                  <td id="tn"></td>
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
                        <h2>General Information</h2>

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
                                  <th>Date Of Birth</th>
                                  <td id="db"></td>
                                </tr>
                                <tr>
                                  <th>Marital Status</th>
                                  <td id="mstat"></td>
                                </tr>
                                <tr>
                                  <th>Gender</th>
                                  <td id="gn"></td>
                                </tr>
                                <tr>
                                  <th>Blood Group</th>
                                  <td id='bg'></td>
                                </tr>
                                <tr>
                                  <th>Father/Spouse Name</th>
                                  <td id='spn'></td>
                                </tr>
                                <tr>
                                  <th>NID Number</th>
                                  <td id='nd'></td>
                                </tr>
                                <tr>
                                  <th>Religion</th>
                                  <td id='rg'></td>
                                </tr>
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>


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
                                  <th>Bank Name</th>
                                  <td id="bn"></td>
                                </tr>
                                <tr>
                                  <th>Account Name</th>
                                  <td id="acn"></td>
                                </tr>
                                <tr>
                                  <th>Account Number</th>
                                  <td id="acnm"></td>
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
                        <h2>Emergency Contact Details</h2>

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
                                  <th>Contact Person</th>
                                  <td id="cp"></td>
                                </tr>
                                <tr>
                                  <th>Phone</th>
                                  <td id="eph"></td>
                                </tr>
                                <tr>
                                  <th>Address</th>
                                  <td id="eadd"></td>
                                </tr>
                                <tr>
                                  <th>Relationship</th>
                                  <td id="rln"></td>
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
                        <h2>Point Details</h2>

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
                                  <th>Point</th>
                                  <td id="p"></td>
                                </tr>

                                </tr>
                          </tbody>
                        </table>

                      </div>
                    </div>
                  </div>
                  <div class="clearfix"></div>

              </div><div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
</div>
<script>
//Show-Employee Details
$(document).on('click', '.empView-btn', function() {
 console.log('is it calling or not');
  $('#na').text($(this).data('name'));
  $('#desig').text($(this).data('designation_id'));
  $('#ph').text($(this).data('phone'));
  $('#em').text($(this).data('email'));
  $('#dd').text($(this).data('district_id'));
  $('#th').text($(this).data('thana_id'));
  $('#ad').text($(this).data('address'));
  $('#doj').text($(this).data('date'));
  $('#hr').text($(this).data('hrbrand'));
  $('#bs').text($(this).data('salary'));
  $('#hrnt').text($(this).data('hrent'));
  $('#ta').text($(this).data('transportallowance'));
  $('#qi').text($(this).data('qincentive'));
  $('#fb').text($(this).data('fbonus'));
  $('#db').text($(this).data('dob'));
  $('#mstat').text($(this).data('mstatus'));
  $('#gn').text($(this).data('gender'));
  $('#bg').text($(this).data('bgroup'));
  $('#spn').text($(this).data('gender'));
  $('#nd').text($(this).data('nid'));
  $('#rg').text($(this).data('religion'));
  $('#bn').text($(this).data('bank_id'));
  $('#acn').text($(this).data('acname'));
  $('#acnm').text($(this).data('acnumber'));
  $('#cp').text($(this).data('ename'));
  $('#eph').text($(this).data('ephone'));
  $('#eadd').text($(this).data('eaddress'));
  $('#rln').text($(this).data('relationship'));
  $('#p').text($(this).data('point_id'));

});
//End Empoyee Details
</script>
 <?php include 'footer_script_tags.php'?>

