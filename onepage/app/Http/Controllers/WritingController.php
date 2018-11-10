<?php
namespace App\Http\Controllers;

use App\Novels;
use App\User;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Validator;

class WritingController extends Controller
{
    protected $novel;
    /*ログインしているかないかの判別*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    /* TOP表示 */
    public function index(){
        $genre = DB::table('genre')->get();
        // foreach ($genre as $item) {
        //     echo $item->genrename;
        // }
        return view('editor',compact('genre'));
    }
    //新規投稿機能
    public function doWriting(Request $novel){
        //ジャンル取得
        $genre = DB::table('genre')->get();
        //バリデーション
        $validator = Validator::make($novel->all(), ['title' => 'required|max:100']);
        //バリデーション： エラー
        if ($validator->fails()) {
            return redirect('/writing')->withInput()->withErrors($validator);
        }
        /*投稿機能*/
        //投稿日
        $published_at = null;
        if ($novel->publish == "publish") {
            $novel->published_at = date('Y-m-d H:i:s');
        }
        //下書きかどうか
        if ($novel->draft == "draft") {
            $novel->draft_flag = 1; //下書きとして保存
        } else {
            $novel->draft_flag = 0; //下書きにしないデフォルト
        }
        //投稿用Eloquent モデル
        if (empty($novel->id)) {
            $novel->genre_id;
            $novels = new Novels;
            $novels->user_id = Auth::User()->id;
            $novels->title = $novel->title;
            $novels->content = $novel->content;
            $novels->published_at = $novel->published_at;
            $novels->draft_flag = $novel->draft_flag;
            $novels->memo = $novel->memo;
             $novels->genre_id = $novel->genre_id;
            $novels->save();
        } else {
            $novels = $this->Updata($novel);
        }
        if ($novel->draft_flag == 1) {
            return view('editor', [
                'id' => $novels->id,
                'title' => $novels->title,
                'content' => $novels->content,
                'memo' => $novels->memo,
                'genre' =>$genre
                ]);
        } else {
            return redirect('/bookshelf');
        }
    }

    /* 投稿編集ページ */
    public function doEdit(Request $noveldata){
        if (isset($_POST['publish']) || isset($_POST['draft'])) {
              //投稿日
        $published_at = null;
        if ($noveldata->publish == "publish") {
            $noveldata->published_at = date('Y-m-d H:i:s');
        }
            //下書きかどうか
            if ($noveldata->draft == "draft") {
                $noveldata->draft_flag = 1; //下書きとして保存
            } else {
                $noveldata->draft_flag = 0; //下書きにしないデフォルト
                //$novels->published_at = date("Y/m/d H:i:s");
            }
            $novels = $this->Updata($noveldata);
        } else {
            $id = $noveldata->id;
            $noveldata = Novels::find($id);
        }
        if (isset($_POST['publish'])) {
            return redirect('/bookshelf');
        }
        $genre = DB::table('genre')->get();
        return view('editor', [
            'id' => $noveldata->id,
            'title' => $noveldata->title,
            'content' => $noveldata->content,
            'memo' => $noveldata->memo,
            'genre'=>$genre
        ]);
    }
    /* 投稿削除 */
    public function doDel(Novels $novel){
        $novel->delete();
        return redirect('/bookshelf');
    }
    /* 下書き編集共通 */
    public function Updata($noveldata){
        $novels = Novels::find($noveldata->id);
        $novels->user_id = Auth::User()->id;
        $novels->title = $noveldata->title;
        $novels->content = $noveldata->content;
        $novels->published_at = $noveldata->published_at;
        $novels->draft_flag = $noveldata->draft_flag;
        $novels->memo = $noveldata->memo;
        $novels->genre_id = $noveldata->genre_id;
        $novels->save();
        return $novels;
    }
}
