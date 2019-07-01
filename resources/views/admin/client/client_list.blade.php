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
                                <a href="#">Client</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Client List</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Client List</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="col-md-12">
                            <!-- BEGIN EXAMPLE TABLE PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-dark">
                                        <i class="icon-settings font-dark"></i>
                                        <span class="caption-subject bold uppercase">Client List</span>
                                    </div>
                                    <div class="tools"> </div>
                                </div>
								<hr/>
                               <h3 class="text-center text-success">{{Session::get('message')}}</h3>
                                <div class="portlet-body">
                                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                                        <thead>
                                            <tr>
                                                <th> Sl. </th>
                                                <th> First Name </th>
                                                <th> Last Name</th>
                                                <th> Full Name</th>
                                                <th>Company Name</th>
                                                <th> Address </th>
                                                <th> Phone </th>
                                                <th> E-Mail </th>
                                                <th> Image </th>
                                                <th> Description. </th>
                                               
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>  
                                                <td>01</td>   
                                                <td>jon</td>   
                                                <td>cr</td>   
                                                <td>jon cr</td>   
                                                <td>Charlie</td>   
                                                <td>100% Cotton S/J 180 GSM</td>   
                                                <td>650 Pink</td>   
                                                <td>ch@gmail.com</td>   
                                                <td>
                                                    <img src="https://images-na.ssl-images-amazon.com/images/I/61hujUtpERL._UX385_.jpg" height="60px" width="60px" alt="">
                                                </td>   
                                                <td>Lorem ipsum dolor<br> <small><a href="javascript:;">Details</a></small></td>   
                                                
                                                <td>
                                                    <a href="#" class="btn btn-primary">
                                                        <i class="fa fa-edit"></i>   
                                                    </a>
                                                    <a href="#" class="btn btn-danger">
                                                        <i class="fa fa-archive"></i>   
                                                    </a>
                                                </td> 
                                            </tr>  
                                            @foreach($client as $client)
												<tr>
												   <td>{{$client->id}} </td>
												   <td>{{$client->first_name}}</td>
												  <td>{{$client->last_name}} </td>
												  <td>{{$client->full_name}}</td>
												  <td>{{$client->company_name}}</td>
												  
												 <td>{{$client->address}}</td>
												 <td>{{$client->phone}}</td>
												   <td>{{$client->email}}</td>
												  <td><img src="{{URL::to($client->image)}}" style="height:40px;width:40px;"></td>
												  
												  <td>{{$client->description}}<a data-toggle="modal" href="#Description">Details</a></td>
												  
												  <td>
																<a href="{{url('client/edit/'.$client->id)}}" class="btn btn-success">edit
																	<span class="glyphicon glyphicon-edit"></span>
																</a>
															<a href="{{url('client/delete/'.$client->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
																	<span class="glyphicon glyphicon-trash">delete</span>
																</a>

															</td>
												</tr>
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