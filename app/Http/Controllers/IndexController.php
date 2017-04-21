<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;
use App\Document;
class IndexController extends Controller
{

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$categories = Category::all();

		$documents = Document::all();

		$newest_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('documents.id as document_id','categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->orderby('documents.created_at','desc')
			->limit(3)
			->get()
			->toArray();

		$sum_documents = Count(DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->get());
		// echo "<pre>";
		// print_r($newest_document);exit;
		$all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('documents.id as document_id','categories.id as category_id','categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->paginate(5);
		// print_r($all_documents);exit;
		return view('index',['categories' => $categories,'documents' => $documents, 'all_documents' => $all_documents,'newest_documents' => $newest_documents,'sum_documents' => $sum_documents]);
	}

	public function detailDocument($id)
	{
		// echo $id;exit;
		$categories = Category::all();
		$documents = Document::all();
		$all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->get();
		$all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->paginate(5);
		$item_document = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.id as id_category','categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->where('documents.id',$id)
			->get()
			->toArray();
		
		//get id category
		$id_related_category = $item_document[0]->id_category;
		
		//get all document don't have document.id = id
		$related_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->where('categories.id',$id_related_category)
			->where('documents.id','!=',$id)
			->orderby('dowload_count','DESC')
			->get();
		
		return view('detail',['categories' => $categories,'documents' => $documents, 'all_documents' => $all_documents,'item_document' => $item_document,'related_documents' => $related_documents]);
	}

	public function detailCategory($id)
	{
		$categories = Category::all();

		$item_category = Category::find($id)->toArray();
		// echo "<pre>";
		// print_r($item_category);exit;

		$documents = Document::all();

		$all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->where('categories.id',$id)
			->paginate(5);

		$item_document = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.id as id_category','categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->where('categories.id',$id)
			->get()
			->toArray();

		return view('category',['categories' => $categories,'documents' => $documents, 'all_documents' => $all_documents,'item_document' => $item_document,'item_category' => $item_category]);
	}
}
