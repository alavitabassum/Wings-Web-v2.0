@extends('layouts.employeeseditlayout')

 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="employee-list-table">
                    <div class="x_panel employee-list-table">
                        <div class="x_title">
                            <h2>Employee Information</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="modal fade bs-example-modal-lg view-record-modal" tabindex="-1" role="dialog" aria-hidden="true" style=" padding-right: 17px;">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                            <h4 class="modal-title" id="myModalLabel">Employee Record</h4>
                                        </div>
                                        <div class="modal-body"></div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ Modal for viewing record-->
                            
                            <div class="table-responsive">
                                <table id="order-table" class="table table-striped jambo_table bulk_action">
                                    <thead>
                                        <tr class="headings">
                                            <th class="column-title">Employee Id</th>
                                            <th class="column-title">Employee Name</th>
                                            <th class="column-title">Contact Number</th>
                                            <th class="column-title">Edit</th>
                                            <th class="column-title">Create User</th>
                                            <th class="column-title no-link last">
                                                <span class="nobr">Delete</span>
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody class="tracker_tbody">
                                        
                              
                                        <tr class="post{{$employee->id}}">
                                            <td class=" ">{{$employee->id}}</td>
                                            <td class=" ">{{$employee->name}}</td>                        
                                            <td class=" ">{{$employee->phone}}</td>
                                            <td class="a-right a-right ">
                                                <button 
                                                data-id="{{$employee->id}}" 
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
                                                type="button" class="btn btn-demo edit-btn"
                                                data-toggle="modal" 
                                                data-target=".single-modal">Edit
                                            </button>
                                        </td>
                                        <td class="a-right a-right ">
                                            <button 
                                            data-id="{{$employee->id}}" 
                                            type="button" class="btn btn-demo edit-btn"
                                            data-toggle="modal" 
                                            data-target=".entry-modal">Create User
                                        </button>
                                    </td>
                                    <td class="a-right a-right ">
                                        <button 
                                        data-id="{{$employee->id}}" 
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
                                        type="button" class="btn btn-demo dlt-btn"
                                        data-toggle="modal" 
                                        data-target=".alert-modal">Delete
                                    </button>
                                </td>
                            </tr>
                            
                        </tbody>
                    </table>

                    <!-- Edit modal -->
                    <div id="myModal" class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">
                              <span aria-hidden="true">×</span>
                          </button>
                          <h4 class="modal-title" id="myModalLabel">Employee Form</h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('editEmployee')}}" method="POST" role="form" id="employee-update" class="form-horizontal form-label-left">
                          
                          <input type="hidden" id="id" name="id">
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" id="name" name="name" class="form-control" placeholder="" required>
                          </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Disgnation Id</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="designation" name="designation" class="form-control" placeholder="" required>
                      </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Phone</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="phone" name="phone" class="form-control" placeholder="" required>
                  </div>
              </div> 
              <div class="form-group">
                <label class="control-label col-md-3 col-sm-3 col-xs-12">Email</label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input type="text" id="email" name="email" class="form-control" placeholder="" required>
              </div>
          </div> 
          <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
            <div class="col-md-9 col-sm-9 col-xs-12">
              <input type="text" id="district_id" name="district_id" class="form-control" placeholder="" required>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thana</label>
        <div class="col-md-9 col-sm-9 col-xs-12">
          <input type="text" id="thana_id" name="thana_id" class="form-control" placeholder="" required>
      </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Address</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="address" name="address" class="form-control" placeholder="" required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="gender" name="gender" class="form-control" placeholder="" required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Birth</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="dob" name="dob" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Blood Group</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="bgroup" name="bgroup" class="form-control" placeholder="" required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="religion" name="religion" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Marital Status</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="mstatus" name="mstatus" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">TIN</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="tin" name="tin" class="form-control" placeholder="" required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">NID</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="nid" name="nid" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Date of Joining</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="date" name="date" class="form-control" placeholder="" required>
  </div>
</div>
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">HR Band</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="hrbrand" name="hrbrand" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Salary</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="salary" name="salary" class="form-control" placeholder="" required>
  </div>
</div>    
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">House Rent</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="hrent" name="hrent" class="form-control" placeholder="" required>
  </div>
</div>   
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Transport Allowance</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="transportallowance" name="transportallowance" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Quartly Incentive</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="qincentive" name="qincentive" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Festival Bonus</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="fbonus" name="fbonus" class="form-control" placeholder="" required>
  </div>
</div>  
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="bank_id" name="bank_id" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Name</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="acname" name="acname" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Account Number</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="acnumber" name="acnumber" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Contact Name</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="ename" name="ename" class="form-control" placeholder="" required>
  </div>
</div>   
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Contact Phone</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="ephone" name="ephone" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Emergency Contact Address</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="eaddress" name="eaddress" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship With Emergency Contact</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="relationship" name="relationship" class="form-control" placeholder="" required>
  </div>
</div> 
<div class="form-group">
    <label class="control-label col-md-3 col-sm-3 col-xs-12">Point</label>
    <div class="col-md-9 col-sm-9 col-xs-12">
      <input type="text" id="point_id" name="point_id" class="form-control" placeholder="" required>
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

<!--Create user modal-->
<div class="modal fade bs-example-modal-lg entry-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">User Name</h4>
  </div>
  <div class="modal-body">
    <form action="{{route('adduser')}}" method="POST" role="form" id="duser" class="form-horizontal form-label-left">
       
       <input type="hidden" id="employee_id" name="employee_id">
       <div class="form-group">
          <label class="control-label col-md-3 col-sm-3 col-xs-12"> User Name</label>
          <div class="col-md-9 col-sm-9 col-xs-12">
            <input type="text"  id="name" name="name" class="form-control"  data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3 col-sm-3 col-xs-12">User Email</label>
      <div class="col-md-9 col-sm-9 col-xs-12">
        <input type="text" id="email" name="email" class="form-control"  data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
    </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
  <div class="col-md-9 col-sm-9 col-xs-12">
    <input type="text" id="password" name="password" class="form-control"  data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
</div>
</div>

<div class="modal-footer">
  <button type="button" class="btn btn-default" data-dismiss="modal" onclick="modalReset()">Close</button>
  <input type="submit" class="btn btn-success pull-right" value="Save Changes">
</div>
</form>

</div>


</div>
</div>
</div>

<!--create user modal end-->

<!-- Delete modal -->
<div class="modal fade bs-example-modal-sm alert-modal" tabindex="-1" role="dialog" aria-hidden="true" id="myModal-delete">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">×</span>
      </button>
      <h4 class="modal-title" id="myModalLabel">Employee Form</h4>
  </div>
  <div class="modal-body">
    <form action="{{route('deleteEmployee')}}" method="POST" role="form" id="employee-delete" class="form-horizontal form-label-left">
      
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

<!-- End -->
</div>
</div>
</div>
</div>                
</div>
</div>
</div>
</div>
 <?php include 'footer_script_tags.php'?>
