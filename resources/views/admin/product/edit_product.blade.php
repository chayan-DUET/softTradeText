@extends('admin.adminmaster')
@section('content')
<!-- BEGIN CONTENT -->

            <div class="page-content-wrapper">
                <!-- BEGIN CONTENT BODY -->
                <div class="page-content">
                    <!-- BEGIN PAGE HEADER-->
                    <!-- BEGIN PAGE BAR -->
                    <div class="page-bar row">
					<div class="col-md-10">
                        <ul class="page-breadcrumb">
                            <li>
                                <a href="index.html">Home</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
						<?php 
						$blnce11 = $productById->quantity - $productById->in_progress ;
						$blnce = $productById->quantity - $productById->in_progress-$productById->done_qty ;
						$blnceKnit = $productById->quantity - $productById->in_progressknit-$productById->done_qtyknit ;
						$blnceFabric = $productById->quantity - $productById->in_progressfabric-$productById->done_qtyfabric ;
						$blnceDyeing = $productById->quantity - $productById->in_progressdyeing-$productById->done_qtydyeing ;
						$blnceCutting = $productById->quantity - $productById->in_progresscutting-$productById->done_qtycutting ;
						$blncePrint = $productById->quantity - $productById->in_progressprint-$productById->done_qtyprint ;
						$blnceEmbo = $productById->quantity - $productById->in_progressembo-$productById->done_qtyembo ;
						$blnceSewing = $productById->quantity - $productById->in_progresssewing-$productById->done_qtysewing ;
						$blnceWash = $productById->quantity - $productById->in_progresswash-$productById->done_qtywash ;
						$blncePack = $productById->quantity - $productById->in_progresspack-$productById->done_qtypack ;
						echo $blnce;
						?>
                                <a href="#">Order</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Order</span>
                            </li>
                        </ul>
						</div>
						<br>
						<div class="col-md-2">
						<a href="{{ url('product/client/view/'.$productById->id) }}" class="badge badge-primary">View as client</a>
						</div>
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
                                   <form method="POST" action="{{ url('product/update'.$productById->id) }}" name="editOrder" enctype="multipart/form-data">
									@csrf
									 <input type="hidden" value="{{$productById->id}}" class="form-control" name="productId">
                                        <div class="form-body">
                                            <div class="row">
                                            <div class="col-md-2 d-none">
												<div class="form-group form-md-line-input form-md-floating-label">
													<input type="text" id="demo" class="form-control" name="company_no" rows="3" value="{{$productById->company_no}}" readonly>
													<label for="Description">Order ID</label>
												</div>
											</div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" value="{{$productById->factory_name}}" name="factory_name" id="factory_name">
                                                         <input type="hidden" value="{{$productById->id}}" class="form-control" name="productId">
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
                                                        <input type="text" class="form-control" value="{{$productById->comp_sname}}" name="comp_sname" id="">
                                                        <label for="">Company ID</label>
                                                        <span class="help-block">Please enter Company ID</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input">
                                                       <input type="text" class="form-control" name="bday_tfd" value="{{$productById->bday_tfd}}"  id="TFD">
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
                                                        <input type="text" class="form-control " value="{{$productById->season}}" name="season" id="">
                                                        <label for="">Season</label>
                                                        <span class="help-block">Please enter season</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                       <input type="text" class="form-control" name="style" value="{{$productById->style}}" id="Style">
                                                        <label for="Style">Style</label>
                                                        <span class="help-block">Please enter style</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="fabric" value="{{$productById->fabric}}" id="Fabric">
                                                        <label for="Fabric">Fabric</label>
                                                        <span class="help-block">Please enter Fabric</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                      <input type="text" class="form-control" name="color" value="{{$productById->color}}" id="Color">
                                                        <label for="Color">Color</label>
                                                        <span class="help-block">Please enter Color</span>
                                                    </div>
                                                </div>
												
											
											    <div class="col-md-2">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="number" class="form-control" name="quantity" value="{{$productById->quantity}}" id="Quantity">
                                                        <label for="Quantity">Quantity</label>
                                                        <span class="help-block">Please enter quantity</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="form-group form-md-line-input">
                                                        <input type="text" class="form-control " name="bday_dd" value="{{$productById->bday_dd}}" id="delevery_date">
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
                                                                <textarea class="form-control" name="description" rows="3">{{$productById->description}}</textarea>
                                                                <label for="Description">Description</label>
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="remark" rows="3">{{$productById->remark}}</textarea>
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
                                                                        <option value="yarn" @if(in_array("yarn", $running_steps))selected="selected"@endif>Yarn</option>
                                                                         <option value="knit" @if(in_array("knit", $running_steps))selected="selected"@endif>Knit</option>
																	    <option value="dyeing" @if(in_array("dyeing", $running_steps))selected="selected"@endif>Dyeing</option>
																		  <option value="cutting" @if(in_array("cutting", $running_steps))selected="selected"@endif>Cutting</option>
																		  <option value="print" @if(in_array("print", $running_steps))selected="selected"@endif>Print</option>
																		  <option value="embo" @if(in_array("embo", $running_steps))selected="selected"@endif>Embo</option>
																		  <option value="sewing" @if(in_array("sewing", $running_steps))selected="selected"@endif>Sewing</option>
																		  <option value="wash" @if(in_array("wash", $running_steps))selected="selected"@endif>Wash</option>
																		    <option value="pack" @if(in_array("pack", $running_steps))selected="selected"@endif>Pack</option>
																		
																		
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
														
														<div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="update_order" rows="3">{{$productById->update_order}}</textarea>
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
                                                                   <img src="{{asset('public/productImage/'.$productById->image)}}" alt="" height="100" width="100"> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 text-left">
                                                                <div style="margin-top: 110px;">
                                                                    <span class="btn red btn-outline btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                       <input type="file" name="image" class="custom-file-input" value="{{$productById->image}}">
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
																		<input type="text" name ="will_send_date" value="{{$productById->will_send_date}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_strike" value="{{$productById->will_send_date_strike}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_size" value="{{$productById->will_send_date_size}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_pp" value="{{$productById->will_send_date_pp}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_ps" value="{{$productById->will_send_date_ps}}" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="text" name ="Sent_date" value="{{$productById->Sent_date}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_strike" value="{{$productById->Sent_date_strike}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_size" value="{{$productById->Sent_date_size}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_pp" value="{{$productById->Sent_date_pp}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_ps" value="{{$productById->Sent_date_ps}}" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="will_comment" value="{{$productById->will_comment==0?'Done':'Pending'}}" id="" class="form-control">
																		 <div class="">
																		<div class="">
																			<select required class="form-control edited" id="will_comment" name="will_comment">
																				<option value="" selected>Approval Status</option>
																				<option value="0">Done</option>
																				<option value="1">Panding</option>
																				<option value="2">Running</option>
																			</select>
																		</div>
																	</div>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_strike" value="{{$productById->will_comment_strike==0?'Done':'Pending'}}" id="" class="form-control">
																		 <div class="">
																		<div class="">
																			<select required class="form-control edited" id="will_comment_strike" name="will_comment_strike">
																				<option value="" selected>Approval Status</option>
																				<option value="0">Done</option>
																				<option value="1">Panding</option>
																				<option value="2">Running</option>
																			</select>
																		</div>
																	</div>
																		
																	</td>
																	<td>
																		<input type="text" name ="will_comment_size" value="{{$productById->will_comment_size==0?'Done':'Pending'}}" id="" class="form-control">
																		 <div class="">
																		<div class="">
																			<select required class="form-control edited" id="will_comment_size" name="will_comment_size">
																				<option value="" selected>Approval Status</option>
																				<option value="0">Done</option>
																				<option value="1">Panding</option>
																				<option value="2">Running</option>
																			</select>
																		</div>
																	</div>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_pp" value="{{$productById->will_comment_pp==0?'Done':'Pending'}}" id="" class="form-control">
																		 <div class="">
																		<div class="">
																			<select required class="form-control edited" id="will_comment_pp" name="will_comment_pp">
																				<option value="" selected>Approval Status</option>
																				<option value="0">Done</option>
																				<option value="1">Panding</option>
																				<option value="2">Running</option>
																			</select>
																		</div>
																	</div>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_ps" value="{{$productById->will_comment_ps==0?'Done':'Pending'}}" id="" class="form-control">
																		 <div class="">
																		<div class="">
																			<select required class="form-control edited" id="will_comment_ps" name="will_comment_ps">
																				<option value="" selected>Approval Status</option>
																				<option value="0">Done</option>
																				<option value="1">Panding</option>
																				<option value="2">Running</option>
																			</select>
																		</div>
																	</div>
																	</td>
																</tr>
																<tr>
																	<th scope="row">Revised Send</th>
																	<td>
																		<input type="text" name ="revised_date" value="{{$productById->revised_date}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_date_strike" value="{{$productById->revised_date_strike}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_date_size" value="{{$productById->revised_date_size}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_date_pp" value="{{$productById->revised_date_pp}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_date_ps" value="{{$productById->revised_date_ps}}" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="text" name ="revised_sent_date" value="{{$productById->revised_sent_date}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_strike" value="{{$productById->revised_sent_date_strike}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_size" value="{{$productById->revised_sent_date_size}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_pp" value="{{$productById->revised_sent_date_pp}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_ps" value="{{$productById->revised_sent_date_ps}}" id="" class="form-control">
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="revised_comment" value="{{$productById->revised_comment==0?'Done':'Pending'}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_strike" value="{{$productById->revised_comment_strike==0?'Done':'Pending'}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_size" value="{{$productById->revised_comment_size==0?'Done':'Pending'}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_pp" value="{{$productById->revised_comment_pp==0?'Done':'Pending'}}" id="" class="form-control">
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_ps" value="{{$productById->revised_comment_ps==0?'Done':'Pending'}}" id="" class="form-control">
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
												<?php if( in_array('yarn', $steps)){?>		
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
                                                                            <input type="number" class="form-control" placeholder="Enter Qty" name="in_progress" value="{{$productById->in_progress}}" id="Quantity" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="Enter Qty" name="done_qty"  value="{{$productById->done_qty}}"  aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="number" class="form-control" placeholder="Enter Qty" name="balance_qty"  value="{{$blnce}}"  aria-describedby="in_progress_addon">
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
													<?php }?>
												<?php   if( in_array('knit', $steps)){?>
                                                <div class="col-md-4">
													
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="knit" id="Knit" class="md-check">
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progressknit" value="{{$productById->in_progressknit}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtyknit" value="{{$productById->done_qtyknit}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtyknit" value="{{$blnceKnit }}" aria-describedby="in_progress_addon">
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
												<?php }?>
													<?php   if( in_array('fbric', $steps)){?>
												 <div class="col-md-4">
												
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading">
                                                            <div class="md-checkbox">
                                                                <input type="checkbox" name="steps[]" value="knit" id="Knit" class="md-check">
                                                                <label for="Knit">
                                                                    <span></span>
                                                                    <span class="check"></span>
                                                                    <span class="box"></span> Fabric </label>
                                                            </div>
                                                        </div>
                                                        <div class="panel-body">
                                                            <div class="row">
                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">In progress</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progressfabric" value="{{$productById->in_progressfabric}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtyfabric" value="{{$productById->done_qtyfabric}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtyfabric" value="{{$blnceFabric }}" aria-describedby="in_progress_addon">
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
													<?php }?>
													<?php   if( in_array('dying', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progressdyeing" value="{{$productById->in_progressdyeing}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtydyeing" value="{{$productById->done_qtydyeing}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">KG</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtydyeing" value="{{$blnceDyeing}}" aria-describedby="in_progress_addon">
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
													<?php }?>
													<?php   if( in_array('cutting', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progresscutting" value="{{$productById->in_progresscutting}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtycutting" value="{{$productById->done_qtycutting}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtycutting" value="{{$blnceCutting}}" aria-describedby="in_progress_addon">
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
												<?php }?>
												<?php   if( in_array('print', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progressprint" value="{{$productById->in_progressprint}}"  aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtyprint" value="{{$productById->done_qtyprint}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtyprint" value="{{$blncePrint}}" aria-describedby="in_progress_addon">
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
													<?php }?>
													<?php   if( in_array('embo', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progressembo" value="{{$productById->in_progressembo}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtyembo" value="{{$productById->done_qtyembo}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtyembo" value="{{$blnceEmbo}}" aria-describedby="in_progress_addon">
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
													<?php }?>
													<?php   if( in_array('sewing', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progresssewing" value="{{$productById->in_progresssewing}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtysewing" value="{{$productById->done_qtysewing}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtysewing" value="{{$blnceSewing}}" aria-describedby="in_progress_addon">
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
												<?php }?>
												<?php   if( in_array('wash', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progresswash" value="{{$productById->in_progresswash}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtywash" value="{{$productById->done_qtywash}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtywash" value="{{$blnceWash}}" aria-describedby="in_progress_addon">
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
													<?php }?>
													<?php   if( in_array('pack', $steps)){?>
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
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="in_progresspack" value="{{$productById->in_progresspack}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Done</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="done_qtypack" value="{{$productById->done_qtypack}}" aria-describedby="in_progress_addon">
                                                                            <span class="input-group-addon" id="in_progress_addon">pc</span>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-4">
                                                                    <div class="form-group">
                                                                        <label for="">Balance</label>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="Enter Qty" name="balance_qtypack" value="{{$blncePack}}" aria-describedby="in_progress_addon">
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
												<?php }?>
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

<script>
			document.forms['editOrder'].elements['category'].value={{$productById->category}}
			document.forms['editOrder'].elements['company_name'].value={{$productById->user_id}}
			document.forms['editOrder'].elements['running_steps'].value={{$productById->running_steps}}
			document.forms['editOrder'].elements['will_comment'].value={{$productById->will_comment}}
			</script>
			@endsection