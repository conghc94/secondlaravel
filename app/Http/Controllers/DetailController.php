<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Category;
use App\Document;
class DetailController extends Controller
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
		$all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->get();
		$all_documents = $all_documents = DB::table('categories')
			->join('documents', 'categories.id', '=', 'documents.category_id')
			->select('categories.name as name_category','categories.description as description_category','categories.document_count as document_count_category','categories.address as address_category','categories.sort_order as sort_order_category','documents.title','documents.description as description_document','documents.type','documents.size','documents.view_count','documents.dowload_count','documents.sort_order as sort_order_document')
			->paginate(5);
		// $some_documents = Document::where('', '>', 100)->paginate(15);
		// echo '<pre>';
		// print_r($all_documents);exit;
		return view('index',['categories' => $categories,'documents' => $documents, 'all_documents' => $all_documents]);
	}
}
