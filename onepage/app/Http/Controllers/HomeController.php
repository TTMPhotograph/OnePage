<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*本棚表示投稿作品やお気に入りした作品一覧*/
    public function index()
    {
        return view('bookshelf');
    }
  
    //ログアウト
    public function doLogout()
    {
        Auth::logout();
        return Redirect::to('/');
    }
}
