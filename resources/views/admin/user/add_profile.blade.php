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
                                <a href="#">Product</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Add Product</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Add Profile</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Add User Profile</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="{{ url('/profile') }}" enctype="multipart/form-data">
									@csrf
                                        <div class="form-body">
                                            <div class="row">
                                              
                                              <p>Name : {{ Auth::user()->name }}  </p>

                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                      <img src="{{URL::to($user->image) }} " style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <p for="Image">Image</p>
                                                    <div class="fileinput fileinput-new w-100" data-provides="fileinput">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                                   
																   <img src="{{URL::to($user->image)}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/> 
                                                                </div>
                                                            </div>
                                                            <div class="col-md-7 text-left">
                                                                <div style="margin-top: 110px;">
                                                                    <span class="btn red btn-outline btn-file">
                                                                        <span class="fileinput-new"> Select image </span>
                                                                        <span class="fileinput-exists"> Change </span>
                                                                        <input type="file" name="image" accept="image/*"> </span>
                                                                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
															  </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>

                                            <br><br>
                                          
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