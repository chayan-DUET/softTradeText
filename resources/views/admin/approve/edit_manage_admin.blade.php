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
                                <a href="#">Edit Manage Admin</a>
                               
                            </li>
                            
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Edit Manage Admin</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Edit Manage Admin</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="{{ url('manage-admin/update') }}" enctype="multipart/form-data">
									@csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" value="{{$adminById->company_name}}" name="company_name" id="company_name">
                                                         <input type="hidden" value="{{$adminById->id}}" class="form-control" name="adminById">
														<label for="factory_name">Company Name</label>
                                                        <span class="help-block">Please enter company name</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
														<input type="email" class="form-control" name="email" value="{{$adminById->email}}"  id="email">
                                                        
														<label for="TFD">Email</label>
                                                        <span class="help-block">Please enter Email</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                        <select class="form-control edited" id="category" name="admin">
                                                            <option value="" selected>Select Admin Type</option>
                                                            <option value="0">User</option>
                                                            <option value="1">Admin</option>
															 <option value="2">Client</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                        <select class="form-control edited" id="category" name="type">
                                                            <option value="" selected>Select Publication Type</option>
                                                            <option value="0">Publish</option>
                                                            <option value="1">Unpublish</option>
                                                            
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                        <select class="form-control edited" id="category" name="status">
                                                            <option value="" selected>Select Status</option>
                                                            <option value="0">Active</option>
                                                            <option value="1">Deactive</option>
                                                            
                                                        </select>
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
