<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Novel;
use Validator;
use Illuminate\Support\Facades\Redirect;

class TopController extends Controller
{

    //TOP表示
	public function index(){
		$user = isset(Auth::user()->id)?Auth::user()->id:"";
		if ($user !=="") {
		 return Redirect::to('bookshelf');
		}
		return view('top');
	}
}
