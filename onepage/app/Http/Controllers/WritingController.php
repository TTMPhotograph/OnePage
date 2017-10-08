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
			// echo Auth::User()->id;
     	//バリデーション
      $validator = Validator::make($novel->all(), [ 'title' => 'required|max:100', ]); 
      //バリデーション： エラー
      if ($validator->fails()) {
      	return redirect('/writing') ->withInput() ->withErrors($validator); 
      }
      /*投稿機能*/
      //投稿日
       $published_at = null;
       if ($novel->publish =="publish") {
         $novel->published_at = date('Y-m-d H:i:s');
       }
      //下書きかどうか
       if ($novel->draft =="draft") {
        $novel->draft_flag =1;//下書きとして保存
       }else{
        $novel->draft_flag =0;//下書きにしないデフォルト
       }

        //投稿用Eloquent モデル
       if (empty($novel->id)) {
         $novels = new Novels; 
         $novels->author = Auth::User()->id;
         $novels->title = $novel->title; 
         $novels->content = $novel->content; 
         $novels->published_at = $novel->published_at;
         $novels->draft_flag = $novel->draft_flag; 
         $novels->memo = $novel->memo; 
         $novels->save();
       }else{
        Novels::where('id', '=',$novel->id)->update(
        ['author' => Auth::User()->id],
        ['title' => $novel->title],
        ['content' => $novel->content],
        ['published_at' => $novel->published_at],
        ['draft_flag' =>  $novel->draft_flag],
        ['memo' => $novel->memo]
        );
        $novelData = Novels::where('id', $novel->id)->first();
        $novels = $novelData;
       }

        // 「/」 ルートにリダイレクト 
         if ($novel->draft_flag == 1) {
              return view('editor',['id'=>$novels->id,'title'=>$novels->title,'content'=>$novels->content,'memo'=>$novels->memo]);
         }else{
              return redirect('/bookshelf');
         }
  }
  
	  // 投稿編集ページ
    public function doEdit() {

        return view('editor');
    }

  //投稿削除
    public function doDel(Novels $novel) {
       $novel->delete();
        return redirect('/bookshelf'); 
    }
}