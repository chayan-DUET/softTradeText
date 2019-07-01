@extends('layouts.app')

@section('content')
<table class="table table-hover table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl.No</th>
      <th scope="col">TFD</th>
      <th scope="col">Category</th>
      <th scope="col">Style</th>
	  <th scope="col">Description</th>
      <th scope="col">Fabric</th>
      <th scope="col">Picture</th>
	  <th scope="col">Color</th>
      <th scope="col">Quantity</th>
      <th scope="col">Remark</th>
	   <th scope="col">Factory Name</th>
      <th scope="col">Steps</th>
	  <th scope="col">Delivery Date</th>
	  <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
   @foreach($products as $product)
    <tr>
	   <td>{{$product->id}} </td>
      <td>{{$product->bday_tfd}} </td>
      <td>{{$product->category==0?'boys':'girl'}}</td>
	 
      <td>{{$product->style}}</td>
	  <td>{{$product->description}}</td>
      <td>{{$product->fabric}}</td>
      <td><img src="{{URL::to($product->image)}}" style="height:80px;width:200px;"></td>
	  <td>{{$product->color}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->remark}}</td>
	  <td>{{$product->factory_name}}</td>
      <td>{{$product->steps}}</td>
      <td>{{$product->bday_dd}}</td>
	  <td>
                    <a href="{{url('product/edit/'.$product->id)}}" class="btn btn-success">edit
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                <a href="{{url('product/delete/'.$product->id)}}" onclick="return confirm('are u sure delete this item')" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash">delete</span>
                    </a>

                </td>
    </tr>
   @endforeach

  </tbody>
</table>


@endsection
