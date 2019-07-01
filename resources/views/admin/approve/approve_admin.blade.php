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
                                                
                                                <th>Company Name</th>
                                                
                                                <th> E-Mail </th>
												<th> Admin </th>
                                                <th> Type </th>
												<th> Status </th>
                                               
                                                
                                               
                                                <th> Action </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                             
                                            @foreach($user as $client)
												<tr>
												   <td>{{$client->id}} </td>
												  
												  <td>{{$client->company_name}}</td>
												  
												 
												   <td>{{$client->email}}</td>
												   <td>{{$client->admin==1 ? 'admin' : ($client->admin==0 ? 'user':'client')}}</td>
												 <td>{{$client->type==1?'published':'unpublished'}}</td>
												  <td>{{$client->status==1?'active':'deactive'}}</td>
												  
												  
												  
												  
												  <td>
																<a href="{{url('manage-admin/edit/'.$client->id)}}" class="btn btn-success">
																	<span class="glyphicon glyphicon-edit"></span>
																</a>
															<a href="{{url('manage-admin/delete/'.$client->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
																	<span class="glyphicon glyphicon-trash"></span>
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