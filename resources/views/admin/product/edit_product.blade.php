@extends('admin.adminmaster')
@section('content')

<!-- <div class="container">
    <div class="row justify-content-center">
	<div class="col-md-3">
	</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="align:right; color:white;"><center><h2>{{ __('Edit Product') }}</h2></center></div>

                <div class="card-body">
                    <form method="POST" style="align:center;" action="{{ url('product/update') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row" style="align:center;">
                            <label for="tfd" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('TFD') }}</label>

                            <div class="col-md-6">
                                

								<input type="text" style="align:right;" value="{{$productById->bday_tfd}}" class="form-control" name="bday_tfd">
                           <input type="hidden" value="{{$productById->id}}" class="form-control" name="productId">
                                @if ($errors->has('TFD'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tfd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="category" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

                            <div class="col-md-6">
                           <select class="form-control" name="category">
                        <option>Category Type</option>
                        <option value="0">Boys</option>
                        <option value="1">Girls</option>
						<option value="2">Babys</option>
                          </select>
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="style" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Style') }}</label>

                            <div class="col-md-6">
                                <input id="style" type="text" class="form-control{{ $errors->has('style') ? ' is-invalid' : '' }}" name="style" value="{{$productById->style}}" required autocomplete="name" autofocus>

                                @if ($errors->has('style'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('style') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="Address" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                

								<textarea class="form-control" name="description" rows="2">{{$productById->description}}</textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="fabric" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Fabric') }}</label>

                            <div class="col-md-6">
                                <input id="fabric" type="text" class="form-control{{ $errors->has('fabric') ? ' is-invalid' : '' }}" name="fabric" value="{{$productById->fabric}}" required autocomplete="name" autofocus>

                                @if ($errors->has('fabric'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fabric') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						

                        
						 <div class="form-group row">
                            <label for="image" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="image" accept="image/*">
								<img src="{{asset($productById->image)}}" alt="" height="100" width="100">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						      <div class="form-group row">
                            <label for="color" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                            <div class="col-md-6">
                                  <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{$productById->color}}" required autocomplete="name" autofocus>

                                @if ($errors->has('color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						 <div class="form-group row">
                            <label for="quantity" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                           <div class="col-md-6">
                                <input type="number" name="quantity" value="{{$productById->quantity}}" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
							<div class="form-group row">
                            <label for="remark" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>

                           <div class="col-md-6">
								<textarea class="form-control" name="remark" rows="2">{{$productById->remark}}</textarea>
                                @if ($errors->has('remark'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remark') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
							<div class="form-group row">
                            <label for="factory_name" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Factory Name') }}</label>

                           <div class="col-md-6">
                                <input type="text" name="factory_name" value="{{$productById->factory_name}}" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('factory_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('factory_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						  <div class="form-group row">
                            <label for="status" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Steps') }}</label>

                             <div class="col-md-6">
					<div>
                    <label class="checkbox-inline" style="align:center; color:white;">
					  <input type="checkbox" name="steps[]" value="yarn" {{ in_array('yarn', $steps) ? 'checked' : '' }}>yarn
					  
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					  
					   <input type="checkbox" name="steps[]" value="knit" {{ in_array('knit', $steps) ? 'checked' : '' }}>Knit
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="dying" {{ in_array('dying', $steps) ? 'checked' : '' }}>Dying
					  
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="cuiting" {{ in_array('cuiting', $steps) ? 'checked' : '' }}>Cuiting
					  
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="print" {{ in_array('print', $steps) ? 'checked' : '' }}>Print
					 
					</label>
					</div>
					<div>
					
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="embo" {{ in_array('embo', $steps) ? 'checked' : '' }}>embo
					 
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="sewing" {{ in_array('sewing', $steps) ? 'checked' : '' }}>Sewing
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="wash" {{ in_array('wash', $steps) ? 'checked' : '' }}>Wash
					</label>
					</div>
					<div>
					<label class="checkbox-inline" style="align:center; color:white;">
					<input type="checkbox" name="steps[]" value="pack" {{ in_array('pack', $steps) ? 'checked' : '' }}>Pack
					  
					</label>
					</div>
                </div>
                        </div>

						<div class="form-group row" >
                            <label for="bday_dd" style="align:center; color:white;" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Date') }}</label>

                           <div class="col-md-6">
                                <input type="text" name="bday_dd" value="{{$productById->bday_dd}}" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('bday_dd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bday_dd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" >
                                    {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->

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
                                <a href="#">Edit Product</a>
                                <i class="fa fa-circle"></i>
                            </li>
                            <li>
                                <span>Edit Product</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> Edit Product</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        
                        <div class="col-md-12">
                            <!-- BEGIN SAMPLE FORM PORTLET-->
                            <div class="portlet light bordered">
                                <div class="portlet-title">
                                    <div class="caption font-green">
                                        <i class="icon-pin font-green"></i>
                                        <span class="caption-subject bold uppercase"> Prodyuct Edit</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <form method="POST" action="{{ url('product/update') }}" enctype="multipart/form-data">
									@csrf
                                        <div class="form-body">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" value="{{$productById->factory_name}}" name="factory_name" id="factory_name">
                                                        <label for="factory_name">Factory Name</label>
                                                        <span class="help-block">Please enter factory name</span>
                                                    </div>
                                                </div>
												 <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" value="{{$productById->company_name}}" name="factory_name" id="company_name">
                                                        <label for="factory_name">Company Name</label>
                                                        <span class="help-block">Please enter company name</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
														<input type="text" class="form-control" name="bday_tfd" value="{{$productById->bday_tfd}}"  id="TFD">
                                                         <input type="hidden" value="{{$productById->id}}" class="form-control" name="productId">
														<label for="TFD">TFD</label>
                                                        <span class="help-block">Please enter TFD</span>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label has-info">
                                                        <select required class="form-control edited" id="category" name="category">
                                                            <option value="" selected>Select category</option>
                                                            <option value="0">Boys</option>
                                                            <option value="1">Girls</option>
                                                            <option value="2">Babys</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="style" value="{{$productById->style}}" id="Style">
                                                        <label for="Style">Style</label>
                                                        <span class="help-block">Please enter style</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="fabric" value="{{$productById->fabric}}" id="Fabric">
                                                        <label for="Fabric">Fabric</label>
                                                        <span class="help-block">Please enter Fabric</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group form-md-line-input form-md-floating-label">
                                                        <input type="text" class="form-control" name="color" value="{{$productById->color}}" id="Color">
                                                        <label for="Color">Color</label>
                                                        <span class="help-block">Please enter Color</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="number" class="form-control" name="quantity" value="{{$productById->quantity}}" id="Quantity">
                                                                <label for="Quantity">Quantity</label>
                                                                <span class="help-block">Please enter quantity</span>
                                                            </div>
                                                        </div>
        
                                                        <div class="col-md-6">
                                                            <div class="form-group form-md-line-input form-md-floating-label">
                                                                <input type="text" class="form-control" name="bday_dd" value="{{$productById->bday_dd}}" id="delevery_date">
                                                                <label for="delevery_date">Delevery Date</label>
                                                                <span class="help-block">Please enter delevery date</span>
                                                            </div>
                                                        </div>

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
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <p for="Image">Image</p>
                                                    <div class="fileinput fileinput-new w-100" data-provides="fileinput">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 200px; height: 150px;"> 
                                                                   <img src="{{asset($productById->image)}}" alt="" height="100" width="100">
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
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4 class="font-green mt-20 mb-20"><b>Select Steps</b></h4>  
                                                </div>
											

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
													
                                                        <input type="checkbox" name="steps[]" value="yarn" {{ in_array('yarn', $steps) ? 'checked' : '' }} id="Yarn" class="md-check">
                                                        <label for="Yarn">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Yarn </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="knit" {{ in_array('knit', $steps) ? 'checked' : '' }} id="Knit" class="md-check">
                                                        <label for="Knit">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Knit </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="dying" {{ in_array('dying', $steps) ? 'checked' : '' }} id="Dyeing" class="md-check">
                                                        <label for="Dyeing">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Dyeing </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="cuiting" {{ in_array('cuiting', $steps) ? 'checked' : '' }} id="Cutting" class="md-check">
                                                        <label for="Cutting">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Cutting </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="print" {{ in_array('print', $steps) ? 'checked' : '' }} id="print" class="md-check">
                                                        <label for="print">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Print </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="embo" {{ in_array('embo', $steps) ? 'checked' : '' }} id="Embo" class="md-check">
                                                        <label for="Embo">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Embo </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="sewing" {{ in_array('sewing', $steps) ? 'checked' : '' }} id="Sewing" class="md-check">
                                                        <label for="Sewing">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Sewing </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="wash"  {{ in_array('wash', $steps) ? 'checked' : '' }} id="Wash" class="md-check">
                                                        <label for="Wash">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Wash </label>
                                                    </div>
                                                </div>

                                                <div class="col-md-2">
                                                    <div class="md-checkbox mb-15">
                                                        <input type="checkbox" name="steps[]" value="pack" {{ in_array('pack', $steps) ? 'checked' : '' }} id="Pack" class="md-check">
                                                        <label for="Pack">
                                                            <span></span>
                                                            <span class="check"></span>
                                                            <span class="box"></span> Pack </label>
                                                    </div>
                                                </div>
                                            </div> 
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
