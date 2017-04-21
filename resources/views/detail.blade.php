@extends('layouts.home')

@section('content')
	@foreach($item_document as $item)
	<div class="col-md-7 col-xs-7 col-thin">
	<!-- description-item -->
		<div class="Description">
			<div class="panel panel-primary" style="border: 0px;">
				<div class="panel-heading">
					<h3 class="panel-title">
						{{$item->name_category}}
					</h3>
				</div>
				<div class="panel-body text-justify">
					<div style="width: 100%;">
						<div style="float: left; min-width: 32%; padding-right: 10px;">
							<img src="Images/Icons/ListDocument.png" alt="Khoaluan.vn - Thư viện tài liệu số trực tuyến" />
						</div>
						<div>
							<span style="text-align: justify !important; line-height: 1.7;">
								{{$item->description_category}}
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- detail - information - document -->
		<div class="container detailInformation">
			<div class="row" style='border-bottom: 1px dashed #CCC; margin-bottom: 10px; padding-bottom: 10px; color: #6d6e71;'>
				<div class="col-md-3 col-xs-3 no-padding">
					<a href="tai-lieu_phan-mem-can-thiet-cho-may-tinh_1053194.htm#" class="imageThumnail">
						<img class="img-thumbnail image-of-thumnail" alt="Phần mềm cần thiết cho máy tính" title="Phần mềm cần thiết cho máy tính" src="Thumnails/00000000-0000-0000-0000-000000000000/250/81cb5c40-71d8-467b-b919-9b0771c2626c.png">
					</a>
				</div>
				<div class="col-md-9 col-xs-9 detail-padding-left-thumnail" style="padding-left: 0px;">
					<div class="row">
						<div class="col-md-12 col-xs-12">
							<h1 style="font-size: 21px !important; line-height: 1.3; text-align: justify;">
								{{$item->title}}
							</h1>
							<div class="moreInformation">
								
								<div class="list_size">
									<span class="title_list_moreInformation">Dung lượng:</span>
									<span id="MainContent_lblSize">{{$item->size}}</span>
								</div>
								<div class="list_type">
									<span class="title_list_moreInformation">Kiểu file:</span>
									<span id="MainContent_lblType">{{$item->type}}</span>
								</div>
								<div class="list_viewcount">
									<span class="title_list_moreInformation">Lượt xem:</span>
									<span id="MainContent_lblViewCount">{{$item->view_count}}</span>
								</div>
								<div class="list_downloadcount">
									<span class="title_list_moreInformation">Lượt tải:</span>
									<span id="MainContent_lblDownloadCount">{{$item->dowload_count}}</span>
								</div>
							</div>

							<div style="text-align: justify; padding-bottom: 10px;">
								<span class="descriptionDocument">
									{{$item->description_document}}
								</span>
							</div>
							Mục: <a href="http://www.khoaluan.vn/danh-muc_cong-nghe-thong-tin_thu-thuat-may-tinh">{{$item->name_category}}</a>
							<!-- <a href="mailto:?subject=Phần Mềm Cần Thiết Cho Máy Tính&amp;Body=http://www.khoaluan.vn/tai-lieu_phan-mem-can-thiet-cho-may-tinh_1053194" target="_blank"><img alt="E-mail - Khoaluan.vn - Thư viện tài liệu số trực tuyến" src="http://i1.code.msdn.s-msft.com/content/common/sharethis/email.gif"></a><a href="http://twitter.com/home?status=Phần Mềm Cần Thiết Cho Máy Tính : http://www.khoaluan.vn/tai-lieu_phan-mem-can-thiet-cho-may-tinh_1053194" target="_blank"> <img alt="Twitter - Khoaluan.vn - Thư viện tài liệu số trực tuyến" src="http://i1.code.msdn.s-msft.com/content/common/sharethis/twitter.gif"></a><a href="http://www.facebook.com/sharer.php?u=http://www.khoaluan.vn/tai-lieu_phan-mem-can-thiet-cho-may-tinh_1053194&amp;t=Phần Mềm Cần Thiết Cho Máy Tính" target="_blank"><img alt="Facebook - Khoaluan.vn - Thư viện tài liệu số trực tuyến" src="http://i1.code.msdn.s-msft.com/content/common/sharethis/facebook.gif"></a><a href="https://plus.google.com/share?url=http://www.khoaluan.vn/tai-lieu_phan-mem-can-thiet-cho-may-tinh_1053194" target="_blank"> <img alt="Google - Khoaluan.vn - Thư viện tài liệu số trực tuyến" src="st.f1.vnecdn.net/responsive/i/v11/graphics/icon_google.gif"></a> -->
							
						</div>

					</div>
				</div>
			</div>
			<!-- save - dowload document -->
			<div id="MainContent_UpdatePanel1">

				<div class="row" style="padding-bottom: 10px;">
					<div class="col-md-5 col-xs-5 no-padding">
						<p class="btn-block help-block" style="color: red; font-weight: bolder; font-size: 12px;">
							Vui lòng tải xuống để xem tài liệu đầy đủ.
						</p>
					</div>
					<div class="col-md-7 col-xs-7 text-right no-padding">
						<a onclick="return ConfirmOnSave();" id="MainContent_linkSave" class="btn btn-default btn-success" href="javascript:__doPostBack(&#39;ctl00$MainContent$linkSave&#39;,&#39;&#39;)">
								<span style="font-size: 14px" class="glyphicon glyphicon-plus-sign"></span> Đánh dấu
						</a>
						
						<a onclick="return ConfirmOnDownload();" id="MainContent_linkDownload" class="btn btn-default btn-primary" href="javascript:__doPostBack(&#39;ctl00$MainContent$linkDownload&#39;,&#39;&#39;)">
								<span style="font-size: 14px" class="glyphicon glyphicon-save"></span> Tải tài liệu
						</a>
					</div>
				</div>
			</div>

			<!-- view demo document -->
			<div class="row">
				<iframe class='col-md-12 col-xs-12 no-padding' frameborder='0' src='http://www.khoaluan.vn/ViewPdf.html?file=http://www.khoaluan.vn/demo/00000000-0000-0000-0000-000000000000/Demo4/81cb5c40-71d8-467b-b919-9b0771c2626c.pdf' height='1200px' webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe><div style='float:left; width: 100%; margin: 0px; background:#3d3d3d;height: 20px;margin-bottom: 10px;'></div>
			</div>

			<div class="row panel panel-primary" style="border: 0px; padding-top: 5px">
				<div class="panel-heading">
					<h3 class="panel-title">CÓ THỂ BẠN QUAN TÂM
					</h3>
				</div>
				<div class="panel-body text-justify" style="padding: 0 15px 0 15px;">
					<div style="width: 100%;">
						<div class="relatedDocument">
							<div class="row">
								@foreach($related_documents as $item_related)
								<div class="col-md-12 col-xs-12 no-padding documentItem">
									<a href='http://www.khoaluan.vn/tai-lieu_thu-thuat-khac-phuc-su-co-may-tinh_93232' title='Thủ thuật khắc phục sự cố máy tính'>
										<div class="col-md-2 col-xs-3 col-thin">
											<img style="width: 96px; height: 100px; border: 1px solid #ddd;" class="img-responsive" src='Thumnails/00000000-0000-0000-0000-000000000000/250/a0eefbb2-4c17-4ff7-8517-f43cae22a830.png' alt='Thủ thuật khắc phục sự cố máy tính'>
										</div>
										<div class="col-md-10 col-xs-9 col-thin" style="padding-top: 0px;">
											<h1 style="font-size: 13px !important; color: #333; line-height: 1.4; text-transform: capitalize; text-align: justify;">{{$item_related->title}}</h1>
											<div class="moreInformation">
												<div class="list_size">
													<span class="title_list_moreInformation">Dung lượng:</span>{{$item_related->size}}
												</div>
												<div class="list_type">
													<span class="title_list_moreInformation">Kiểu file:</span>{{$item_related->type}}
												</div>
												<div class="list_viewcount">
													<span class="title_list_moreInformation">Lượt xem:</span>{{$item_related->view_count}}
												</div>
												<div class="list_downloadcount">
													<span class="title_list_moreInformation">Lượt tải:</span>{{$item_related->dowload_count}}
												</div>
											</div>
										</div>
									</a>
								</div>
								@endforeach
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endforeach
@endsection
