 <?php require_once 'db.php';?>

 <?php include 'header_general.php';?> <?php include 'sidebar.php'?> <?php include 'top_nav.php';?>
<div class="right_col" role="main">
  <div class="">


    <div class="clearfix"></div>


    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;margin-top: 5em;">
        <span class="label label-info" data-toggle="modal" data-target=".entry-modal" onclick="modalReset();">Create New Bank Branch</span>
        <!--edit/delete/reset status/ duplicate-->
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of Bank Branches</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="table-responsive">
              <table id="order-table" class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title"> Bank Name</th>
                    <th class="column-title">Branch Location</th>
                    <th class="column-title">Contact Name</th>
					         <th class="column-title">Contact Number</th>
					         <th class="column-title">Branch Swift Code</th>
                    <th class="column-title">Edit</th>
                    <th class="column-title">Delete</th>
                </tr>
              </thead>


              <tbody class="tracker_tbody">
                
              
                <tr class="post{{$bankbranch->id}}">
                  <td class=" ">{{ $bankbranch->bank->name}}</td>
                  <td>{{ $bankbranch->location}}</td>
                  <td>{{ $bankbranch->name}}</td>
                  <td>{{ $bankbranch->number}}</td>
                  <td>{{ $bankbranch->code}}</td>
                    <td class="a-right a-right ">
                     <button data-id="{{$bankbranch->id}}" data-bank_id="{{$bankbranch->bank->name}}" data-location="{{$bankbranch->location}}" data-name="{{$bankbranch->name}}" data-number="{{$bankbranch->number}}" data-code="{{$bankbranch->code}}" type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
                      Edit
                    </button>
                  </td>
                  <td class="a-right a-right ">
                     <button data-id="{{$bankbranch->id}}" data-bank_id="{{$bankbranch->bank->name}}" data-location="{{$bankbranch->location}}" data-name="{{$bankbranch->name}}" data-number="{{$bankbranch->number}}" data-code="{{$bankbranch->code}}" type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
                      Delete
                    </button>
                  </td>
                </tr>
                
              </tbody>
            </table>
             <!--Alert Modal-->
          <div class="modal fade bs-example-modal-sm alert-modal" tabindex="-1" role="dialog" aria-hidden="true" id="myModal-delete" style=" padding-right: 17px;">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h2 class="modal-title" id="myModalLabel">Alert!</h2>
                </div>
                <div class="modal-body">
                  <form action="{{route('deletebankbranch')}}" method="POST" role="form" id="district-delete" class="form-horizontal form-label-left">
                    
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
          <!--Alert Modal-->
            <!--Modal for Distrcit Entry-->
            <div class="modal fade bs-example-modal-lg entry-modal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Bankbranch Form</h4>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('addbankBranch')}}" method="POST" role="form" id="branchinput" class="form-horizontal form-label-left">
                      
                      
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select required="true" class="form-control" id="bank_id" name="bank_id">
                            <option value="">Select Bank</option>
                    
                            <option value="{{ $bank }}">  </option>   
                            
                          </select>
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch Location</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="location" name="location" class="form-control"  data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="name" name="name" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="number" id="number" name="number" class="form-control"  placeholder="" required="true">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Swift Code</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="code" name="code" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal" onclick="modalReset()">Close</button>
                      <input type="submit" class="btn btn-success pull-right" value="Save">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
            <!--Modal for Order Edit-->

            <div class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">

                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                      <span aria-hidden="true">×</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Bankbranch Form</h4>
                  </div>
                  <div class="modal-body">
                    <form action="{{route('branchupdate')}}" method="POST" role="form" id="branch-update" class="form-horizontal form-label-left">
                      
                      <input type="hidden" id="id" name="id">
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Bank</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <select class="form-control" id="bank_id" name="bank_id">
                            <option>Select Bank</option>
                     
                            <option value="{{ $bank }}">  </option>   
                            
                          </select>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Branch Location</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="location" name="location" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Name</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="name" name="name" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Contact Number</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="number" name="number" class="form-control" placeholder="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Swift Code</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                          <input type="text" id="code" name="code" class="form-control" placeholder="">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <input type="submit" class="btn btn-success pull-right" value="Save">
                    </div>
                  </form>

                </div>
              </div>
            </div>
            
            <!--/ Modal for Order Edit-->
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

 
<script type="text/javascript">
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="token"]').attr('content')
    }
  });
  
  function modalReset() {
    document.getElementById("branchinput").reset();
}
  $('#branchinput').on('submit',function(e){
    e.preventDefault();
    var data = $(this).serialize();
    var url  = $(this).attr('action');
    var post = $(this).attr('method');
    $.ajax({
      type: post,
      url: url,
      data: data,
      dataTy: 'json',
      success:function(data)
      {
        $('.error').remove();
        $('#order-table').append("<tr class='post" + data.id + "'>"+
          "<td>" + data.bank_name + "</td>"+
          "<td>" + data.location  + "</td>"+
          "<td>" + data.name  + "</td>"+
          "<td>" + data.number  + "</td>"+
          "<td>" + data.code  + "</td>"+
          "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-bank_id='" +
          data.bank_name + "' data-location='" +
          data.location + "' data-name='" +
          data.name + "' data-number='" +
          data.number + "' data-code='" +
          data.code + "'>Edit</button></td>"+"<td class='a-right a-right'><button class='btn btn-demo dlt-btn' data-toggle='modal' data-target='.alert-modal' data-id='" + data.id + "' data-bank_id='" +
          data.bank_name + "' data-location='" +
          data.location + "' data-name='" +
          data.name + "' data-number='" +
          data.number + "' data-code='" +
          data.code + "'>Delete</button></td>"+
       
          "</tr>");
        modalReset();
      }
    });
  })

  //------------------Edit bank branches-------------------------------
$(document).on('click', '.edit-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('branchedit')}}",{id:id},function(data){
    $('#branch-update').find('#id').val(data.id);
    $('#branch-update').find('#bank_id').val(data.bank_id);
     $('#branch-update').find('#location').val(data.location);
    $('#branch-update').find('#name').val(data.name);
    $('#branch-update').find('#number').val(data.number);
    $('#branch-update').find('#code').val(data.code);
    $('#myModal').modal('show');
  })

});
  //---------------update bank branches------------------
  $('#branch-update').on('submit',function(e){
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
        $('.post' + data.id).replaceWith("<tr class='post"+data.id+"'>"+
          "<td>" + data.bank_name + "</td>"+
          "<td>" + data.location  + "</td>"+
          "<td>" + data.name  + "</td>"+
          "<td>" + data.number  + "</td>"+
          "<td>" + data.code  + "</td>"+
          "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-bank_id='" +
        data.bank_name + "' data-location='" +
        data.location + "'  data-name='" +
        data.name + "'  data-number='" +
        data.number + "'  data-code='" +
        data.code + "'>Edit</button></td>"+"<td class='a-right a-right'><button class='btn btn-demo dlt-btn' data-toggle='modal' data-target='.alert-modal' data-id='" + data.id + "' data-bank_id='" +
        data.bank_name + "' data-location='" +
        data.location + "'  data-name='" +
        data.name + "'  data-number='" +
        data.number + "'  data-code='" +
        data.code + "'>Delete</button></td>"+
        "</tr>");
      }
    });
  })
//DELETE - Begin
var deletedid;
$(document).on('click', '.dlt-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('branchedit')}}",{id:id},function(data){
    $('#district-delete').find('#id').val(data.id);
    deletedid=data.id;
  })
});
$('#district-delete').on('submit',function(e){
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
      alert("Successfully deleted");
      $('#myModal-delete').modal('hide');
    }
  });
});
</script>

</script>
   <?php include 'footer_script_tags.php'?>
