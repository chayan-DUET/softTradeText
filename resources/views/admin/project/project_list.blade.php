
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
                                <a href="#">Project</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Project List</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Project List</h3>
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
				 
				 //print_r($shipping_id);
				 
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
                                                <th> TDF </th>
                                                <th> Cate. </th>
                                                <th> Style </th>
                                                <th> Fabric </th>
                                                <th> Color </th>
                                                <th> Qty </th>
                                               <!--  <th> Image </th> -->
                                                <th> Decs. </th>
												<th> Remark </th>
                                                <th> Completed Step</th>
												<th> DD</th>
                                               
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>  
                                                <td>01</td>   
                                                <td>ABC Ltd.</td> 
                                                 <td>ABC com.</td>  												
                                                <td>01.06.2019</td>   
                                                <td>Women</td>   
                                                <td>Charlie</td>   
                                                <td>100% Cotton S/J 180 GSM</td>   
                                                <td>650 Pink</td>   
                                                <td>12000</td>   
                                              <!--   <td>
                                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61hujUtpERL._UX385_.jpg" height="60px" width="60px" alt="">
                                                </td>  --> 
                                                <td>Lorem ipsum dolor<br> <small><a href="javascript:;">Details</a></small></td>
												<td>good<br> <small><a href="javascript:;">Details</a></small></td>   
                                                <td>Yarn, Knit, Dying <br> <small><a href="javascript:;">Step Details</a></small></td>   
                                                <td>2.2.19</td>   
                                             
                                                
                                            </tr>  
                                            <tr>  
                                                <td>02</td>   
                                                <td>Ananta Ltd.</td>
											     <td>ABC com.</td>
                                                <td>01.06.2019</td>   
                                                <td>Women</td>   
                                                <td>Charlie</td>   
                                                <td>100% Cotton S/J 180 GSM</td>   
                                                <td>650 Pink</td>   
                                                <td>12000</td>   
                                            <!--     <td>
                                                    <img src="https://www.unived.in/wp-content/uploads/2018/02/unived-athlete-front-mens-t-shirt-600x600.jpg" height="60px" width="60px" alt="">
                                                </td>   -->
                                                <td>Lorem ipsum dolor<br> <small><a href="javascript:;">Details</a></small></td>   
                                                <td>good<br> <small><a href="javascript:;">Details</a></small></td>   
												<td>Yarn, Knit, Dying <br> <small><a href="javascript:;">Step Details</a></small></td>   
                                                <td>4.4.19</td>   
                                              
                                                
                                            </tr>  
											 @foreach($products as $product)
											 		 
												<tr>
												   <td>{{$product->id}} </td>
												   <td>{{$product->factory_name}}</td>
												   <td>{{$product->company_name}}</td>
												  <td>{{$product->bday_tfd}} </td>
												  <td>{{$product->category==0?'boys':'girl'}}</td>
												  <td>{{$product->style}}</td>
												  
												 <td>{{$product->fabric}}</td>
												 <td>{{$product->color}}</td>
												   <td>{{$product->quantity}}</td>
												 <!--  <td><img src="{{URL::to($product->image)}}" style="height:40px;width:40px;"></td> -->
												  
												  
												  <td>{{$product->description}}<br><a data-toggle="modal" data-target="#Description<?php echo $product->id; ?>"   href="#Description">Details</a></td>
												 <td>{{$product->remark}}<br><a data-toggle="modal" data-target="#Remark<?php echo $product->id; ?>"  href="#Remark">Details</a></td>
												   <td>{{$product->steps}}</td>
														
												  <td>
												 <?php
												  $datetime1 = strtotime(date("Y/m/d"));
						$datetime2 = strtotime($product->bday_tfd);

							$secs =$datetime1-$datetime2;// == <seconds between the two times>
							$days = $secs / 86400;
												  ?>
												@if($days<=6)
													  <b style="color:red"> {{$product->bday_dd}}</b>
												  @elseif($days<=10)
													  <b style="color:springgreen"> {{$product->bday_dd}}</b>
												  @elseif($days<=50)
													  <b style="color:green"> {{$product->bday_dd}}</b>
													   @elseif($days<=100)
													  <b style="color:red"> {{$product->bday_dd}}</b>
												  @else
                                    <b style="color:orange">{{$product->bday_dd}}</b>
                                      @endif
								 
												  </td>
												   
												 
												</tr>
												
			
			<!-- -->
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
                                </div>
                            </div>
                            <!-- END EXAMPLE TABLE PORTLET-->
                        </div>
                    </div>
                </div>
                <!-- END CONTENT BODY -->
            </div>
            <!-- END CONTENT -->
			
			
				@endsection