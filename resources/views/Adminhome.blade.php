@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="{{url('/product')}}" class="btn btn-primary" style="float:right 15px;" >Add Product</a>
				                       <a href="{{url('/show-product')}}" class="btn btn-primary" style="float:right 15px;" >Show Product</a>
				                      <a href="{{url('/admin')}}" class="btn btn-primary" style="" >Admin Registration</a>
                                    <a href="{{url('/client')}}" class="btn btn-primary" style="float:right" >Add Client</a>
									<a href="{{url('/login-client')}}" class="btn btn-primary" style="float:right 15px;" >Login Client</a>
				</div>
				 <div class="card-header">
				
				 </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in home!
					
					 <div class="alert alert-success">
                        <p>You're logged in as Administrator</p>
                    </div>
					<table class="table table-hover table-bordered">
                      <thead>
                        <tr>
                          <th width="5">No.</th>
                          <th>Member Name</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($users as $key => $value)
                          <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->email }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
