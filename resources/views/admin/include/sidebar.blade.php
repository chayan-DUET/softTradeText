<!-- BEGIN SIDEBAR -->
            <div class="page-sidebar-wrapper">
                <!-- BEGIN SIDEBAR -->
                <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                <div class="page-sidebar navbar-collapse collapse">
                    <!-- BEGIN SIDEBAR MENU -->
                    <!-- DOC: Apply "page-sidebar-menu-light" class right after "page-sidebar-menu" to enable light sidebar menu style(without borders) -->
                    <!-- DOC: Apply "page-sidebar-menu-hover-submenu" class right after "page-sidebar-menu" to enable hoverable(hover vs accordion) sub menu mode -->
                    <!-- DOC: Apply "page-sidebar-menu-closed" class right after "page-sidebar-menu" to collapse("page-sidebar-closed" class must be applied to the body element) the sidebar sub menu mode -->
                    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
                    <!-- DOC: Set data-keep-expand="true" to keep the submenues expanded -->
                    <!-- DOC: Set data-auto-speed="200" to adjust the sub menu slide up/down speed -->
                    <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
                        <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
                        <li class="sidebar-toggler-wrapper hide">
                            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                            <div class="sidebar-toggler">
                                <span></span>
                            </div>
                            <!-- END SIDEBAR TOGGLER BUTTON -->
                        </li>

                        <li class="nav-item start active">
                            <a href="/softTrade" class="nav-link">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                    <!--  menu  -->
											<?php 
			     $shipping_id=Session::get('user_id');
				 
				 //print_r($shipping_id);
				 
				 ?>	
				 
						<?php if($shipping_id==1){?>
				<li><a class=" glyphicon glyphicon-lock" style="float: right;margin:auto;top:-78px;right:-84px;    color: #fda30e; " href="{{URL::to('/customer-logout')}}">Logout</a></li>
				
					<!--end menu -->
                        <li class="nav-item">
                            <a href="/softTrade" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Product</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
					
							
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="{{url('/add-product')}}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Add Product</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="{{url('/show-product')}}" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Product List</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						
						<li class="nav-item">
                            <a href="/softTrade/home" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Client</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="{{url('/add-client')}}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Add Client</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                                <li class="nav-item start ">
                                    <a href="{{url('/show-client')}}" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Client List</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
						<!--manage admin-->
						<li class="nav-item">
                            <a href="/softTrade/home" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Manage Admin And Client</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="{{url('/approve-admin')}}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">Approve Admin & Client</span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                               <!-- <li class="nav-item start ">
                                    <a href="{{url('/approve-client')}}" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Approve Client</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>-->
                            </ul>
                        </li>
						<!--end manage admin-->
						
						<?php } elseif($shipping_id==2){?>
			   
			   
			   <li><a class=" glyphicon glyphicon-check" style="float: right ;margin:auto;top:-78px;right:-74px;    color: #fda30e;" href="{{URL::to('/pament')}}">check out</a></li>
				<li class="nav-item">
                            <a href="/softTrade/home" class="nav-link nav-toggle">
                                <i class="icon-puzzle"></i>
                                <span class="title">Project View</span>
                                <span class="selected"></span>
                                <span class="arrow open"></span>
                            </a>
                            <ul class="sub-menu">
                                <li class="nav-item start active open">
                                    <a href="{{url('/project-view')}}" class="nav-link ">
                                        <i class="icon-bar-chart"></i>
                                        <span class="title">{{ Auth::user()->name }}'s Project  </span>
                                        <span class="selected"></span>
                                    </a>
                                </li>
                               <!-- <li class="nav-item start ">
                                    <a href="{{url('/approve-client')}}" class="nav-link ">
                                        <i class="icon-bulb"></i>
                                        <span class="title">Approve Client</span>
                                        <span class="badge badge-success">1</span>
                                    </a>
                                </li>-->
                            </ul>
                        </li>
				<?php } else{?>
				<li><a class=" glyphicon glyphicon-lock" style="float: right;margin:auto;top:-78px;right:-64px;    color: #fda30e; " href="{{URL::to('/loging-check')}}">Login</a></li>
				<?php }?>
                    </ul>
					
                    <!-- END SIDEBAR MENU -->
                    <!-- END SIDEBAR MENU -->
                </div>
                <!-- END SIDEBAR -->
            </div>
            <!-- END SIDEBAR -->