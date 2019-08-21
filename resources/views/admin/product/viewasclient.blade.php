<?php
// Start the session
session_start();
?>
@extends('admin.adminmaster') 
@section('content')
 $steps=explode(",", $product->steps);
  
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
                                <span>View as Client</span>
                            </li>
                        </ul>
                    </div>
                    <!-- END PAGE BAR -->
                    <!-- BEGIN PAGE TITLE-->
                    <h3 class="page-title"> View as Client</h3>
                    <!-- END PAGE TITLE-->
                    <!-- END PAGE HEADER-->
                    <div class="row">
                        <div class="">
						 @foreach ($product1 as $product1)
						  <div class="col-md-2">{{$product1->style}}</div>
						  <div class="col-md-2">col-md-2</div>
						  <div class="col-md-2">col-md-2</div>
						</div>
   @endforeach
                    </div>
                </div>
               
            </div>
			
            <!-- /.modal-content -->
        <!-- </div>  -->
        <!-- /.modal-dialog -->
        <!-- /.Step Large modal END -->
		
		<script>

$('.Steps').click(function(event) {
        event.preventDefault();

        var url = $(this).attr('#Steps');

        $("#Steps").modal('show');

        $.ajax({
            url: url,
            type: 'GET',
            dataType: 'html',
        })
        .done(function(response) {
            $("#modal-global").find('.modal-body').html(response);
        });

    });
</script>
				@endsection