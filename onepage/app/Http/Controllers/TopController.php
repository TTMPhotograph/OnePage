<?php

namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Novels;
use App\User;
use Validator;
use Illuminate\Support\Facades\Redirect;

class TopController extends Controller
{

    //TOP表示
	public function index(){
		//ジャンル取得
		$genre = DB::table('genre')->get();
		//ページ送り
		$novels = Novels::paginate(4);
		return view('top',[
			'novels' => $novels,
			'genre' => $genre
			]);
	}
}
