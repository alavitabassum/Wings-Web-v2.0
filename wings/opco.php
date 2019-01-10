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

<div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;margin-top: 5em;">
        <span class="label label-info" data-toggle="modal" data-target=".entry-modal">Create New Operational Country</span>
        <!--edit/delete/reset status/ duplicate-->
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of Operational Countries</h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <div class="table-responsive">
              <table id="order-table" class="table table-striped jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title"> Code</th>
                    <th class="column-title"> Name</th>
                    <th class="column-title">Edit</th>
                    <th class="column-title"> Delete</th>
                </tr>
              </thead>
              <tbody class="tracker_tbody">
                
                <tr class="post{{$opco->id}}">
                  <td class=" ">{{ $opco->code}}</td>
                  <td class=" ">{{ $opco->name}}</td>
                  <td class="a-right a-right ">
                   <button data-id="{{$opco->id}}" data-code="{{$opco->code}}" data-name="{{$opco->name}}"  type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
                    Edit
                  </button>
                </td>
                <td class="a-right a-right ">
                   <button data-id="{{$opco->id}}" data-code="{{$opco->code}}" data-name="{{$opco->name}}"  type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
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
                  <form action="{{route('deleteopco')}}" method="POST" role="form" id="district-delete" class="form-horizontal form-label-left">
                    
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

          <!--Modal for Opco Entry-->
          <div class="modal fade bs-example-modal-lg entry-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Operational Country Form</h4>
                </div>
                <div class="modal-body">
                  <form action="{{route('addOpco')}}" method="POST" role="form" id="ddistrict" class="form-horizontal form-label-left">
                    
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Code</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="code" name="code" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="name" name="name" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
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

          <div id="myModal" class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">Operational Country Form</h4>
                </div>
                <div class="modal-body">
                 <form action="{{route('editOpco')}}" method="POST" role="form" id="district-update" class="form-horizontal form-label-left">
                  

                  <input type="hidden" id="id" name="id">

                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Code</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="code" name="code" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="name" name="name" class="form-control" data-validation="length alphanumeric" data-validation-length="min1" placeholder="" required="true">
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
    document.getElementById("ddistrict").reset();
}
//ADD DISTRICT
$('#ddistrict').on('submit',function(e){
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
        "<td>" + data.code + "</td>"+
        "<td>" + data.name + "</td>"+
        "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-code='" +
        data.code + "' data-name='" +
        data.name + "'>Edit</button></td>"+"<td class='a-right a-right'><button class='btn btn-demo dlt-btn' data-toggle='modal' data-target='.alert-modal'data-id='" + data.id + "' data-code='" +
        data.code + "' data-name='" +
        data.name + "'>Delete</button></td>"+
        
        "</tr>");
      modalReset();
    }
  });
})

//EDIT DISTRICT
$(document).on('click', '.edit-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('opcoedit')}}",{id:id},function(data){
    $('#district-update').find('#id').val(data.id);
    $('#district-update').find('#code').val(data.code);
    $('#district-update').find('#name').val(data.name);
    $('#myModal').modal('show');
  })
});
//UPDATE DISTRICT
$('#district-update').on('submit',function(e){
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

      $('.post'+data.id).replaceWith("<tr class='post"+data.id+"'>"+ 
        "<td>"+data.code+"</td>"+
        "<td>"+data.name+"</td>"+
        "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-code='" +
        data.code + "' data-name='" +
        data.name + "'>Edit</button></td>"+"<td class='a-right a-right'><button class='btn btn-demo dlt-btn' data-toggle='modal' data-target='.alert-modal'data-id='" + data.id + "' data-code='" +
        data.code + "' data-name='" +
        data.name + "'>Delete</button></td>"+
        
        "</tr>");
  
    }
  });
})
var deletedid;
$(document).on('click', '.dlt-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('opcoedit')}}",{id:id},function(data){
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
      $('#myModal-delete').modal('hide');
      alert("Successfully deleted");
    }
  });
});

</script> 
 <?php include 'footer_script_tags.php'?>
