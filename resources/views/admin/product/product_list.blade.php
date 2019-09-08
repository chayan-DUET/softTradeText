<?php
// Start the session
session_start();
?>
@extends('admin.adminmaster') 
@section('content')
 $steps=explode(",", $product->steps);
  
   <style>
        th,
        td {
            padding: 5px !important;
            font-size: 11px !important;
            text-align: center !important;
            vertical-align: middle !important;
        }

        th:not(:first-child) {
            min-width: 60px;
        }

        .table .btn {
            font-size: 11px;
            padding: 3px;
        }
        .client-info{
            text-align: right;
        }
        .client-logo{
            max-width: 100px;
            max-height: 100px;
        }
    </style>
    
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
                                <a href="#">Product</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Product List</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Product List</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Product List</span>
                                    </div>
                                    <div class="tools"><?php
			echo "Today is " . date("Y/m/d") . "<br>";

			?>

												<?php 
							 $shipping_id=Session::get('user_id');
							 
							// print_r($shipping_id);
							 
							 ?>							
			 </div>
											</div>
								
								<hr/>
                               <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> Sl. </th>
												<th>Order Id</th>
                                                <th> Factory </th>
												<th> Company </th>
                                                <th> TDF </th>
                                                <th> Cate. </th>
                                                <th> Style </th>
                                                <th> Fabric </th>
                                                <th> Color </th>
                                                <th> Qty </th>
                                                <th> Image </th>
                                                <th> Decs. </th>
                                                <th> Order Step</th>
                                                <th> Running Step</th>
                                                <th> DD </th>
                                                <th> Remark </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>  
                                                <td>01</td> 
											     <td>888</td>  
                                                <td>ABC Ltd.</td> 
                                                 <td>ABC com.</td>  
                                                <td>01.06.2019</td>   
                                                <td>Women</td>   
                                                <td>Charlie</td>   
                                                <td>100% Cotton S/J 180 GSM</td>   
                                                <td>650 Pink</td>   
                                                <td>12000</td>   
                                                <td>
                                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61hujUtpERL._UX385_.jpg" height="60px" width="60px" alt="">
                                                </td>   
                                                <td>Lorem ipsum dolor<br> <small><a href="javascript:;">Details</a></small></td>   
                                                <td>Yarn, Knit, Dying <br> <small><a href="javascript:;">Step Details</a></small></td>   
                                                <td>Cutting</td>   
                                                <td>30.07.2019</td>   
                                                <td>Lorem ipsum dolor</td> 
                                                <td>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>   
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-archive"></i>   
                                                    </a>
													<a href="#" onclick="return confirm('are u sure delete this item')" class="btn btn-success">
																	<span class="	glyphicon glyphicon-eye-open"></span>
																</a>
                                                </td> 
                                            </tr>  
                                            <tr>  
                                                <td>02</td> 
												  <td>884</td> 
                                                <td>Ananta Ltd.</td>
											     <td>ABC com.</td>
                                                <td>01.06.2019</td>   
                                                <td>Women</td>   
                                                <td>Charlie</td>   
                                                <td>100% Cotton S/J 180 GSM</td>   
                                                <td>650 Pink</td>   
                                                <td>12000</td>   
                                                <td>
                                                    <img src="https://www.unived.in/wp-content/uploads/2018/02/unived-athlete-front-mens-t-shirt-600x600.jpg" height="60px" width="60px" alt="">
                                                </td>   
                                                <td>Lorem ipsum dolor<br> <small><a href="javascript:;">Details</a></small></td>   
                                                <td>Yarn, Knit, Dying <br> <small><a href="javascript:;">Step Details</a></small></td>   
                                                <td>Cutting</td>   
                                                <td>30.07.2019</td>   
                                                <td>Lorem ipsum dolor</td> 
                                                <td>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>   
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-archive"></i>   
                                                    </a>
													<a href="#" onclick="return confirm('are u sure delete this item')" class="btn btn-success">
																	<span class="	glyphicon glyphicon-eye-open"></span>
																</a>
                                                </td> 
                                            </tr>  
											 <?php $number = 0; ?>
											 @foreach($products as $product)
											 <?php $number++ ?>  
											 		  <?php
													
												  $datetime1 = strtotime(date("Y/m/d"));
						$datetime2 = strtotime($product->bday_dd);

							$secs =$datetime2-$datetime1;// == <seconds between the two times>
							$days = $secs / 86400;
							//echo $days;
							
												  ?>
												<!--  @if($days<=100)
													  <b style="color:green"> May 26, 2019 10:38:22 GMT</b>
												  @else
                                    <b style="color:red"> May 26, 2019 10:38:22 GMT</b>
                                      @endif -->
												<tr     @if($days <=7 && $days >=1)  style="background-color: #ffd0d0;";
												} @elseif($days <=15 && $days >=8)   style="background-color: #e4f8ff"; 
												  @elseif($days <=30 && $days >=16)  style="background-color: #e2ffef;"; 
								
												   @else  style="background-color: #fff;";
												   @endif
												     
								 
											>
												   <td>{{$number}} </td>
												   <td>{{$product->company_no}}</td>
												   <td>{{$product->factory_name}}</td>
												   <td>{{$product->company_name}}</td>
												  <td>{{$product->bday_tfd}} </td>
												  <td>{{$product->category==0?'boys':'girl'}}</td>
												  <td>{{$product->style}}</td>
												  
												 <td>{{$product->fabric}}</td>
												 <td>{{$product->color}}</td>
												   <td>{{$product->quantity}}</td>
												  <td><img src="{{asset('/productImage/'.$product->image)}}" style="height:40px;width:40px;"></td>
												  
												  <td>{{$product->description}}<br><a data-toggle="modal" data-target="#Description<?php echo $product->id; ?>"   href="#Description">Details</a></td>
												  <td>{{$product->steps}}<br> <small><a data-toggle="modal" data-target="#Steps<?php echo $product->id ?>" href="#Steps">Step Details</a></small></td>
												 
												   
													
													 <td>{{$product->running_steps}}</td>
													
												  <td>
												  <?php
												  $datetime1 = strtotime(date("Y/m/d"));
						$datetime2 = strtotime($product->bday_dd);

							$secs =$datetime1-$datetime2;// == <seconds between the two times>
							$_SESSION['days'] = $secs / 86400;
							//echo $days;
												  ?>
												  @if($days<=6)
													  <b style="color:black"> {{$product->bday_dd}}</b>
												  @elseif($days<=15)
													  <b style="color:black"> {{$product->bday_dd}}</b>
												  @elseif($days<=30)
													  <b style="color:black"> {{$product->bday_dd}}</b>
												  @else
                                    <b style="color:orange">{{$product->bday_dd}}</b>
                                      @endif
								 
												  </td>
												   <td>{{$product->remark}}<br><a data-toggle="modal" data-target="#Remark<?php echo $product->id; ?>"  href="#Remark">Details</a></td>
												  <td>
															<a href="{{url('product/edit/'.$product->id)}}" class="btn btn-success">
																	<span class="glyphicon glyphicon-edit"></span>
																</a>
															<a href="{{url('product/delete/'.$product->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
																	<span class="glyphicon glyphicon-trash"></span>
																</a>
																<a href="{{url('product/client/view/'.$product->id)}}" class="btn btn-success">
																	<span class="	glyphicon glyphicon-eye-open"></span>
																</a>

															</td>
												</tr>
												<div class="modal fade bs-modal-lg" id="Description<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
													<div class="modal-dialog modal-lg">
													<div class="modal-content">
													<div class="modal-header">
													<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
													<h4 class="modal-title">Description </h4>
													</div>
													<div class="modal-body">
												
													<p>{{$product->description}}<p/>
													
													</div>
													</div>
													</div>
													</div>
			
											<!-- -->
										 <div class="modal fade bs-modal-lg" id="Remark<?php echo $product->id; ?>" tabindex="-1" role="dialog" aria-hidden="true">
											<div class="modal-dialog modal-lg">
											<div class="modal-content">
											<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
											<h4 class="modal-title">Remark </h4>
											</div>
											<div class="modal-body">
										
											<p>{{$product->remark}}<p/>
											
											</div>
											</div>
											</div>
											</div>
											
											
			
											   @endforeach
                                        </tbody>
                                    </table>
                                    
                                    <h3>New design start from here</h3>
                                    <div class="row">
                                        <div class="col-md-offset-8 col-md-4">
                                            <div class="client-info">
                                                <img class="client-logo" src="http://www.damiphotography.com/wp-content/uploads/2014/10/dami-logo-trans-125.png" alt="">
                                                <p>ABC Trading international</p>
                                            </div>
                                        </div> 
                                    </div>
                            
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th scope="col" rowspan="2">
                                                        <div class="form-check">
                                                            <input style="" class="form-check-input"
                                                                type="checkbox" value="" id="defaultCheck1">
                                                        </div>
                                                    </th>
                                                    <th scope="col" rowspan="2">Sl.</th>
                                                    <th scope="col" rowspan="2"> Image </th>
                                                    <th scope="col" rowspan="2">Order Id</th>
                                                    <th colspan="8" class="text-center">Order Status</th>
                                                    <th colspan="5" class="text-center">Approval Status</th>
                                                    <th colspan="9" class="text-center">Steps Status</th>
                                                    
                                                    <th scope="col" rowspan="2" style="min-width: 100px;"> Action </th>
                                                </tr>
                                                <tr>
                                                    <th scope="col"> Company</th>
                                                    <th scope="col"> TDF</th>
                                                    <th scope="col"> DD </th>
                                                    <th scope="col"> Cate.</th>
                                                    <th scope="col"> Style</th>
                                                    <th scope="col"> Fabric</th>
                                                    <th scope="col"> Color</th>
                                                    <th scope="col"> Qty</th>
                            
                                                    <th scope="col"> L/Dips</th>
                                                    <th scope="col"> Strike Off</th>
                                                    <th scope="col"> Size</th>
                                                    <th scope="col"> PPS</th>
                                                    <th scope="col"> PSS</th>
                            
                                                    <th scope="col"> Yarn</th>
                                                    <th scope="col"> Knit</th>
                                                    <th scope="col"> Dying</th>
                                                    <th scope="col"> Cutting</th>
                                                    <th scope="col"> Print</th>
                                                    <th scope="col"> Embo</th>
                                                    <th scope="col"> Sewing</th>
                                                    <th scope="col"> Wash </th>
                                                    <th scope="col"> pack </th>
                                                </tr>
                                            </thead>
                                            <tbody>
											 @foreach($products as $product)
                                                <tr>
                                                    <td>
                                                        <div class="form-check">
                                                            <input style="" class="form-check-input"
                                                                type="checkbox" value="" id="defaultCheck1">
                                                        </div>
                                                    </td>
                                                    <td scope="row">01</td>
                                                    <td><img src="https://softtradebd.com/oms/softTrade/public/productImage/1563897406.JPG"
                                                        style="height:30px;width:30px;"></td>
                                                        <td>{{$product->company_no}}</td>
                                                    <td>{{$product->company_name}}</td>
                                                    <td>12/12/2019</td>
                                                    <td>12/12/2019</td>
                                                    <td>{{$product->category==0?'boys':'girl'}}</td>
                                                    <td>{{$product->style}}</td>
                                                    <td>{{$product->fabric}}</td>
                                                    <td>{{$product->color}}</td>
                                                    <td>{{$product->quantity}}</td>
                            
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                            
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}} (500 Done)</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    <td>{{$product->will_comment==0?'Done':'Panding'}}</td>
                                                    
                                                    <td>
                                                        <span class="dtr-data">
                                                           <a href="{{url('product/edit/'.$product->id)}}" class="btn btn-success">
																	<span class="glyphicon glyphicon-edit"></span>
																</a>
															<a href="{{url('product/delete/'.$product->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
																	<span class="glyphicon glyphicon-trash"></span>
																</a>
																<a href="{{url('product/client/view/'.$product->id)}}" class="btn btn-success">
																	<span class="	glyphicon glyphicon-eye-open"></span>
																</a>
                                                        </span>
                                                    </td>
                                                </tr>
												@endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
			
			<!--Step Large modal START-->
       <div class="modal fade bs-modal-lg"  id="Steps<?php echo $product->id ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                        <h4 class="modal-title"><b>Steps Status</b></h4>
                    </div>
                    <div class="modal-body"> 
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
                                    <td style="color:red;"> @if(in_array("yarn", explode(",", $product->steps)))
								<?php echo "Done"?>
							
							@endif</td>   
                                   <td style="color:red;"> @if(in_array("knit", explode(",", $product->steps)))
								<?php echo "Done"?>
							
							@endif</td>   
                                    <td style="color:red;"> @if(in_array("dying", explode(",", $product->steps)))
								<?php echo "Done"?>
							
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
            </div>
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