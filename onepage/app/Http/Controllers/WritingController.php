<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\Novels;
use App\User;
use Validator;
class WritingController extends Controller
{
	 protected $novel;
	/*ログインしているかないかの判別*/
	public function __construct()
	{
	    $this->middleware('auth');
	}

    // TOP表示
	public function index(){
		return view('editor');
	}
    //新規投稿機能
	public function doWriting(Request $novel){
			echo Auth::User()->id;
     	//バリデーション
      $validator = Validator::make($novel->all(), [ 'title' => 'required|max:100', ]); 
      //バリデーション： エラー
      if ($validator->fails()) {
      	return redirect('/writing') ->withInput() ->withErrors($validator); 
      }
      
  		//投稿用Eloquent モデル
  		$published_at = null;
  		if ($novel->publish =="publish") {
  			$published_at = date('Y-m-d H:i:s');
  		}
  		$draft_flag =0;//下書きなし
  		if ($novel->draft =="draft") {
  			$draft_flag =1;//下書きとして保存
  		}
	   $novels = new Novels; 
	   $novels->author = Auth::User()->id;
	   $novels->title = $novel->title; 
	   $novels->content = $novel->content; 
	   $novels->published_at = $published_at;
     $novels->draft_flag = $draft_flag; 
     $novels->memo = $novel->memo; 
     $novels->save();
    // 「/」 ルートにリダイレクト 
    return redirect('/writing');

  }
	  // 投稿編集ページ
    public function doEdit() {
        return view('edit');
    }
}