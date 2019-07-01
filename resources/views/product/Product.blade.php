@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('add-product') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="tfd" class="col-md-4 col-form-label text-md-right">{{ __('TFD') }}</label>

                            <div class="col-md-6">
                                <input id="tfd" type="date" name="bday_tfd" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('TFD'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('tfd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Category') }}</label>

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
                            <label for="style" class="col-md-4 col-form-label text-md-right">{{ __('Style') }}</label>

                            <div class="col-md-6">
                                <input id="style" type="text" class="form-control{{ $errors->has('style') ? ' is-invalid' : '' }}" name="style" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('style'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('style') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                

								<textarea class="form-control" name="description" rows="2"></textarea>
                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="fabric" class="col-md-4 col-form-label text-md-right">{{ __('Fabric') }}</label>

                            <div class="col-md-6">
                                <input id="fabric" type="text" class="form-control{{ $errors->has('fabric') ? ' is-invalid' : '' }}" name="fabric" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('fabric'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('fabric') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						

                        
						 <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Picture') }}</label>

                            <div class="col-md-6">
                                <input type="file" name="image" accept="image/*">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						      <div class="form-group row">
                            <label for="color" class="col-md-4 col-form-label text-md-right">{{ __('Color') }}</label>

                            <div class="col-md-6">
                                  <input id="color" type="text" class="form-control{{ $errors->has('color') ? ' is-invalid' : '' }}" name="color" value="{{ old('color') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('color'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('color') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						 <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                           <div class="col-md-6">
                                <input type="number" name="quantity" class="form-control{{ $errors->has('quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
							<div class="form-group row">
                            <label for="remark" class="col-md-4 col-form-label text-md-right">{{ __('Remark') }}</label>

                           <div class="col-md-6">
								<textarea class="form-control" name="remark" rows="2"></textarea>
                                @if ($errors->has('remark'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('remark') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
							<div class="form-group row">
                            <label for="factory_name" class="col-md-4 col-form-label text-md-right">{{ __('Factory Name') }}</label>

                           <div class="col-md-6">
                                <input type="text" name="factory_name" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('factory_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('factory_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						  <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Steps') }}</label>

                             <div class="col-md-6">
					<div>
                    <label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="yarn">Yarn
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="knit">Knit
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="dying">Dying
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="cuiting">Cuiting
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="print">Print
					</label>
					</div>
					<div>
					
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="embo">Embo
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="sewing">Sewing
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="wash">Wash
					</label>
					</div>
					<div>
					<label class="checkbox-inline">
					  <input type="checkbox" name="steps[]" value="pack">Pack
					</label>
					</div>
                </div>
                        </div>

						<div class="form-group row">
                            <label for="bday_dd" class="col-md-4 col-form-label text-md-right">{{ __('Delivery Date') }}</label>

                           <div class="col-md-6">
                                <input type="date" name="bday_dd" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('bday_dd'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('bday_dd') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ADD') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
