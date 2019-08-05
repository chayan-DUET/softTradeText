@extends('admin.adminmaster')
@section('content')
<!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <a href="#">Order</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Order</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Edit Order</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Order Edit</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="{{ url('add-product') }}" enctype="multipart/form-data">
									@csrf
                                        <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-2 d-none">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input type="text" id="demo" class="form-control" name="company_no" rows="3" value="company_no" readonly>
													<label for="Description">Order ID</label>
												</div>
											</div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="factory_name" id="factory_name">
                                                        <label for="factory_name">Factory Name</label>
                                                        <span class="help-block">Please enter factory name</span>
                                                    </div>
                                                </div>
												<div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <select class="form-control" name="company_name">
                                                            <option>Select Company Name</option>
                                                            @foreach($users as $user)
                                                            <option value="{{$user->id}}">{{$user->company_name}}</option>
                                                        @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="comp_sname" id="">
                                                        <label for="">Company ID</label>
                                                        <span class="help-block">Please enter Company ID</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="date" class="form-control " name="bday_tfd" id="TFD">
                                                        <label for="TFD">TFD</label>
                                                        <span class="help-block">Please enter TFD</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <select required class="form-control edited" id="category" name="category">
                                                            <option value="" selected>Select category</option>
                                                            <option value="0">Boys</option>
                                                            <option value="1">Girls</option>
                                                            <option value="2">Babys</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control " name="season" id="">
                                                        <label for="">Season</label>
                                                        <span class="help-block">Please enter season</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="style" id="Style">
                                                        <label for="Style">Style</label>
                                                        <span class="help-block">Please enter style</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="fabric" id="Fabric">
                                                        <label for="Fabric">Fabric</label>
                                                        <span class="help-block">Please enter Fabric</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="color" id="Color">
                                                        <label for="Color">Color</label>
                                                        <span class="help-block">Please enter Color</span>
                                                    </div>
                                                </div>
												
											
											    <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="number" class="form-control" name="quantity" id="Quantity">
                                                        <label for="Quantity">Quantity</label>
                                                        <span class="help-block">Please enter quantity</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="date" class="form-control " name="bday_dd" id="delevery_date">
                                                        <label for="delevery_date">Delivery Date</label>
                                                        <span class="help-block">Please enter delivery date</span>
                                                    </div>
                                                </div>
														
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
														<div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                                                <label for="Description">Description</label>
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="remark" rows="3"></textarea>
                                                                <label for="Remark">Remark</label>
                                                            </div>
                                                        </div>
                                                        <!-- <div class="col-md-12">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <select required class="form-control edited" id="category" name="running_steps">
                                                                    <option value="" selected>Running Steps</option>
                                                                    <option value="0">Yarn</option>
                                                                    <option value="1">Knit</option>
                                                                    <option value="2">Dyeing</option>
                                                                    <option value="3">Cutting</option>
                                                                    <option value="4">Print</option>
                                                                    <option value="5">Embo</option>
                                                                    <option value="6">Sewing</option>
                                                                    <option value="7">Wash</option>
                                                                    <option value="8">Pack</option>
                                                                </select>
                                                            </div>
                                                        </div> -->
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label class="control-label">Running Steps</label>
                                                                <div class="">
                                                                    <select class="selectpicker form-control"  multiple="multiple" title="Select Running Steps" name="running_steps[]">
                                                                        <option value="yarn">Yarn</option>
                                                                        <option value="knit">Knit</option>
                                                                        <option value="dyeing">Dyeing</option>
                                                                        <option value="cutting">Cutting</option>
                                                                        <option value="print">Print</option>
                                                                        <option value="embo">Embo</option>
                                                                        <option value="sewing">Sewing</option>
                                                                        <option value="wash">Wash</option>
                                                                        <option value="pack">Pack</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="last_update" rows="3"></textarea>
                                                                <label for="last_update">Last Update</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <p for="Image">Image</p>
                                                    <div class="fileinput fileinput-new w-100" data-provides="fileinput">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                                    <img src="{{asset('public/admin/')}}/assets/layouts/layout/img/download.png"/> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 text-left">
                                                                <div style="margin-top: 110px;">
                                                                    <span class="btn red btn-outline btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="image" accept="image/*"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="font-green mt-20 mb-20"><b>Approval Status</b></h4>  
                                                </div>
                                                <div class="col-md-12">
													<div class="table-responsive">
														<table class="table table-bordered table-hover table-striped">
															<thead>
																<tr>
																	<th scope="col"></th>
																	<th scope="col">L/Dips</th>
																	<th scope="col">Strike Off</th>
																	<th scope="col">Size Set</th>
																	<th scope="col">PP Sample</th>
																	<th scope="col">PS Sample</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">Will be send</th>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																</tr>
																<tr>
																	<th scope="row">Revised Send</th>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="date" name ="" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="" id="" class="form-control">
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
                                            </div>
                                            

                                            <hr>

                                            <br><br>
											
                                            <div class="row steps_update">
                                                <div class="col-md-12">
                                                    <h4 class="font-green mt-20 mb-20"><b>Update Steps</b></h4>  
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="yarn" id="Yarn" class="md-check">
                                                                <label for="Yarn">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Yarn </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Knit" id="Knit" class="md-check">
                                                                <label for="Knit">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Knit </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Dyeing" id="Dyeing" class="md-check">
                                                                <label for="Dyeing">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Dyeing </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Cutting" id="Cutting" class="md-check">
                                                                <label for="Cutting">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Cutting </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Print" id="Print" class="md-check">
                                                                <label for="Print">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Print </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Embo" id="Embo" class="md-check">
                                                                <label for="Embo">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Embo </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Sewing" id="Sewing" class="md-check">
                                                                <label for="Sewing">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Sewing </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Wash" id="Wash" class="md-check">
                                                                <label for="Wash">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Wash </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">

                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="Pack" id="Pack" class="md-check">
                                                                <label for="Pack">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Pack </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group">
                                                                        <label for="">Description</label>
                                                                        <textarea class="form-control" name="" id="" cols="30" rows="4"></textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="form-actions noborder text-right">
                                            <button type="submit" class="btn blue">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END SAMPLE FORM PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->

			@endsection