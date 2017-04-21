@extends('layouts.home')

@section('content')
	<div class="col-md-7 col-xs-7 col-thin">
		<div id="MainContent_DescriptionCategory" class="Description">
			<div class="panel panel-primary" style="border: 0px;">
				<div class="panel-heading">
					<h3 class="panel-title">
					</h3>
				</div>
				<div class="panel-body text-justify">
					<div style="width: 100%;">
						<div style="float: left; min-width: 32%; padding-right: 10px;">
							<img src="Images/Icons/ListDocument.png" alt="Chia sẽ tài liệu công nghệ thông tin" />
						</div>
						<div>
							<span style="text-align: justify !important; line-height: 1.7;">
								
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
			@foreach($newest_documents as $item_newest_document)
				<div class="col-md-4 col-xs-4 col-thin">
					<div class="NewDocument" title='{{$item_newest_document->title}}'>
						<a href='{{URL::to("/")}}/detail-document/{{$item_newest_document->document_id}}'>
							<img src='Thumnails/00000000-0000-0000-0000-000000000000/250/137cb842-93af-4315-856c-8d85f72a21c3.png' style="display: inline-block; width: 100%; height: 190px;" alt='{{$item_newest_document->title}}'>
							<div class="detailDocument">
								{{$item_newest_document->title}}
							</div>
						</a>
					</div>
				</div>
			@endforeach
			</div>
		</div>
		<!-- document list item -->
		<div id="MainContent_ListDocuments" class="listDocuments container">
			<div class="row" style="border-bottom: 1px dashed #CCC; margin-top: 10px; padding-bottom: 10px;">
				Kết quả 1-10 trong {{$sum_documents}}
			</div>
			<div class="row">
				<div class="text-center">
					<!-- <ul class="pagination"> -->
					{{$all_documents->render()}}
					<!-- </ul> -->
				</div>
			</div>
			@foreach($all_documents as $item_document)
			<div class="row documentItem">
				<div class="col-md-3 col-xs-3 col-thin">
					<a href='{{URL::to("/")}}/detail-document/{{$item_document->document_id}}' class="img"><img class="img-thumbnail" style="width: 140px; height: 150px" title='{{$item_document->title}}' alt='{{$item_document->title}}' src='Thumnails/00000000-0000-0000-0000-000000000000/130/137cb842-93af-4315-856c-8d85f72a21c3.png'></a>
				</div>
				<div class="col-md-9 col-xs-9 col-thin">
					<div>
						<a class="list_title" href='{{URL::to("/")}}/detail-document/{{$item_document->document_id}}'>{{$item_document->title}}</a>
					</div>
						<div class="moreInformation">
							<div class="list_size"><span class="title_list_moreInformation">Dung lượng: </span>{{$item_document->size}}</div>
							<div class="list_type"><span class="title_list_moreInformation">Kiểu file: </span>{{$item_document->type}}</div>
							<div class="list_viewcount"><span class="title_list_moreInformation">Lượt xem: </span>{{$item_document->view_count}}</div>
							<div class="list_downloadcount"><span class="title_list_moreInformation">Lượt tải: </span>{{$item_document->dowload_count}}</div>
					  	</div>
				<div class='list_description'>
					<span style="color: #0096d6;"></span>{{$item_document->description_document}}.
				</div>
				<div  class="list_category" >Mục: <a href='{{URL::to("/")}}/detail-category/{{$item_document->category_id}}'>{{$item_document->name_category}}</a></div>
			   </div>
			</div>
			@endforeach
		</div>
	</div>
@endsection
