<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
	public function index()
	{
		$users = \DB::select('select * from users where id =?',[1]);
		//print_r($users);exit;
		return view('index',compact('users'));
	} 	   
}
