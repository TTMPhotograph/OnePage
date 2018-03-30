<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use App\Novels;
use App\User;
use Validator;
use Illuminate\Support\Facades\Redirect;

class TopController extends Controller
{

    //TOP表示
	public function index(){
		$novels = Novels::paginate(4);
		return view('top',['novels' => $novels]);
	}
}
