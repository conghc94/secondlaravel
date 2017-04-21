@extends('layouts.home')

@section('content')
	<div class="col-md-7 col-xs-7 col-thin">
		<div id="MainContent_DescriptionCategory" class="Description">
			<div class="panel panel-primary" style="border: 0px;">
				<div class="panel-heading">
					<h3 class="panel-title">
						{{$item_category['name']}}
					</h3>
				</div>
				<div class="panel-body text-justify">
					<div style="width: 100%;">
						<div style="float: left; min-width: 32%; padding-right: 10px;">
							<img src="Images/Icons/ListDocument.png" alt="Khoaluan.vn - Thư viện tài liệu số trực tuyến" />
						</div>
						<div>
							<span style="text-align: justify !important; line-height: 1.7;">
								{{$item_category['description']}}
						
							</span>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- document newest -->
		<div id="MainContent_NewestDocuments" class="newestDocuments container">
			<h1 style="color: #1babe2; font-size: 20px !important; margin-left: -15px !important; margin-bottom: 10px !important;">Tài liệu mới nhất</h1>
			<div class="row">
				<div class="col-md-4 col-xs-4 col-thin">
					<div class="NewDocument" title='Bài giảng điện tử Công nghệ lớp 11 - Bài 6'>
						<a href='http://www.khoaluan.vn/tai-lieu_bai-giang-dien-tu-cong-nghe-lop-11-bai-6_1052793'>
							<img src='Thumnails/00000000-0000-0000-0000-000000000000/250/137cb842-93af-4315-856c-8d85f72a21c3.png' style="display: inline-block; width: 100%; height: 190px;" alt='Bài giảng điện tử Công nghệ lớp 11 - Bài 6'>
							<div class="detailDocument">
								Bài giảng điện tử Công nghệ lớp 11 - Bài...
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-4 col-thin">
					<div class="NewDocument" title='Bài giảng Ngữ văn 12 tuần 8: Luật thơ – GV:P.H.Long'>
						<a href='http://www.khoaluan.vn/tai-lieu_bai-giang-ngu-van-12-tuan-8-luat-tho-gv-p-h-long_1050150'>
							<img src='Thumnails/00000000-0000-0000-0000-000000000000/250/071a88b5-f7d2-47b9-842b-60b9748bf4c7.png' style="display: inline-block; width: 100%; height: 190px;" alt='Bài giảng Ngữ văn 12 tuần 8: Luật thơ – GV:P.H.Long'>
							<div class="detailDocument">
								Bài giảng Ngữ văn 12 tuần 8: Luật thơ – ...
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-4 col-xs-4 col-thin">
					<div class="NewDocument" title='Bài giảng Ngữ văn 12 Luật thơ – GV:L.T.Nhung'>
						<a href='http://www.khoaluan.vn/tai-lieu_bai-giang-ngu-van-12-luat-tho-gv-l-t-nhung_1050149'>
							<img src='Thumnails/00000000-0000-0000-0000-000000000000/250/56661780-750e-4919-9361-f80b3935908e.png' style="display: inline-block; width: 100%; height: 190px;" alt='Bài giảng Ngữ văn 12 Luật thơ – GV:L.T.Nhung'>
							<div class="detailDocument">
								Bài giảng Ngữ văn 12 Luật thơ – GV:L.T.N...
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
		<!-- document list item -->
		<div id="MainContent_ListDocuments" class="listDocuments container">
			<div class="row" style="border-bottom: 1px dashed #CCC; margin-top: 10px; padding-bottom: 10px;">
				Kết quả 1-10 trong khoảng 8,220
			</div>
			<div class="row">
				<div class="text-center">
					<!-- <ul class="pagination"> -->
					{{$all_documents->render()}}
					<!-- </ul> -->
				</div>
			</div>
			@foreach($all_documents as $document_item)
			<div class="row documentItem">
				<div class="col-md-3 col-xs-3 col-thin">
					<a href="http://www.khoaluan.vn/tai-lieu_bai-giang-dien-tu-cong-nghe-lop-11-bai-6_1052793" class="img"><img class="img-thumbnail" style="width: 140px; height: 150px" title='Bài giảng điện tử Công nghệ lớp 11 - Bài 6' alt='Bài giảng điện tử Công nghệ lớp 11 - Bài 6' src='Thumnails/00000000-0000-0000-0000-000000000000/130/137cb842-93af-4315-856c-8d85f72a21c3.png'></a>
				</div>
				<div class="col-md-9 col-xs-9 col-thin">
					<div>
						<a class="list_title" href="http://www.khoaluan.vn/tai-lieu_bai-giang-dien-tu-cong-nghe-lop-11-bai-6_1052793">{{$document_item->title}}</a>
					</div>
						<div class="moreInformation">
							<div class="list_size"><span class="title_list_moreInformation">Dung lượng: </span>{{$document_item->size}}</div>
							<div class="list_type"><span class="title_list_moreInformation">Kiểu file: </span>{{$document_item->type}}</div>
							<div class="list_viewcount"><span class="title_list_moreInformation">Lượt xem: </span>{{$document_item->view_count}}</div>
							<div class="list_downloadcount"><span class="title_list_moreInformation">Lượt tải: </span>{{$document_item->dowload_count}}</div>
					  	</div>
				<div class='list_description'>
					<span style="color: #0096d6;"></span>{{$document_item->description_document}}.
				</div>
				<div  class="list_category" >Mục: <a href="http://www.khoaluan.vn/danh-muc_bai-giang-dien-tu_cong-nghe-ky-thuat">{{$document_item->name_category}}</a></div>
			   </div>
			</div>
			@endforeach
		</div>
	</div>
@endsection
