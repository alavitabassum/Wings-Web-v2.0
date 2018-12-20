<?php require_once 'db.php';?>

<?php include 'header_general.php';?>
<?php include 'sidebar.php'?>
<?php include 'top_nav.php';?>

<div class="right_col" role="main">
        <div class="">


          <div class="clearfix"></div>


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;margin-top: 5em;">
        <span class="label label-info" data-toggle="modal" data-target=".entry-modal">Create New PaperFly User</span>
        <!--edit/delete/reset status/ duplicate-->
      </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">

      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>List of PaperFly Users</h2>

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
                    <th class="column-title"> Name</th>
                    <th class="column-title no-link last">
                      <span class="nobr">Edit</span>
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
                          <a role="menuitem" tabindex="-1" href="#">Delete Selected</a>
                        </li>
                      </ul>
                    </li>


                  </th>
                </tr>
              </thead>


              <tbody class="tracker_tbody">
              
       
                <tr class="post{{$pfuser->id}}">
                  <td class="a-center ">
                    <input type="checkbox" class="flat" name="table_records">
                  </td>
                  <td class=" ">Tonoy</td>
                  <td class="a-right a-right ">
                   <button data-id="{{$pfuser->id}}"  data-name="{{$pfuser->name}}"  type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
                    Edit
                  </button>
                </td>
              </tr>

            </tbody>
          </table>

          <!--Modal for pfuser Entry-->
          <div class="modal fade bs-example-modal-lg entry-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">PaperFly User Form</h4>
                </div>
                <div class="modal-body">
                  <form action="{{route('addPfuser')}}" method="POST" role="form" id="ddistrict" class="form-horizontal form-label-left">
             
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                      <div class="col-md-9 col-sm-9 col-xs-12">
                        <input type="text" id="name" name="name" class="form-control" placeholder="">
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
          
          <!--Modal for Order Edit-->

          <div id="myModal" class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">

                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                  </button>
                  <h4 class="modal-title" id="myModalLabel">PaperFly User Form</h4>
                </div>
                <div class="modal-body">
                 <form action="{{route('editPfuser')}}" method="POST" role="form" id="district-update" class="form-horizontal form-label-left">
                  <input type="hidden" id="id" name="id">

                  
                  <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Name</label>
                    <div class="col-md-9 col-sm-9 col-xs-12">
                      <input type="text" id="name" name="name" class="form-control" placeholder="">
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
        "<td><input type='checkbox' class='flat' name='table_records' ></td>"+
        "<td>" + data.name + "</td>"+
        "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-name='" +
        data.name + "'>Edit</button></td>"+
        "</tr>");
      console.log("success2");
    }
  });
})

//EDIT DISTRICT
$(document).on('click', '.edit-btn', function(e) {
  var id = $(this).data('id');
  $.get("{{route('pfuseredit')}}",{id:id},function(data){
    $('#district-update').find('#id').val(data.id);
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
        "<td class='a-center'><input type='checkbox' class='flat' name='table_records' ></td>"+
        "<td>"+data.name+"</td>"+
        "<td><button class='btn btn-demo edit-btn' data-toggle='modal' data-target='.single-modal' data-id='" + data.id + "' data-name='" +
        data.name + "'>Edit</button></td>"+
        "</tr>");
    }
  });
})

</script> 

	<?php include 'footer_script_tags.php'?>