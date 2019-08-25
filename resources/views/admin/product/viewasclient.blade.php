<?php
// Start the session
session_start();
?>
@extends('admin.adminmaster') 
@section('content')
 $steps=explode(",", $product->steps);
  
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
                                <a href="#">Client</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>View as Client</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> View as Client</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
					<div class="col-md-2">
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>TDF</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Factory</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Company</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Cate.</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Qty</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>DD</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Color</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Style</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Last Update</h5></div>
					</div>
					<div class="col-md-4">
					<div><h5>{{$products->bday_tfd}}</h5></div>
					<div><h5>{{$products->factory_name}}</h5></div>
					<div><h5>{{$products->company_name}}</h5></div>
					<div><h5>{{$products->category==0?'boys':'girl'}}</h5></div>
					<div><h5>{{$products->quantity}}</h5></div>
					<div><h5>{{$products->bday_dd}}</h5></div>
					<div><h5>{{$products->color}}</h5></div>
					<div><h5>{{$products->style}}</h5></div>
					<div><h5>{{$products->update_order}}</h5></div>
					
					</div>
					<div class="col-md-2">
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Image</h5></div>
					<br>
					<br>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Description</h5></div>
					<div style= " text-shadow: 2px 2px 8px #FF0000";><h5>Remark</h5></div>
					</div>
					<div class="col-md-4">
					<div><img src="{{asset('public/productImage/'.$products->image)}}" style="height:80px;width:80px;"></div>
					<div><h5>{{$products->description}}</h5></div>
					<div><h5>{{$products->remark}}</h5></div>
					
					</div>
                        
                </div>
				
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
																		<input type="text" name ="will_send_date" value="{{$products->will_send_date}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_strike" value="{{$products->will_send_date_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_size" value="{{$products->will_send_date_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_pp" value="{{$products->will_send_date_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_send_date_ps" value="{{$products->will_send_date_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="text" name ="Sent_date" value="{{$products->Sent_date}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_strike" value="{{$products->Sent_date_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_size" value="{{$products->Sent_date_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_pp" value="{{$products->Sent_date_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="Sent_date_ps" value="{{$products->Sent_date_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="will_comment" value="{{$products->will_comment}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_strike" value="{{$products->will_comment_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_size" value="{{$products->will_comment_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_pp" value="{{$products->will_comment_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="will_comment_ps" value="{{$products->will_comment_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
																<tr>
																	<th scope="row">Revised Send</th>
																	<td>
																		<input type="text" name ="revised_date" value="{{$products->revised_date}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_date_strike" value="{{$products->revised_date_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_date_size" value="{{$products->revised_date_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_date_pp" value="{{$products->revised_date_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_date_ps" value="{{$products->revised_date_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Sent on Date</th>
																	<td>
																		<input type="text" name ="revised_sent_date" value="{{$products->revised_sent_date}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_strike" value="{{$products->revised_sent_date_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_size" value="{{$products->revised_sent_date_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_pp" value="{{$products->revised_sent_date_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_sent_date_ps" value="{{$products->revised_sent_date_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
																
																<tr>
																	<th scope="row">Comments</th>
																	<td>
																		<input type="text" name ="revised_comment" value="{{$products->revised_comment}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_strike" value="{{$products->revised_comment_strike}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_size" value="{{$products->revised_comment_size}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_pp" value="{{$products->revised_comment_pp}}" id="" class="form-control" readonly>
																	</td>
																	<td>
																		<input type="text" name ="revised_comment_ps" value="{{$products->revised_comment_ps}}" id="" class="form-control" readonly>
																	</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
												<h4 class="font-green mt-20 mb-20"><b>steps Status</b></h4>  
												 <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th> Sl. </th>
                                    <th> Yarn </th>
                                    <th> Knit </th>
                                    <th> Dying </th>
                                    <th> Cutting </th>
                                    <th> Print </th>
                                    <th> Embo </th>
                                    <th> Sewing </th>
                                </tr>
                            </thead>
							
                            <tbody>
                                <tr>  
								 <?php
								 if(isset($_GET["steps"])){
									$st=$_GET["steps"];
									$s=count($st);
									for($i=0;$i<$s;$i++){
										if($st[$i]==0){
											echo "higgggg";
										}else echo"llllll";
									}
									
								 } ?>
                                    <td>01</td>   
                                    <td style="color:red;"> @if(in_array("yarn", explode(",", $products->steps)))
								<?php echo "Done"?>
							
							@endif</td>   
                                   <td style="color:red;"> @if(in_array("knit", explode(",", $products->steps)))
								@php echo "Done" @endphp
							    
								@elseif (! in_array("knit", explode(",", $products->steps)))
								@php echo "pending" @endphp
									
							
							
							@endif
							</td>   
                                    <td style="color:red;"> @if(in_array("dying", explode(",", $products->steps)))
								@php echo "Done" @endphp
							    
								@elseif (! in_array("knit", explode(",", $products->steps)))
								@php echo "pending" @endphp
							
							@endif</td>   
                                    <td>Running</td>   
                                    <td>Pending</td>   
                                    <td>Pending</td>   
                                    <td>Pending</td>  
                                </tr>
                            </tbody>
                        </table>
                                            </div>
               
            </div>
			/////////
			
			  
			
			
            <!-- /.modal-content -->
        <!-- </div>  -->
        <!-- /.modal-dialog -->
        <!-- /.Step Large modal END -->
		
		<script>

$('.Steps').click(function(event) {
        event.preventDefault();

        var url = $(this).attr('#Steps');

        $("#Steps").modal('show');

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
        })
        .done(function(response) {
            $("#modal-global").find('.modal-body').html(response);
        });

    });
</script>
				@endsection