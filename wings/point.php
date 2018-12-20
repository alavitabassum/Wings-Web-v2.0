		<?php require_once 'db.php';?>

		<?php include 'header_general.php';?>
		<?php include 'sidebar.php'?>
		<?php include 'top_nav.php';?>
<div class="right_col" role="main">
	<div class="">


		<div class="clearfix"></div>


		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12" style="margin-bottom: 1em;margin-top: 5em;">
				<span class="label label-info" data-toggle="modal" data-target=".single-modal">Create New Point</span>
				<!--edit/delete/reset status/ duplicate-->
			</div>
		</div>

		<div class="clearfix"></div>
		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>List of Points</h2>

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
										<th class="column-title"> Point Code</th>
										<th class="column-title"> Point Name</th>
										<th class="column-title">Edit</th>
										<th class="column-title no-link last">
											<span class="nobr">Delete</span>
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
													<a role="menuitem" tabindex="-1" data-toggle="modal" href="#alertmodal">Delete Selected</a>
												</li>
											</ul>
										</li>


									</th>
								</tr>


							</thead>


							<tbody class="tracker_tbody">
								<tr class="even pointer">
									<td class="a-center ">
										<input type="checkbox" class="flat" name="table_records">
									</td>
									<td class=" ">A0</td>
									<td class=" ">Dhaka Central</td>
									<td class="a-right a-right ">
										<button type="button" class="btn btn-demo edit-btn" data-toggle="modal" data-target=".single-modal">
											Edit
										</button>
									</td>
									<td class="a-right a-right ">
										<button type="button" class="btn btn-demo dlt-btn" data-toggle="modal" data-target=".alert-modal">
											Delete
										</button>
									</td>
								</tr>
							</tbody>
						</table>
						<!-- Alert modal-->
						<div class="modal fade bs-example-modal-sm alert-modal" tabindex="-1" role="dialog" aria-hidden="true" id="alertmodal">
							<div class="modal-dialog modal-sm">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel2">Alert!</h4>
									</div>
									<div class="modal-body">
										<p>Are you sure you want to delete the selected records?</p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" data-dismiss="modal" onclick="dltInfo();">Yes</button>
										<button type="button" class="btn btn-default" data-dismiss="modal" onclick="cnclInfo();">Cancel</button>
									</div>

								</div>
							</div>
						</div>
						<!--/Alert modal-->
						<!--Modal for Order Edit-->

						<div class="modal fade bs-example-modal-lg single-modal" tabindex="-1" role="dialog" aria-hidden="true">
							<div class="modal-dialog modal-lg">
								<div class="modal-content">

									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">
											<span aria-hidden="true">×</span>
										</button>
										<h4 class="modal-title" id="myModalLabel">Point Form</h4>
									</div>
									<div class="modal-body">
										<form class="form-horizontal form-label-left">
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Point Code</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Point Name</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Point Address</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<input type="text" class="form-control" placeholder="">
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">District</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<select class="form-control" name="districtId">
														<option>Select District</option>
														<option value="1">Dhaka</option>
														<option value="2">Lakshmipur</option>
														<option value="3">Lalmonirhat</option>
														<option value="4">Madaripur</option>
														<option value="5">Magura</option>
														<option value="6">Manikganj</option>
														<option value="7">Meherpur</option>
														<option value="8">Moulvibazar</option>
														<option value="9">Munshiganj</option>
														<option value="10">Mymensingh</option>
														<option value="11">Naogaon</option>
														<option value="12">Narail</option>
														<option value="13">Narayanganj</option>
														<option value="14">Narsingdi</option>
														<option value="15">Natore</option>
														<option value="16">Nawabganj</option>
														<option value="17">Netrakona</option>
														<option value="18">Nilphamari</option>
														<option value="19">Noakhali</option>
														<option value="20">Pabna</option>
														<option value="21">Panchagarh</option>
														<option value="22">Parbattya Chattagram</option>
														<option value="23">Patuakhali</option>
														<option value="24">Pirojpur</option>
														<option value="25">Rajbari</option>
														<option value="26">Rajshahi</option>
														<option value="27">Rangpur</option>
														<option value="28">Satkhira</option>
														<option value="29">Shariatpur</option>
														<option value="30">Sherpur</option>
														<option value="31">Sirajganj</option>
														<option value="32">Sunamganj</option>
														<option value="33">Sylhet</option>
														<option value="34">Tangail</option>
														<option value="35">Thakurgaon</option>
														<option value="47">Bagerhat</option>
														<option value="48">Bandarban</option>
														<option value="49">Barguna</option>
														<option value="50">Barisal</option>
														<option value="51">Bhola</option>
														<option value="52">Bogra</option>
														<option value="53">Brahmanbaria</option>
														<option value="54">Chandpur</option>
														<option value="55">Chittagong</option>
														<option value="56">Chuadanga</option>
														<option value="57">Comilla</option>
														<option value="58">Coxs Bazar</option>
														<option value="59">Dinajpur</option>
														<option value="60">Faridpur</option>
														<option value="61">Feni</option>
														<option value="62">Gaibandha</option>
														<option value="63">Gazipur</option>
														<option value="64">Gopalganj</option>
														<option value="65">Habiganj</option>
														<option value="66">Jaipurhat</option>
														<option value="67">Jamalpur</option>
														<option value="68">Jessore</option>
														<option value="69">Jhalakati</option>
														<option value="70">Jhenaidah</option>
														<option value="71">Khagrachari</option>
														<option value="72">Khulna</option>
														<option value="73">Kishoreganj</option>
														<option value="74">Kurigram</option>
														<option value="75">Kushtia</option>
														<option value="76">Savar</option>
														<option value="78">Keraniganj</option>
														<option value="79">Rangamati</option>
														<option value="80">Chapainawabganj</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Thana</label>
												<div class="col-md-9 col-sm-9 col-xs-12">
													<select class="form-control">
														<option>District Specific Thana</option>
													</select>
												</div>
											</div>
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12">Check Thanas for Point Coverage
													<br>
													<small class="text-navy" style="color: tomato;">Unchecking thana will remove that thana from point coverage</small>
												</label>

												<div class="col-md-9 col-sm-9 col-xs-12">
													<div class="checkbox">
														<label>
															<input type="checkbox" class="flat"> Adabor
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" class="flat"> Banani
														</label>
													</div>
													<div class="checkbox">
														<label>
															<input type="checkbox" class="flat"> Badda
														</label>
													</div>
												</div>
											</div>
											<div>
												<div class="divider-dashed"></div>
												<h5>Point Office Details</h5>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Point Landlord Name</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Landlord Contact</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Monthly Rent Adjusted</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Advance Paid (TK)</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Monthly Rent</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Monthly Service Charge</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-3">Contract Date</label>
													<div class="col-md-9 col-sm-9 col-xs-9">
														<input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-3">Valid Till</label>
													<div class="col-md-9 col-sm-9 col-xs-9">
														<input type="text" class="form-control" data-inputmask="'mask': '99/99/9999'">
													</div>
												</div>
											</div>
											<div>
												<div class="divider-dashed"></div>
												<h5>Route Information</h5>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Route Code</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<input type="text" class="form-control" placeholder="">
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Central Point</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select class="form-control">
															<option value="Y">Yes</option>
															<option value="N">No</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Hub</label>
													<div class="col-md-9 col-sm-9 col-xs-12">
														<select class="form-control">
															<option value="Y">Yes</option>
															<option value="N">No</option>
														</select>
													</div>
												</div>
												<div class="form-group">
													<label class="control-label col-md-3 col-sm-3 col-xs-12">Connected Points
														<br>
														<small class="text-navy" style="color: tomato;">Check ONLY the Points you want to connect.</small>
													</label>

													<div class="col-md-9 col-sm-9 col-xs-12">
														<div class="checkbox">
															<label>
																<input type="checkbox" class="flat"> Point A
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="flat"> Point B
															</label>
														</div>
														<div class="checkbox">
															<label>
																<input type="checkbox" class="flat"> Point C
															</label>
														</div>
													</div>
												</div>
											</div>
										</form>

									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="button" class="btn btn-primary btnSave">Save changes</button>
									</div>

								</div>
							</div>
						</div>
						<!--/ Modal for Order Edit-->
					</div>

				</div>
				<!--Pop Up Msg-->

				<div class="x_content bs-example-popovers">

					<div class="alert alert-success alert-dismissible fade in" role="alert" id="dltMsg">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>Deleted selected records.</div>

						<div class="alert alert-info alert-dismissible fade in" role="alert" id="cnclMsg">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">×</span>
							</button>You have made no changes.</div>
						</div>

						<!--/ Pop Up Msg-->
					</div>
				</div>
			</div>
		</div>
	</div>

      <!-- Popup msg script-->
    <script>
        function dltInfo() {
            var x = document.getElementById("dltMsg");
            var y = document.getElementById("cnclMsg");
            x.style.display = "block";
            y.style.display = "none";
        }
        function cnclInfo() {
            var x = document.getElementById("dltMsg");
            var y = document.getElementById("cnclMsg");
            x.style.display = "none";
            y.style.display = "block";
        }
    </script>


	<?php include 'footer_script_tags.php'?>
