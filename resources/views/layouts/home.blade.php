<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" /><meta name="viewreport">
	<title>Tài liệu công nghệ thông tin</title>
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<script type="text/javascript" src="{{asset('js/jquery-3.2.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
	<div class="navbar navbar-inverse">
		<div class="container">
			<div class="row" style="padding-top: 10px">
				<div class="col-md-3 col-xs-4">
					<a href='{{URL::to("/")}}/index' title="Trang chủ">
						<img src="Customer/Image/Logo/khoaluan.vn.png" style="height: 70px;" /></a> <!-- alt="Khoaluan.vn - Thư viện tài liệu số trực tuyến"  -->
				</div>
				<div class="col-md-9 col-xs-8 no-padding" style="padding-top: 10px;">

					<div id="userControlHeader_SearchPanel" class="col-md-7 col-xs-7 search-panel-main">
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<button style="height: 34px;" type="button" class="btn btn-default btn-primary dropdown-toggle" data-toggle="dropdown">
									<span id="search_concept">
										Tìm theo</span> <span class="caret"></span>
								</button>
								<ul class="dropdown-menu" role="menu">
								@foreach($categories as $category)
									<li><a href="" data-id="9bc0cb57-d4f9-4644-a957-023fb8bab662">{{$category->name}}</a></li>
								@endforeach
								</ul> 
							</div>
							<input type="hidden" name="ctl00$userControlHeader$hdfSearchParam" id="userControlHeader_hdfSearchParam" value="0" />
							<input type="hidden" name="ctl00$userControlHeader$hdfSearchParamName" id="userControlHeader_hdfSearchParamName" value="Bất kỳ" />
							<input name="ctl00$userControlHeader$txtSearch" type="text" id="userControlHeader_txtSearch" class="form-control" placeholder="Nhập từ khóa..." style="border: 0px;" />
							<span class="input-group-btn">
								<a id="userControlHeader_btnSearch" class="btn btn-default btn-primary" href="javascript:__doPostBack(&#39;ctl00$userControlHeader$btnSearch&#39;,&#39;&#39;)" style="height: 34px;"><span class="glyphicon glyphicon-search"></span></a>
							</span>
						</div>
					</div>
					<div>
						<div class="b-header-3">
						@if (Route::has('login'))
							@if (Auth::check())
							@else
							<ul class="b-header-3__user pull-right">
								<li class="b-header-3__user-name pull-right">
									<a href="#" class="b-header-3__user-link clearfix" title="Thông Tin Tài Khoản">
										<img width="34" height="34" class="b-header-3__user-avatar" src="Images/Icons/avartar.png" /><!-- alt="Khoaluan.vn - Thư viện tài liệu số trực tuyến"  -->
										<ul class="b-header-3__user-text">
											<li class="b-header-3__user-text-name"><span class="b-header-3__user-short-name">Đăng nhập</span></li>
											<li class="b-header-3__user-text-account"><span>Tài khoản <span class="tk-hidden-md">&amp; Bộ sưu tập</span></span></li>
										</ul>
										<span class="caret b-header-3__caret"></span>
									</a>
									<div class="b-header-3__hover-box custom_hover_box">
										<ul class="b-header-3__user-dropdown arrow_top">
											<li id="dd-new-account" class="b-header-3__user-dropdown__item">
												<div id="socialLoginList">
													<a href="{{ url('/login') }}" class="loginList">Đăng nhập</a>
													<button type="submit" class="loginList btn_Google" name="provider" value="Google"
														title="Đăng nhập bằng tài khoản Google của bạn.">
													</button>
													<button type="submit" class="loginList btn_Facebook" name="provider" value="Facebook"
														title="Đăng nhập bằng tài khoản Facebook của bạn.">
													</button>
												</div>
												<div class="b-header-3__user-new-account">
													Khách hàng mới? 
												<a href="danh-muc_bai-giang-dien-tu.htm#" data-toggle="modal" data-target=".modalRegister" title="Tạo tài khoản mới">Tạo tài khoản</a>
												</div>
												<div class="b-header-3__user-new-account">
													Quên mật khẩu?                                                    
												<a href="danh-muc_bai-giang-dien-tu.htm#" data-toggle="modal" data-target=".modalForgotPassword" title="Quên mật khẩu">Cấp lại mật khẩu</a>
												</div>
											</li>
											<li class="b-header-3__user-dropdown__item"></li>
										</ul>
									</div>
								</li>
							</ul>
							@endif
						@endif
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid no-padding">
			<div class="navbar-collapse menuGradient">
			  <ul style="display: inline-block; float: none !important;" class="nav navbar-nav">
				 <li>
					<a style="min-width: 50px;" href='{{URL::to("/")}}/index'>
					<img style="vertical-align: top;" src="Images/Icons/Home.png" /></a> <!-- alt="Khoaluan.vn - Thư viện tài liệu số trực tuyến"  -->
				 </li>
				 <li>
					<div class="b-header-3 hoverDiv" style="background: transparent;">
					   <ul class="b-header-3__user b-header-3__main-menu-ul pull-right">
						  <li class="b-header-3__user-name"><a class="b-header-3__main-menu-a" href="{{URL::to('/')}}/index">Trang chủ</a></li>
					   </ul>
					</div>
					<div class="spaceMenu"></div>
				 </li>
				 <li>
					<div class="b-header-3 hoverDiv" style="background: transparent;">
					   <ul class="b-header-3__user b-header-3__main-menu-ul pull-right">
						  <li class="b-header-3__user-name">
							 <a class="b-header-3__main-menu-a" href='{{URL::to("/")}}/index'>Tài liệu công nghệ</a>
							 <div class="b-header-3__hover-box" style="top: 28px;">
								<ul class="b-header-3__user-dropdown arrow_top1" style="min-width: 390px; height: 266px; text-align: left;">
									@foreach($categories as $category)
								   <li class="b-header-3__user-dropdown__item" style="padding-left: 10px; width: 50%; float: left;"><a href="{{URL::to('/').$category->address}}" style="border-bottom: 1px solid #eee; margin-bottom: 7px;" class="b-header-3__user-dropdown__link">{{$category->name}}</a></li>
								   @endforeach
								</ul>
							 </div>
						  </li>
					   </ul>
					</div>
					<div class="spaceMenu"></div>
				 </li>
				 <li>
					<div class="b-header-3 hoverDiv" style="background: transparent;">
					   <ul class="b-header-3__user b-header-3__main-menu-ul pull-right">
						  <li class="b-header-3__user-name"><a class="b-header-3__main-menu-a" href="#">Công cụ hổ trợ</a></li>
					   </ul>
					</div>
					<div class="spaceMenu"></div>
				 </li>
			  </ul>
			</div>
		</div>
	</div>

	<!-- left-bar -->
	<div class="container">
		<div class="row">
			<div class="container advertisement col-thin">
				<a href="dut_khoaluan_default.html#" title="">
				<img width="100%" src="Customer/Image/Advertising/dut.khoaluan.vn.jpg"/>
				</a>
			</div>
			<div class="container" style="padding-top: 10px;">
				
				<div class="row">
					<!-- left-bar -->
					<div class="box mini-navigation main-category clearfix col-md-3 col-xs-4 col-thin">
						<div class="panel panel-primary" style="border: 0px; margin-bottom: 0px;">
							<div class="panel-heading">
								<h3 class="panel-title">DANH MỤC TÀI LIỆU</h3>
							</div>
						</div>
						<div class="content">
							<ul id="nav-sidebox" class="category-items">
								@foreach($categories as $category)
								<li class="level0 subcatemenu"><a href="{{URL::to('/').$category->address}}">{{$category->name}}<span class="myBadge">{{$category->document_count}}</span></a>
								@endforeach
								</li>
							</ul>
						</div>
					</div>
					<!-- content -->
					@yield('content')
				</div>
			</div>
		</div>
	</div>
</body>
</html>
