<?php
// namespace App\Http\Controllers;
// use Illuminate\Support\Facades\Redirect;
// use Illuminate\Http\Request;
// use Auth;
// use Socialite;
// use App\User;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Novel;
use Validator;
class WritingController extends Controller
{
	/*ログインしているかないかの判別*/
	public function __construct()
	{
	    $this->middleware('auth');
	}
    //新規投稿機能
	public function doWriting(){
		return view('editor');
	}
	  /*投稿編集ページ*/
    public function doEdit() {
        return view('edit');
    }
}