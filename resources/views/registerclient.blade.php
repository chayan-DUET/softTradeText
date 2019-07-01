@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Client') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('register_client') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="first name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('first name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('first name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="last name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('last name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('larst name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>

                            <div class="col-md-6">
                                <input id="company name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="company name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('company name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('company name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="Address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('address'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="phone" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
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
                            <label for="publicationstatus" class="col-md-4 col-form-label text-md-right">{{ __('Product Type') }}</label>

                            <div class="col-md-6">
                                 <select class="form-control" name="product">
                        <option>Product Type</option>
                        <option value="0">T-Shirt</option>
                        <option value="1">Shirt</option>
                    </select>
                            </div>
                        </div>
						 <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Quantity') }}</label>

                           <div class="col-md-6">
                                <input type="number" name="quantity" class="form-control{{ $errors->has('Quantity') ? ' is-invalid' : '' }}" >

                                @if ($errors->has('quantity'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('quantity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						  <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('Status') }}</label>

                             <div class="col-md-6">
                    <select class="form-control" name="status">
                        <option>Select Publication Status</option>
                        <option value="0">Work Start</option>
                        <option value="1">Sewing</option>
						<option value="2">Dying</option>
						<option value="3">Kniting</option>
						<option value="4">Done</option>
						<option value="5">Relised</option>
                    </select>

                </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required autocomplete="new-password">

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
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
