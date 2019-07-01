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
                                <span>Add Client</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Add Client</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Client Add</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="{{ url('add-client') }}" enctype="multipart/form-data">
									@csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="first_name" id="first_name">
                                                        <label for="factory_name">First Name</label>
                                                        <span class="help-block">Please Enter First Name</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="last_name" id="last_name">
                                                        <label for="TFD">Last Name</label>
                                                        <span class="help-block">Please enter Last Name</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="full_name" id="full_name">
                                                        <label for="Style">Full Name</label>
                                                        <span class="help-block">Please enter Full Name</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="company_name" id="company_name">
                                                        <label for="Style">Company Name</label>
                                                        <span class="help-block">Please enter Company Name</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="address" id="address">
                                                        <label for="Fabric">Address</label>
                                                        <span class="help-block">Please enter Address</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="phone" id="phone">
                                                        <label for="Color">Phone</label>
                                                        <span class="help-block">Please enter Phone</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="email" class="form-control" name="email" id="email">
                                                                <label for="Quantity">E-Mail Address</label>
                                                                <span class="help-block">Please enter E-Mail</span>
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="password" class="form-control" name="password" id="password">
                                                                <label for="delevery_date">Password</label>
                                                                <span class="help-block">Please enter Password</span>
                                                            </div>
                                                        </div>
														 <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <textarea class="form-control" name="description" rows="3"></textarea>
                                                                <label for="Description">Description</label>
                                                            </div>
                                                        </div>
														

                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input id="password-confirm" type="password" class="form-control"  name="password_confirmation" required autocomplete="new-password">
                                                                <label for="password_confirmation">password_confirmation</label>
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

                                            <br><br>
                                            
                                        </div>
                                        <div class="form-actions noborder text-right">
                                            <button type="submit" class="btn blue">Submit</button>
                                            <button type="button" class="btn default">Cancel</button>
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