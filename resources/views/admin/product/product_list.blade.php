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
                                                <th> Factory </th>
												<th> Company </th>
												<th>company_no</th>
                                                <th> TDF </th>
                                                <th> Cate. </th>
                                                <th> Style </th>
                                                <th> Fabric </th>
                                                <th> Color </th>
                                                <th> Qty </th>
                                                <th> Image </th>
                                                <th> Decs. </th>
                                                <th> Completed Step</th>
                                                <th> Running Step</th>
                                                <th> DD </th>
                                                <th> Remark </th>
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>  
                                                <td>01</td>   
                                                <td>ABC Ltd.</td> 
                                                 <td>ABC com.</td>  
											     <td>888</td>  
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
                                                </td> 
                                            </tr>  
                                            <tr>  
                                                <td>02</td>   
                                                <td>Ananta Ltd.</td>
											     <td>ABC com.</td>
												  <td>884</td> 
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
                                                </td> 
                                            </tr>  
											 
											 @foreach($products as $product)
											 		  <?php
													
												  $datetime1 = strtotime(date("Y/m/d"));
						$datetime2 = strtotime($product['bday_tfd']);

							$secs =$datetime1-$datetime2;// == <seconds between the two times>
							$days = $secs / 86400;
							//echo $days;
							
												  ?>
												<!--  @if($days<=100)
													  <b style="color:green"> May 26, 2019 10:38:22 GMT</b>
												  @else
                                    <b style="color:red"> May 26, 2019 10:38:22 GMT</b>
                                      @endif -->
												<tr     @if($days <=6 && $days >=1)  style="background-color: blue;";
												} @elseif($days <=20 && $days >=7)   style="background-color:   #cc0000;"; 
												  @elseif($days <=50 && $days >=21)  style="background-color: seagreen;"; 
												  @elseif($days <=150 && $days >=51)  style="background-color:Olive ;"; 
												   @else  style="background-color: lightblue;";
												   @endif
												     
								 
											>
												   <td>{{$product->id}} </td>
												   <td>{{$product->factory_name}}</td>
												   <td>{{$product->company_name}}</td>
												   <td>{{$product->company_no}}</td>
												  <td>{{$product->bday_tfd}} </td>
												  <td>{{$product->category==0?'boys':'girl'}}</td>
												  <td>{{$product->style}}</td>
												  
												 <td>{{$product->fabric}}</td>
												 <td>{{$product->color}}</td>
												   <td>{{$product->quantity}}</td>
												  <td><img src="{{URL::to($product->image)}}" style="height:40px;width:40px;"></td>
												  
												  <td>{{$product->description}}<br><a data-toggle="modal" data-target="#Description<?php echo $product['id']; ?>"   href="#Description">Details</a></td>
												  <td>{{$product->steps}}<br> <small><a data-toggle="modal" data-target="#Steps<?php echo $product['id']; ?>" href="#Steps">Step Details</a></small></td>
												 
												   <td>{{$product->steps}}</td>
														
												  <td>
												  <?php
												  $datetime1 = strtotime(date("Y/m/d"));
						$datetime2 = strtotime($product['bday_dd']);

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
												   <td>{{$product->remark}}<br><a data-toggle="modal" data-target="#Remark<?php echo $product['id']; ?>"  href="#Remark">Details</a></td>
												  <td>
															<a href="{{url('product/edit/'.$product->id)}}" class="btn btn-success">
																	<span class="glyphicon glyphicon-edit"></span>
																</a>
															<a href="{{url('product/delete/'.$product->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
																	<span class="glyphicon glyphicon-trash"></span>
																</a>

															</td>
												</tr>
												<div class="modal fade bs-modal-lg" id="Description<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
										 <div class="modal fade bs-modal-lg" id="Remark<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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
       <div class="modal fade bs-modal-lg"  id="Steps<?php echo $product['id']; ?>" tabindex="-1" role="dialog" aria-hidden="true">
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