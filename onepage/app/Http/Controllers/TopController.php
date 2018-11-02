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
		//ジャンルリスト取得
		$genre = DB::table('genre')->get();
		//絞り込みタグからの値を取得
		$genre_id = "1";
		$genre_id = request('genre');
		$novels['genre_id'] = array(
                            'genre' => $genre_id,
                        );
		if(isset($genre_id)){
		$novels = Novels::ofGenre($genre_id)->paginate(10);
		}else{
		//ページ送り
		$novels = Novels::paginate(10);
		}
		return view('top',compact('novels','genre'));
	}
}
